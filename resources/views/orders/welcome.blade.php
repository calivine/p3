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
                @include('modules.flavor-select', ['field' => '', 'text' => 'Select Flavor'])
                @include('modules.flavor-select', ['field' => 'milk', 'text' => 'Milk Chocolate'])
                @include('modules.flavor-select', ['field' => 'dark', 'text' => 'Dark Chocolate'])
                @include('modules.flavor-select', ['field' => 'white', 'text' => 'White Chocolate'])
                @include('modules.flavor-select', ['field' => 'yogurt', 'text' => 'Yogurt Topping'])
            </select>
            @include('modules.input-errors', ['field' => 'flavor'])
            <h2>
                Toppings: (+$3 per topping)
            </h2>
            <ul class='checkboxes'>
                <li>
                    <label for='rainbow'>Rainbow Sprinkles</label>
                    <input type='checkbox' name='topping[]' id='rainbow' value='rainbow'>
                </li>
                <li>
                    <label for='chocolate'>Chocolate Sprinkles</label>
                    <input type='checkbox' name='topping[]' id='chocolate' value='chocolate'>
                </li>
                <li>
                    <label for='walnuts'>Chopped Walnuts</label>
                    <input type='checkbox' name='topping[]' id='walnuts' value='walnuts'>
                </li>
                <li>
                    <label for='pecans'>Chopped Pecans</label>
                    <input type='checkbox' name='topping[]' id='pecans' value='pecans'>
                </li>
                <li>
                    <label for='pearls'>Candy Pearls</label>
                    <input type='checkbox' name='topping[]' id='pearls' value='pearls'>
                </li>
            </ul>
            <label for='quantity'>
                Amount:
            </label>
            <select name='quantity' id='quantity'>
                @include('modules.quantity-select', ['field' => '2', 'text' => '2 for $14.99'])
                @include('modules.quantity-select', ['field' => '4', 'text' => '4 for $19.99'])
                @include('modules.quantity-select', ['field' => '6', 'text' => '6 for $29.99'])
                @include('modules.quantity-select', ['field' => '12', 'text' => '12 for $49.99'])
            </select>
        </fieldset>
        <fieldset>
            <h2>Customer Details:</h2>
            <label for='customer'>Name:</label>
            <input type='text' autocomplete='off' name='customer' id='customer' value='{{ old('customer') }}'>
            @include('modules.input-errors', ['field' => 'customer'])
        </fieldset>
        <input type='submit' value='Place Order'>
    </form>
@endsection