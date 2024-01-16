<?php

namespace App\Pipelines\Filters;


use Closure;
use Illuminate\Database\Eloquent\Builder;

class BySearch
{
    public function __construct(protected $search)
    {
        //
    }

    public function handle(Builder $builder, Closure $next)
    {

        return $next($builder)->when(
            $this->search,
            function ($query, $search) {
                return $query->where(function ($query) use ($search) {
                    $query->where('title', 'LIKE', '%' . $search . '%')
                        ->orWhere('content', 'LIKE', '%' . $search . '%');
                });
            }
        );
    }
}
