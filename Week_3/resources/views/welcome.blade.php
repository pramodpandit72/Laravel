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
    @if(session('username'))
    <h1 style="coclor:red";>Welcome {{session('usename')}}</h1>
    @else
    <h1>No user Required</h1>
    @endif
    <div>
        @section('content')
        <p>
            <!-- This is my WELCOME PAGE -->
             {{__('welcome.heading')}}
        </p>
        <!-- {{-- <a href="{{ route('lpu2026')}}">Click here for LPU</a> --}} -->
            <!-- <a href="{{ route('lpu2026')}}">{{__('welcome.subheading')}}</a>  -->
        @endsection
    </div>

</body>
</html>