<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductsController extends Controller
{

    // display all products and/or display all product matches the search function
    public function index(){
        $query = request()->query('search-edit');
        $cart = "";
        if(auth()->user()){
            $cart = Cart::where('user_id', auth()->user()->id)->count();
        }

        if($query){
            $result = Products::where('product_name', 'LIKE', "%{$query}%")->latest()->simplePaginate(12);
        } else {
            $result = Products::latest()->simplePaginate(12);
        }
        return view('index', ['data' => $result, 'cart' => $cart]);
    }

    // display all drinks in product_category
    public function showDrinks(){
        $cart = "";
        if(auth()->user()){
            $cart = Cart::where('user_id', auth()->user()->id)->count();
        }

        $result = Products::where('product_category', 'drinks')->latest()->simplePaginate(12);
        return view('products.drinks', ['data' => $result, 'cart' => $cart]);
    }

    // display all snacks in product_category
    public function showSnacks(){
        $cart = "";
        if(auth()->user()){
            $cart = Cart::where('user_id', auth()->user()->id)->count();
        }

        $result = Products::where('product_category', 'snacks')->latest()->simplePaginate(12);
        return view('products.snacks', ['data' => $result, 'cart' => $cart]);
    }

    // display all sweets in product_category
    public function showSweets(){
        $cart = "";
        if(auth()->user()){
            $cart = Cart::where('user_id', auth()->user()->id)->count();
        }

        $result = Products::where('product_category', 'sweets')->latest()->simplePaginate(12);
        return view('products.sweets', ['data' => $result, 'cart' => $cart]);
    }

    // display all products
    public function showProducts(){
        $query = request()->query('search');
        $cart = "";
        if(auth()->user()){
            $cart = Cart::where('user_id', auth()->user()->id)->count();
        }

        if($query){
            $result = Products::where('product_name', 'LIKE', "%{$query}%")->latest()->simplePaginate(20);
        } else {
            $result = Products::latest()->simplePaginate(20);
        }

        return view('products.products', ['data' => $result, 'cart' => $cart]);
    }

    // display one product using id number
    public function showProduct($id){
        $cart = "";
        if(auth()->user()){
            $cart = Cart::where('user_id', auth()->user()->id)->count();
        }

        $result = Products::where('id', $id)->get();
        $result2 = Products::latest()->simplePaginate(4);
        return view('products.product', ['data' => $result, 'data2' => $result2, 'cart' => $cart]);
    }

    // add new product
    public function store(Request $request){
        $validated = $request->validate([
            'product_name' => ['required'],
            'product_description' => ['required'],
            'product_category' => ['required'],
            'product_size' => ['required'],
            'product_price' => ['required'],
            'product_img' => ['required'],
        ]);

        Products::create($validated);

        return redirect('/')->with('message', 'Product successfully added.');
    }

    // delete product
    public function remove($id){
        $user = Products::where('id', $id)->first();
        $user->delete();

        return redirect('/')->with('message', 'Successfully removed product.');
    }

    public function update(Request $request, $id){
        $result = Products::where('id', $id)->first();

        $validated = $request->validate([
            'product_name' => ['required'],
            'product_description' => ['required'],
            'product_category' => ['required'],
            'product_size' => ['required'],
            'product_price' => ['required'],
            'product_img' => ['required'],
        ]);
        
        $result['product_name'] = $validated['product_name'];
        $result['product_description'] = $validated['product_description'];
        $result['product_category'] = $validated['product_category'];
        $result['product_size'] = $validated['product_size'];
        $result['product_img'] = $validated['product_img'];
        
        $result->save();

        return redirect('/')->with('message', 'Product successfully updated.');
    }

    public function showUpdate($id){
        $cart = "";
        if(auth()->user()){
            $cart = Cart::where('user_id', auth()->user()->id)->count();
        }

        $result = Products::where('id', $id)->get();

        return view('products.updateproduct', ['data' => $result, 'id' => $id, 'cart' =>  $cart]);
    }
}
