@extends('layout.masterfile')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @section('title')
        Welcome Page
    @endsection
</head>
<body>
    <div>
        @section('content')
        <p>
            This is my WELCOME PAGE
        </p>
        {{-- <a href="{{ route('lpu2026')}}">Click here for LPU</a> --}}
        @endsection
    </div>

</body>
</html>