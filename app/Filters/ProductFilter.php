<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.10.2020
 * Time: 10:01
 */

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use App\Filters\AbstractFilter;
use App\Models\Product;

class ProductFilter extends AbstractFilter
{
    protected $filters = [
        'color' => ColorFilter::class,
        'weight' => WeightFilter::class,
        'price' => PriceFilter::class,
    ];
}
