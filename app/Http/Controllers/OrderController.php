<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('orders.welcome');
    }

    public function order()
    {
        return 'Process order page';
    }

    public function confirmation()
    {
        return 'confirmation page';
    }
}
