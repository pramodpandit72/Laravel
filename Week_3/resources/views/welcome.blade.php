<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LPU')</title>

    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
</head>
<body>
<header style="background-color: lightblue; text-align:center; padding:10px; position:fixed; width:100%;">
    <h1>Lovely Professional University</h1>
</header>

<nav style="margin-top:60px;">
    <a href="/login">Login</a>
    <a href="/welcome">Welcome</a>
</nav>

<div style="margin-top:20px;">
    @if(session('username'))
        <h1 style="color:red">Welcome {{ session('username') }}</h1>
    @else
        <h1>No user found</h1>
    @endif

    <p>{{ __('welcome.heading') }}</p>
</div>

<footer style="background-color: lightblue; text-align:center; padding:10px; position:fixed; bottom:0; width:100%;">
    <p>
        &copy; 2026 Lovely Professional University
    </p>
</footer>

</body>
</html>