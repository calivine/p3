<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('orders.welcome');
    }

    public function confirmation(Request $request)
    {
        return view('orders.confirm')->with([
            'customer' => $request->session()->get('customer'),
            'dipping_flavor' => $request->session()->get('dipping_flavor'),
            'toppings' => $request->session()->get('toppings'),
            'subtotal' => $request->session()->get('subtotal'),
        ]);
    }

    public function placeOrder(Request $request)
    {
        # Validate request data
        $request->validate([
            'flavor' => 'required',
            'quantity' => 'required',
            'customer' => 'required',
        ]);
        $toppings = $request->input('topping');
        $dipping_flavor = $request->input('flavor');
        $quantity = $request->input('quantity');
        $customer_name = $request->input('customer');
        $topping_price = 0;
        if ($request->has('topping'))
        {
            foreach ($toppings as $index => $topping) {
                $topping_price += 3;
            }
        }
        $prices = [
            '2' => 14.99,
            '4' => 19.99,
            '6' => 29.99,
            '12' => 49.99
        ];
        foreach ($prices as $amount => $price) {
            if ($quantity == $amount)
            {
                $unit_price = $price;
            }
        }
        $subtotal = $unit_price + $topping_price;
        # dump($subtotal);
        # dump($customer_name);
        # dump($dipping_flavor);
        # dump($toppings);
        # For each topping added to order
        # add (+) $3 to order total
        # add sales tax
        # Optional, collect zip codes/state to apply state's
        # sales tax and shipping cost.
        #
        # Redirect to /confirm page
        return redirect('/confirm')->with([
            'customer' => $customer_name,
            'dipping_flavor' => $dipping_flavor,
            'toppings' => $toppings,
            'subtotal' => $subtotal,
        ]);
    }
}
