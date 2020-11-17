<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    function index()
    {
            $data = Product::all();
            return view('product',['products'=>$data]);
    }


    function detail($id)
    {
        $data =  Product::find($id);
        return view('details',['product'=>$data]);

    }


    function search(Request $req)
    {
          $data = Product::where('name','like','%'.$req->input('query').'%')->get();
          return view('/search',['search'=>$data,'query'=>$req->input('query')]);
    }


    function addToCart(Request $req)
    {
        if($req->session()->has('user')) {
            $cart = new Cart();
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');

        } else {
            return redirect('/login');
        }
    }


    public static function cartItem()
    {
        $user_id = session()->get('user')['id'];

        $items = Cart::where('user_id',$user_id)->get();
        return count($items);

    }
}
