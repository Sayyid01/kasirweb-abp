<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProdukAPIController extends Controller
{
    public function drinkProduk(){
        $produkDrink = DB::table('produk_drink')->get();
        if(request()->segment(1) == 'api') return response() -> json([
            "error"=>false,
            "data"=>$produkDrink,
        ]);
        return view('drinkProduk.index',['$drinkList'=>$produkDrink]);
    }

    public function foodProduk(){
        $produkFood = DB::table('produk_food')->get();
        if(request()->segment(1) == 'api') return response() -> json([
            "error"=>false,
            "data"=>$produkFood,
        ]);
        return view('foodProduk.index',['$foodList'=>$produkFood]);
    }
}
