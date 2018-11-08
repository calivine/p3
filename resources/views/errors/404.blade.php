@extends('layouts.master')

@section('title')
    {{ config('app.name') }}
@endsection

@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <link href='/css/errors/404.css' rel='stylesheet'>
@endpush

@section('content')

    <h2>404: Sorry that page was not found.</h2>
@endsection
