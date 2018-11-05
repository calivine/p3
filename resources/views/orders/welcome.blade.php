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
            <legend>Place order for chocolate covered strawberries below</legend>
            <label for='flavor'>
                Select flavor of dipping sauce:*
                <select name='flavor' id='flavor' autofocus>
                    <option value=''>
                        Select Flavor
                    </option>
                    @include('modules.flavor-select', ['field' => 'Milk Chocolate'])
                    @include('modules.flavor-select', ['field' => 'Dark Chocolate'])
                    @include('modules.flavor-select', ['field' => 'White Chocolate'])
                    @include('modules.flavor-select', ['field' => 'Yogurt'])
                </select>
            </label>
            @include('modules.input-errors', ['field' => 'flavor'])
            <h2>
                Toppings: (+$3 per topping)
            </h2>
            <ul class='checkboxes'>
                @include('modules.toppings-checkbox', ['field' => 'Rainbow Sprinkles'])
                @include('modules.toppings-checkbox', ['field' => 'Chocolate Sprinkles'])
                @include('modules.toppings-checkbox', ['field' => 'Chopped Walnuts'])
                @include('modules.toppings-checkbox', ['field' => 'Chopped Pecans'])
                @include('modules.toppings-checkbox', ['field' => 'Candy Pearls'])
                @include('modules.toppings-checkbox', ['field' => 'Candy Hearts'])
            </ul>
            <label for='quantity'>
                Quantity:
                <select name='quantity' id='quantity'>
                    @include('modules.quantity-select', ['field' => '2', 'text' => '2 for $14.99'])
                    @include('modules.quantity-select', ['field' => '4', 'text' => '4 for $19.99'])
                    @include('modules.quantity-select', ['field' => '6', 'text' => '6 for $29.99'])
                    @include('modules.quantity-select', ['field' => '12', 'text' => '12 for $49.99'])
                </select>
            </label>
        </fieldset>
        <fieldset>
            <h2>Customer Details:</h2>
            <label for='customer'>
                Name:*
                <input type='text' autocomplete='off' name='customer' id='customer' value='{{ old('customer') }}'>
            </label>
            @include('modules.input-errors', ['field' => 'customer'])
        </fieldset>
        <input type='submit' value='Place Order'>
    </form>
@endsection