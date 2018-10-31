@extends('layouts.master')

@section('title')
    {{ config('app.name') }}
@endsection

@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <!-- <link href='/css/books/show.css' rel='stylesheet'> -->
@endpush

@section('content')
    <form method='POST' action='/placeOrder'>
        {{ csrf_field() }}
        <fieldset>
            <legend>Place order for chocolate covered strawberries below:</legend>
            <label for='flavor'>
                Select flavor of dipping chocolate
            </label>
            <select name='flavor' id='flavor' autofocus>
                <option value=''>
                    Flavor
                </option>
                <option value='milk'>
                    Milk Chocolate
                </option>
                <option value='dark'>
                    Dark Chocolate
                </option>
                <option value='white'>
                    White Chocolate
                </option>
            </select>
            @include('modules.input-errors', ['field' => 'flavor'])
            <legend>
                Toppings: (+$3 per topping)
            </legend>
            <ul class='checkboxes'>
                <li>
                    <label for='rainbow'>Rainbow sprinkles</label>
                    <input type='checkbox' name='topping[]' value='rainbow' id='rainbow'>
                </li>
                <li>
                    <label for='chocolate'>Chocolate sprinkles</label>
                    <input type='checkbox' name='topping[]' value='chocolate' id='chocolate'>
                </li>
                <li>
                    <label for='walnuts'>Chopped walnuts</label>
                    <input type='checkbox' name='topping[]' value='walnuts' id='walnuts'>
                </li>
            </ul>
            <label for='quantity'>
                Amount:
            </label>
            <select name='quantity' id='quantity'>
                <option value='2'>
                    2
                </option>
                <option value='4'>
                    4
                </option>
                <option value='6'>
                    6
                </option>
                <option value='12'>
                    12
                </option>
            </select>
        </fieldset>
        <fieldset>
            <label for='customer'>Name:</label>
            <input type='text' autocomplete='off' name='customer' id='customer'>
        </fieldset>
        <input type='submit' value='Place Order'>
    </form>
@endsection