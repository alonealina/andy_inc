<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;
use App\Models\Brand;

class GetBrand
{
    public function handle($request, Closure $next)
    {
        $header_brand_list = Brand::get();
        View::share('header_brand_list', $header_brand_list);
        return $next($request);
    }
}