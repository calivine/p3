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
                @include('modules.select', ['field' => '', 'text' => 'Flavor'])
                @include('modules.select', ['field' => 'milk', 'text' => 'Milk Chocolate'])
                @include('modules.select', ['field' => 'dark', 'text' => 'Dark Chocolate'])
                @include('modules.select', ['field' => 'white', 'text' => 'White Chocolate'])
            </select>
            @include('modules.input-errors', ['field' => 'flavor'])
            <legend>
                Toppings: (+$3 per topping)
            </legend>
            <ul class='checkboxes'>
                @include('modules.checkbox-item', ['input' => 'rainbow', 'text' => 'Rainbow Sprinkles'])
                @include('modules.checkbox-item', ['input' => 'chocolate', 'text' => 'Chocolate Sprinkles'])
                @include('modules.checkbox-item', ['input' => 'walnuts', 'text' => 'Chopped Walnuts'])
                @include('modules.checkbox-item', ['input' => 'pecans', 'text' => 'Chopped Pecans'])
                @include('modules.checkbox-item', ['input' => 'pearls', 'text' => 'Candy Pearls'])
            </ul>
            <label for='quantity'>
                Amount:
            </label>
            <select name='quantity' id='quantity'>
                @include('modules.select', ['field' => '2', 'text' => '2 for $14.99'])
                @include('modules.select', ['field' => '4', 'text' => '4 for $19.99'])
                @include('modules.select', ['field' => '6', 'text' => '6 for $29.99'])
                @include('modules.select', ['field' => '12', 'text' => '12 for $49.99'])
            </select>
        </fieldset>
        <fieldset>
            <label for='customer'>Name:</label>
            <input type='text' autocomplete='off' name='customer' id='customer'>
        </fieldset>
        <input type='submit' value='Place Order'>
    </form>
@endsection