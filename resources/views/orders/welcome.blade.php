@extends('layouts.master')

@section('title')
    {{ config('app.name') }}
@endsection

@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <!-- <link href='/css/books/show.css' rel='stylesheet'> -->
@endpush

@section('content')
    <h1>{{ config('app.name') }}</h1>

    <p>
        Please order below...
    </p>
@endsection