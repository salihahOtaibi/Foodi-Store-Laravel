<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Products_Details;
use App\Models\Order;
use App\Models\User;


use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    public function index(Request $request)
    {
        $totalProds = Products::count();
        $totalOrders = Order::count();
        $totalUsers = User::count();

        return view('dashboard.index', ['totalProds' => $totalProds, 'totalOrders' => $totalOrders, 'totalUsers' => $totalUsers]);
    }

    public function products()
    {
        $prod = Products::All();

        return view('dashboard.products', ['prod' => $prod]);
    }

    public function createProduct(Request $request)
    {
        $prod = Products::create([
            'name'=>$request->productName, 
            'description'=>$request->productDescription
        ]);

        $prod ->save();
        
        return redirect()->route('products');
    }

    public function delete()
    {
        $id=$_GET['id'];
        
        $prod = Products::find($id);
        $prod->delete();
    }

    public function update(Request $request)
    {
        Products::where('id', $request->id)
        ->update(['name' => $request->t1, 'description'=> $request->t2]);

        return redirect()->route('products');
    }


    public function edit($id)
    {
        $products = Products::find($id);
        return view('dashboard.edit', ['products'=>$products]);
    }

    public function showProductDetails()
    {
        $prod = Products::All();

        //compines products & products details tables with the ID. 
        $prod_details = DB::table('products')
        ->join('products__details', 'products.id', '=', 'products__details.id_products')
        ->get();

        return view('dashboard.productDetails', ['prod'=> $prod, 'prod_details'=> $prod_details]);
    }


    public function createNewDetails(Request $request)
    {
        $prod_details = Products_Details::create([
            'id_products'=>$request->id_product, 
            'price' =>$request->productPrice, 
            'qty' => $request->qty, 
            'img' => $request->img, 
            'category'=>$request->category
        ]);
        $prod_details->save();

        return redirect()->route('showDet');
    }    


    //Orders
    public function orders()
    {
        $orders = Order::All();

        return view('dashboard.orders', ['orders' => $orders]);
    }
    
}
