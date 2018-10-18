<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function submit()
    {
        return 'submit page';
    }

    public function confirmation()
    {
        return 'confirmation page';
    }
}
