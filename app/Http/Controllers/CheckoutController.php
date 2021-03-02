<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Facades\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
=======
use Illuminate\Http\Request;
>>>>>>> 35d55bb4a495c78017befa2feeed9cde191589cc

class CheckoutController extends Controller
{
    public function checkout()
    {
<<<<<<< HEAD
        return view('store.checkout');
    }

    public function checkoutSave(Request $request)
    {       
        $validation = $request->validate([
                                            'name'    => 'required|min:3|max:200',
                                            'phone'   => 'required|max:13',
                                            'address' => 'required',
                                        ]);
        
        $order = new Order();

        $order->totalSum  = Session::get('totalSum');
        $order->name      = $request->name;
        $order->phone     = $request->phone;
        $order->address   = $request->address;
        $order->status_id = 1;

        $order->save();



        foreach(Session::get('cart') as $id => $product){
            $orderItem = new OrderItem();

            $orderItem->order_id      = $order->id;
            $orderItem->product_name  = $product['name'];
            $orderItem->product_price = $product['price'];
            $orderItem->product_qty   = $product['qty'];
            $orderItem->product_img   = $product['img'];

            $orderItem->save();
        }
        Cart::clear();


        return back()->with('success', 'Спасибо за заказ');
=======
        return view('store.checkout');        
    }

    public function checkoutSave(Request $request)
    {
        // return view('store.checkout');        
>>>>>>> 35d55bb4a495c78017befa2feeed9cde191589cc
    }
    
}
