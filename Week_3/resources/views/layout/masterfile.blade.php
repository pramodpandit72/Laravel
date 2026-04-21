<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'lpu')</title>

    <link rel="stylesheet" href="{{asset('css/master.css')}}">
</head>
<body>
    <header style="background-color: lightblue; text-align:center; padding:10px position:fixed;">
        <h1>Lovely Prfessional University</h1>
    </header>
    
    <nav>
        {{-- <a href="{{}}">Home</a> --}}
        <a href="{{route('sign')}}">SignUp</a>
        <a href="">Home</a>
        <a href="">Profile</a>
        <a href="">Admin</a>
        <a href="{{ route('registration') }}">Registration</a>
        <a href="/login">Login Page</a>
    </nav>

    <div>
        @hassection('content')
        
        @yield('content')

        @else
            <h1 style="color:red"> OOPS!! No content found </h1>
        @endif
    </div>

    <footer style="background-color: lightblue; text-align:center; padding:10px position:fixed; bottom:0; width:100%">
        <p>&copy; 2026 Lovely Professional University. All rights reserved.
            <a href="https://www.lpu.in/">Visit out website</a>
        </p>
    </footer>
</body>
</html>