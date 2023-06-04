<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Session;

class CheckoutController extends Controller
{
    private $customer;
    private $order;
    private $orderDetail;
    private $cartProducts;
   

    public function newOrder(Request $request)
    {
        // dd($request);
        if (Session::get('customer_id'))
        {
            $this->customer = Customer::find(Session::get('customer_id'));
        }
        else
        {
            $request->validate([
                'name'               => 'required',
                'mobile'             => 'required',
                'delivery_address'   => 'required',
            ]);
            $this->customer = Customer::newCustomer($request);

            Session::put('customer_id', $this->customer->id);
            Session::put('customer_name', $this->customer->name);
        }

        if ($request->payment_method == 1)
        {
            // dd($request);
            $this->order    = Order::newOrder($this->customer, $request);
            OrderDetail::newOrderDetail($this->order);

            $this->cartProducts = \Cart::getContent();
            foreach ($this->cartProducts as $cartProduct)
            {
                \Cart::remove($cartProduct->id);
            }

           
        }
        return redirect('/complete-order')->with('message', 'আপনার অর্ডারটি সফলভাবে সম্পন্ন হয়েছে আমাদের কল সেন্টার থেকে ফোন করে আপনার অর্ডারটি কনফার্ম করা হবে');
    }
    public function completeOrder()
    {
        return view('website.checkout.complete-order');
    }
}
