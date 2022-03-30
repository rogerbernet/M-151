<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function addProduct(Request $request){
        if(session()->get("userId") == NULL){
            return redirect("/login");
        }
        else{
            $id = $request->input("id");
            $count = $request->input("count");
            session()->put($id,$count);
            return redirect("/products");
        }
    }
    public function cart(){
        $products = \App\Models\Product::all();

        return view('cart', ['products' => $products]);
    }
}
