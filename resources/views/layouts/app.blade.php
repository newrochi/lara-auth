<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @yield('link')
    <title>@yield('title')</title>
</head>
<body>
{{-- Nav Menu --}}
@include('partials.navbar')
@if (session('mustVerifyEmail'))
    <div class="alert alert-danger text-center">You must verify your email! Please verify your email to use all the features of the site</div>
@endif

<div class="container">
    @yield('content')
</div>



<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
