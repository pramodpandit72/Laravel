<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header style="background-color: lightblue; text-align:center; padding:10px position:fixed;">
        <h1>Lovely Prfessional University</h1>
    </header>
    
    <div>
        @yield('content')
    </div>

    <footer style="background-color: lightblue; text-align:center; padding:10px position:fixed; bottom:0; width:100%">
        <p>&copy; 2026 Lovely Professional University. All rights reserved.
            <a href="https://www.lpu.in/">Visit out website</a>
        </p>
    </footer>
</body>
</html>