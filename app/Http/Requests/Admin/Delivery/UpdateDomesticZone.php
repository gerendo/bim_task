<?php

namespace App\Http\Requests\Admin\Delivery;

use App\Enums\DomesticZone;
use Illuminate\Foundation\Http\FormRequest;

class UpdateDomesticZone extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'name_ar' => 'required|string|min:3|max:190',
            'name_en' => 'required|string|min:3|max:190',
            'type' => 'required|in:'. implode(",", DomesticZone::getTypesArray()),
        ];

        if (request()->get('type') == DomesticZone::NATIONAL_TYPE) {
            $rules['cities'] = 'required|array|filled';
            $rules['cities.*'] = 'required|exists:cities,id';
            $rules['additional_kilo_price'] = "nullable|numeric|min:0|max:10000000";
            $rules['delivery_fees'] = "nullable|numeric|min:0|max:10000000";
            $rules['delivery_fees_covered_kilos'] = "nullable|integer|min:0|max:10000000";
        } else {
            $rules['countries'] = 'required|array|filled';
            $rules['countries.*'] = 'required|exists:countries,id';
        }
        return $rules;
    }

    public function attributes()
    {
        return [
            'name_ar' => __('admin.delivery.domestic-zones.name-ar'),
            'name_en' => __('admin.delivery.domestic-zones.name-en'),
            'countries' => __('admin.delivery.domestic-zones.countries'),
            'countries.*' => __('admin.delivery.domestic-zones.countries'),
            'cities' => __('admin.delivery.domestic-zones.cities'),
            'cities.*' => __('admin.delivery.domestic-zones.cities'),
            'type' => __('admin.delivery.domestic-zones.delivery-type'),
            'additional_kilo_price' => __('admin.delivery.domestic-zones.additional_kilo_price'),
            'delivery_fees' => __('admin.delivery.domestic-zones.delivery_fees'),
            'delivery_fees_covered_kilos' => __('admin.delivery.domestic-zones.delivery_fees_covered_kilos'),
        ];
    }
}
