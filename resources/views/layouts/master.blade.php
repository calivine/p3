<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', config('app.name'))</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSS global to every page can be loaded here --}}
    {{-- Mini.CSS --}}
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    {{-- custom CSS --}}
    <link href='/css/p3.css' rel='stylesheet'>

    {{-- CSS specific to a given page/child view can be included via a stack --}}
    @stack('head')
</head>
<body>

<header>
    <a href='/'><img src='/images/p3-logo.png' id='logo' alt='P3 Commerce Logo'></a>
</header>

@include('modules.title')

<section>
    @yield('content')
</section>

<footer class='sticky'>
    <p>
        &copy; {{ date('Y') }}
    </p>
</footer>

{{-- JS global to every page can be loaded here; jQuery included just as an example --}}
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'
        integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa'
        crossorigin='anonymous'></script>

{{-- JS specific to a given page/child view can be included via a stack --}}
@stack('body')

</body>
</html>