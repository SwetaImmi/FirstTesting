<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function app()
    {       
        $user = User::all();


     return view('layout.app-ui',['user' => $user]); 
    
        
    }  

     
    public function index()
    {       
        $user = User::all();

        // if (Auth::check()) {
        //     if (Auth::user()->role == 'Admin') { // if the current role is Administrator
        //         // return view('Crud.home', ['user' => $user]);
        //         return view('static.index', ['user' => $user]);
        //         // return 1;
        //     }elseif(Auth::user()->role == 'User'){ // if the current role is User
        //         // return view('Crud.home', ['user' => $user]);
        //         return view('static.index', ['user' => $user]);
        //     }else{
                return view('static.dashboard',['user' => $user]); 
        //     }
        // }
        // print_r($user);
        
    }  

    /**
     * Show the form for creating a new resource.
     */
    public function view_prdt()
    {       
       return view('static.product_forms');
        
    }  

    public function create(Request $request)
    {
        if ($request->file != "") {
            $fileName = time() . '.' . $request->file->extension();
            $request->file->move(('uploads'), $fileName);
        } else {
            $fileName = "1";
        }
        
        if ($request->image != "") {
            $image = time() . '.' . $request->image->extension();
            $request->image->move(('uploads'), $image);
        } else {
            $image = "0";
        }
       
      
        $product = new Product();
       
        
        $product->product_name =  $request->product_name;
        $product->product_catogery =  $request->product_catogery;
        $product->product_quantity =  $request->product_quantity;
        $product->product_price =  $request->product_price;
        $product->product_image =  $image;
        // print_r($product); die('text');
        // dd($request->product_image);
        // die();
        $product->save();
        return redirect('/product_table');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
       $product = Product::all();
       return view('static.product_table', ['product' => $product]); 

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request ,$product_id)
    {
        
        $product = Product::findOrFail($product_id);
        // print_r($product);
        // die("ccc");
        // $product = Product::find($product_id);
        return view('static.update_product',['product' =>  $product ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    



    public function storeImg(Request $request){
        
        if ($request->file != "") {
            $fileName = time() . '.' . $request->file->extension();
            $request->file->move(('uploads'), $fileName);
        } else {
            $fileName = "1";
        }
        
        if ($request->image != "") {
            $image = time() . '.' . $request->image->extension();
            $request->image->move(('uploads'), $image);
        } else {
            $image = "0";
        }
        // print_r($image);
        // die();
        $user = new Product();
        $user->product_image = $image;
        $user->save();
        print_r($user);
    }
}
