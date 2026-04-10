<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <!-- @if($errors->any())
        {{$errors}}
    @endif -->
    
    <!-- @foreach($errors->all() as $error)
    <li style="color:red">{{$error}}</li>
    @endforeach -->

    <form method="post" action="/submitform">
        @csrf
        <!-- // cross-site request forgrey -->
        <label for="username">Enter Username: </label>
        <input type="text" name="username" placeholder="Enter username" required>
        <!-- <span style="color:red">
            @error('username')
            {{$message}}
            @enderror
        </span> -->
        <br>

        <label for="name">Enter Name: </label>
        <input type="text" name="name" placeholder="Enter Name" required> <br>

        <label for="email">Enter Email: </label>
        <input type="email" name="email" placeholder="Enter email" required> <br>

        <label for="password">Enter Password: </label>
        <input type="password" name="password" placeholder="Enter Password" required>
        <!-- <span style="color:red">
            @error('password')
            {{$message}}
            @enderror
        </span> -->
         <br>

        <input type="submit" name="submit" value="SUBMIT">
        
    </form>

</body>
</html>
