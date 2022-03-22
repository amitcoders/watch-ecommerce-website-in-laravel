<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CartController extends Controller
{
    public function cart(){
        return view('cart');
    }

    public function add_to_cart(Request $request){
        // if we have a cart
       if($request->session()->has('cart')){

        $cart = $request->session()->get('cart');
        $products_array_ids = array_column($cart, 'id');
        $id  = $request->input('id');

        if(!in_array($id,$products_array_ids)){
            $name = $request->input('name');
            $image = $request->input('image');
            $price = $request->input('price');
            $quantity = $request->input('quantity');
            $sale_price = $request->input('sale_price');

            if($sale_price != null){
                $price_to_change = $sale_price;

            }else{
                $price_to_change = $price;
            }

            $products_array = array(
                'id' => $id,
                'name' => $name,
                'image' => $image,
                'price' => $price_to_change,
                'quantity' => $quantity
            );
            $cart[$id] = $products_array;
            $request->session()->put('cart',$cart);



            // product is already in cart
        }else{
            echo "<script>alert('product is already in cart')</script>";
        }

        return view('cart');


        //if we don't have a cart in session
       }else{

        $cart = array();

        $name = $request->input('name');
            $image = $request->input('image');
            $price = $request->input('price');
            $quantity = $request->input('quantity');
            $sale_price = $request->input('sale_price');

            if($sale_price != null){
                $price_to_change = $sale_price;

            }else{
                $price_to_change = $price;
            }

            $products_array = array(
                'id' => $id,
                'name' => $name,
                'image' => $image,
                'price' => $price_to_change,
                'quantity' => $quantity
            );
            $cart['id'] = $products_array;



            return view('cart');

       }

    }


}
