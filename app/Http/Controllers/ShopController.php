<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Area::find(1)->shops;

        $area = Shop::find(2)->area;

        // $routes = Shop::find(1)->routes()->get();
        $routes = Shop::find(1)->routes;

        dd($shops, $area, $routes);
    }
}
