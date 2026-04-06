{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-black text-white">
    <h1>About Page</h1>
    <h2>{{$name}}</h2>
</body>
</html> --}}

<x-layout>
    {{-- <h1>About Page</h1>
    <h2>{{ $name }}</h2>
    <h2>{{ $age }}</h2> --}}

    @foreach ($data as $item)
        <h2>{{ $item }}</h2>
    @endforeach

</x-layout>