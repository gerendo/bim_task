<?php

namespace App\Enums;

enum ProductQuantityStatus {
    /**
     * The Product Quantity is inactive state.
     */
    public const INACTIVE = 0;

    /**
     * The Product Quantity is active state.
     */
    public const ACTIVE = 1;

    /**
     * Get Product Quantity status list depending on app locale.
     *
     * @return array
     */
    public static function getStatusList(): array
    {
        return [
            self::INACTIVE => trans('admin.productQuantites.inactive'),
            self::ACTIVE => trans('admin.productQuantites.active')
        ]; 
    }

    /**
     * Get Product Quantity status list with class color depending on app locale.
     *
     * @return array
     */
    public static function getStatusListWithClass(): array
    {
        return [
            self::INACTIVE => [
                "value" => self::INACTIVE, 
                "name" => trans('admin.cities.inactive'),
                "class" => "badge badge-soft-danger text-uppercase"
            ],
            self::ACTIVE => [
                "value" => self::ACTIVE,
                "name" => trans('admin.cities.active'),
                "class" => "badge badge-soft-success text-uppercase"
            ]
        ]; 
    }

    /**
     * Get Product Quantity status depending on app locale.
     *
     * @param bool $is_active
     * @return string
     */
    public static function getStatus(bool $is_active): string
    {
        return self::getStatusList()[$is_active];
    }

    /**
     * Get Product Quantity status with class color depending on app locale.
     *
     * @param int $is_active
     * @return array
     */
    public static function getStatusWithClass(int $is_active): array
    {
        return self::getStatusListWithClass()[$is_active];
    }
}