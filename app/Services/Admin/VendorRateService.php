<?php

namespace App\Services\Admin;

use Exception;
use App\Models\UserVendorRate;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Database\Query\Builder;
use App\Repositories\Admin\VendorRateRepository;
use App\Repositories\Api\VendorRepository ;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class VendorRateService
{
    /**
     * Vendor Rate Service Constructor.
     *
     * @param VendorRateRepository $repository
     */
    public function __construct(public VendorRateRepository $repository,
    public VendorRepository $vendorRepository) {}

    /**
     * Get Vendors Rates.
     *
     * @return Collection
     */
    public function getAllVendorRates() : Collection
    {
        return $this->repository->all()->get();
    }

    /**
     * Get Vendors Rates with pagination.
     *
     * @param Request $request
     * @param integer $perPage
     * @param string $orderBy
     * @return LengthAwarePaginator
     */
    public function getAllVendorRatesWithPagination(Request $request, int $perPage = 10, string $orderBy = "DESC") : LengthAwarePaginator
    {
        $vendorRates = $this->repository
            ->all()
            ->newQuery()
            ->when(
                $request->has('search') &&
                $request->has('relation') && 
                in_array($request->get('relation'), UserVendorRate::ALLOWED_FILTER_RELATION),
                fn ($q) => $q->whereHas(
                    $request->get('relation'),
                    fn ($relation) => $relation->where('name', 'like', "%{$request->search}%")
                )
            )
            ->when(
                $request->has("admin_approved") && in_array($request->get("admin_approved") ,[2,3]),
                fn($q) => $q->where("admin_approved", "=", $request->admin_approved)
            );

        return $vendorRates->orderBy("created_at", $orderBy)->paginate($perPage);
    }

    /**
     * Get Vendor Rate using ID.
     *
     * @param integer $id
     * @return UserVendorRate
     */
    public function getVendorRateUsingID(int $id) : UserVendorRate
    {
        return $this->repository
                    ->all()
                    ->where('id',$id)
                    ->first();
    }

    /**
     * Update VendorRate Using ID.
     *
     * @param integer $rate_id
     * @param Request $request
     * @return array
     */
    public function updateVendorRate(int $rate_id, Request $request) : array
    {
        $request->merge([
            "admin_id" => auth()->user()->id,
        ]);

        $vendorRate = $this->getVendorRateUsingID($rate_id);

        $this->repository->update($request->except('_method', '_token'), $vendorRate);

        $this->vendorRepository->calculateRate($vendorRate->vendor_id);   

        return [
            "success" => true,
            "title" => trans("admin.vendorRates.messages.updated_successfully_title"),
            "body" => trans("admin.vendorRates.messages.updated_successfully_body"),
        ];
    }

    /**
     * Delete Vendor Rate Using.
     *
     * @param int $id
     * @return array
     */
    public function deleteVendorRate(int $id) : array
    {
        $vendorRate = $this->getvendorRateUsingID($id);
        $isDeleted = $this->repository->delete($vendorRate);
        
        if($isDeleted == true) {
            return [
                "success" => true,
                "title" => trans("admin.vendorRates.messages.deleted_successfully_title"),
                "body" => trans("admin.vendorRates.messages.deleted_successfully_message"),
            ];
        }

        return [
            "success" => false,
            "title" => trans("admin.vendorRates.messages.deleted_error_title"),
            "body" => trans("admin.vendorRates.messages.deleted_error_message"),
        ];
    }
}
