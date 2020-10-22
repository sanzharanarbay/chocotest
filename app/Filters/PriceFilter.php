<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.10.2020
 * Time: 10:05
 */

namespace App\Filters;


use Illuminate\Database\Eloquent\Builder;

class PriceFilter
{
    public static function filter(Builder $builder, $value)
    {
        return $builder->where('price', $value);
    }
}
