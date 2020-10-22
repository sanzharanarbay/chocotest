<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.10.2020
 * Time: 10:01
 */

namespace App\Filters;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;


class AbstractFilter
{

    protected $request;

    protected $filters = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function filter(Builder $builder)
    {
        foreach($this->getFilters() as $filter => $value)
        {
            $this->resolveFilter($filter)->filter($builder, $value);
        }
        return $builder;
    }

    protected function getFilters()
    {
        return array_filter($this->request->only(array_keys($this->filters)));
    }

    protected function resolveFilter($filter)
    {
        return new $this->filters[$filter];
    }


}
