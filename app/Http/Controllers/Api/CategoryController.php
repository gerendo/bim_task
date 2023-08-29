<?php
namespace App\Http\Controllers\Api;

use App\Enums\CategoryLevels;
use Illuminate\Http\JsonResponse;
use App\Services\Api\CategoryService;
use App\Http\Controllers\Api\ApiController;
use App\Http\Resources\Api\CategoryResource;
use App\Http\Resources\Api\CategoryWithProductsResource;

class CategoryController extends ApiController
{
    /**
     * Category Controller Constructor.
     *
     * @param CategoryService $service
     */
    public function __construct(public CategoryService $service) {}

    /**
     * List all parent categories.
     *
     * @return JsonResponse
     */
    public function getCategoryTreeAll(int $category_id)
    {
        $category = $this->service->getCategoryUsingID($category_id);
        $categories = $this->service->getCategoryTreeAll($category);
        return $this->setApiResponse(true, 200,new CategoryResource($categories),
            __("api.categories-return-success"));
    }

    /**
     * List all Sub-Categories And Child-Categories Od A Parent category.
     *
     * @return JsonResponse
     */
    public function parent(int $category_id) : JsonResponse
    {
        $categories = $this->service->getParentsSubChildCategories($category_id);

        return $this->setApiResponse(true, 200, new CategoryResource($categories),
            __("api.categories-return-success"));
    }

    /**
     * Get Category using id.
     *
     * @param id $category_id
     * @return Response
     */
    public function show(int $category_id) : JsonResponse
    {
        $category = $this->service->getCategoryUsingID($category_id);
        return $this->setApiResponse(true, 200, new CategoryResource($category),
            __('api.category-return-success'));
    }

    /**
     * Get Selected Parent Category with Sub-Categories And Products.
     * @param integer $category_id
     * @return JsonResponse
     */
    public function getCategoryProductsAll(int $category_id): JsonResponse
    {
        $category = $this->service->getCategoryUsingID($category_id);
        $products = $this->service->getCategoryProducts($category);
        return $this->setApiResponse
        (
            true,
            200,
            $products,
            __("api.categories-return-success")
        );
    }

    public function homePageCategory() : JsonResponse
    {
        $categories = $this->service->getHomePageCategory();
        return $this->setApiResponse(true, 200, CategoryWithProductsResource::collection($categories),
            __('api.categories-return-success'));

    }

}
