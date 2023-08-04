<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Products;
use App\Models\Cart;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    //

    public function index(){
        $cart = "";
        if(auth()->user()){
            $cart = Cart::where('user_id', auth()->user()->id)->count();
        }

        $result = DB::table('products')
            ->join('carts', 'carts.product_id', "=", "products.id")
            ->where('carts.user_id', auth()->user()->id)
            ->orderBy('carts.created_at', 'desc')
            ->get();

        return view('cart',['data' => $result,'cart' => $cart]);
    }

    public function store(Request $request){
        $validate = $request->validate([
            'user_id' => ['required'],
            'product_id' => ['required'],
            'quantity' => ['required'],
        ]);

        $cart = Cart::where('user_id', $validate['user_id'])->where('product_id', $validate['product_id'])->first();

        if($cart){
            $cart['quantity'] = $cart['quantity'] + $validate['quantity'];
            $cart->save();
            return redirect()->back()->with('message', 'Added to cart.');
        }

        Cart::create($validate);
        return redirect()->back()->with('message', 'Added to cart.');
    }

    public function destroy($id){
        $user = Cart::where('id', $id)->delete();
        return redirect('/cart')->with('message', 'Removed from the cart.');
    }

    public function checkout($id){
        Cart::where('user_id', $id)->delete();
        return redirect('/cart')->with('message', 'Order successfully. Thank you for your purchase.');
    }

    public function updateQuantity(Request $request, $id){
        $result = Cart::where('id', $id)->first();
        $result['quantity'] = $request['quantity'.$id];
        $result->save();

        return redirect('/cart');
    } 
}
