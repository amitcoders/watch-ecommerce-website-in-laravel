<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class ProjectController extends Controller
{
    public function index()
    {
       $products =  DB::table('products')->limit(4)->get();
       Log::info("products delete ho rha hai".$products);
        return view('index', compact('products'));
    }

    public function single_product(Request $request, $id)
    {
       $product_array = DB::table('products')->where('id',$id)->get();
       return view('single_product',compact('product_array'));
    }

    public function products(){
        $products = DB::table('products')->get();
        return view('products',compact('products'));
    }
}
