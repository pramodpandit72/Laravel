<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/loginsubmit">

        @csrf

        <label for="username">Enter Username: </label>
        <input type="text" name="username" required> <br>

        <label for="password">Enter Password: </label>
        <input type="password" name="password" required> <br>

        <input type="submit" name="submit" value="LOGIN" /> 


    </form>
</body>
</html>