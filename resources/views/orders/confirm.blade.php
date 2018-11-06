@extends('layouts.master')

@section('title')
    {{ config('app.name') }}
@endsection

@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <!-- <link href='/css/books/show.css' rel='stylesheet'> -->
@endpush

@section('content')

    <h1>
        Confirmation
    </h1>
    <p>
        Name: {{ $customer }}
    </p>
    <p>
        Flavor: {{ $dipping_flavor }}
    </p>
    <p>
        Quantity: {{ $quantity }}
    </p>
    @if($toppings)
        <p>
            Toppings:
            @foreach($toppings as $index => $topping)
                {{ $topping }},
            @endforeach
        </p>
    @endif
    <p>
        Subtotal: ${{ $subtotal }}
    </p>
@endsection
