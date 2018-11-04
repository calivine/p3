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
            'quantity' => $request->session()->get('quantity'),
            'toppings' => $request->session()->get('toppings'),
            'subtotal' => $request->session()->get('subtotal'),
        ]);
    }

    public function placeOrder(Request $request)
    {
        # Validate request data
        $request->validate([
            'flavor' => 'required|alpha',
            'quantity' => 'required',
            'customer' => 'required',
            'topping'
        ]);
        $toppings = $request->input('topping');
        $dipping_flavor = $request->input('flavor');
        $quantity = $request->input('quantity');
        $customer = $request->input('customer');
        $topping_price = 0;
        if ($request->has('topping'))
        {
            foreach ($toppings as $index => $topping) {
                $topping_price += 3;
            }
        }

        $prices_raw = file_get_contents(database_path('prices.json'));

        $prices = json_decode($prices_raw, true);

        $unit_price = 0;

        foreach ($prices as $amount => $price) {
            if ($quantity == $amount)
            {
                $unit_price += $price;
            }
        }

        $subtotal = $unit_price + $topping_price;

        # Redirect to /confirm page
        return redirect('/confirm')->with([
            'customer' => $customer,
            'dipping_flavor' => $dipping_flavor,
            'quantity' => $quantity,
            'toppings' => $toppings,
            'subtotal' => $subtotal,
        ]);
    }
}
