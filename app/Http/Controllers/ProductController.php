<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index',[
            "products"=>Product::all(),
            "randomProducts"=>Product::inRandomOrder()->take(3)->get()
        ]);
    }

    public function detail(Product $product)
    {
        return view('products.detail',[
            "product"=>$product
        ]);
    }

    public function search(Request $request)
    {
        $data=Product::where('name','like','%'.request('search').'%')->get();
        return view('products.search',[
            "products"=>$data
        ]);
    }

    public function addToCart(Request $request)
    {
        if(auth()->user())
        {
            $cart=new Cart;
            $cart->user_id=auth()->user()->id;
            $cart->product_id=request('product_id');
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }  
    }

    public static function cartItem()
    {
        $userId=auth()->user()->id;
        return Cart::where('user_id',$userId)->count();
    }

    public function cartList()
    {
        $userId=auth()->user()->id;
        $products=Cart::join('products','carts.product_id', '=' , 'products.id')
                ->where('carts.user_id', $userId)
                ->select('products.*','carts.id as cart_id')
                ->get(); 

        return view('products.cartList',[
            "products"=>$products
        ]);
    }

    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('/cartList');
    }

    public function orderNow()
    {
        $userId=auth()->user()->id;
        $total=Cart::join('products','carts.product_id', '=' , 'products.id')
                ->where('carts.user_id', $userId)
                ->select('products.*','carts.id as cart_id')
                ->sum('products.price'); 

        return view('products.order',[
            "total"=>$total
        ]);
    }

    public function orderPlace(Request $request)
    {
        $userId=auth()->user()->id;
        $allCarts=Cart::where('user_id',$userId)->get();
        foreach($allCarts as $cart)
        {
            $order= new Order;
            $order->user_id=$userId;
            $order->product_id=$cart->product_id;
            $order->status="pending";
            $order->payment_method=$request->payment;
            $order->payment_status="pending";
            $order->address=$request->address;
            $order->save();
        }
        Cart::where('user_id',$userId)->delete();
        return redirect('/');
    }

    public function myOrders()
    {
        $userId=auth()->user()->id;
        $orders=Order::join('products','orders.product_id', '=' , 'products.id')
                ->where('orders.user_id', $userId)
                ->get(); 

        return view('products.myOrders',[
            "orders"=>$orders
        ]);
    }
}
