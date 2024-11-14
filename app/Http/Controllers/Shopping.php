<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Shopping extends Controller
{
    public function index()
    {
        return view('shopping.landingpage');
    }

    public function meals()
    {
        $prods = Products::All();

        return view('shopping.meals', ['prods' => $prods]);
    }

    public function mealsDetails($id)
    {
        //Compines products & products details tables with the ID. 
        $prod_details = DB::table('products')
        ->join('products__details', 'products.id', '=', 'products__details.id_products')
        ->where('products.id', '=', $id)
        ->first();

        return view('shopping.meals_details', ['prod_details'=> $prod_details]);
    }

    public function addToCart()
    {
        $count = session::get('counter');
        $count++;
        session::put('counter', $count);

        return redirect()->route('meals');
    }


    public function cart()
    {
        return view('shopping.cart');
    }
}