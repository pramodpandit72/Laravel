<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>

    <form method="POST" action="/submitform">
        @csrf
        <!-- // cross-site request forgrey -->
        <label for="username">Enter Username: </label>
        <input type="text" name="username" placeholder="Enter username"> <br>

        <label for="name">Enter Name: </label>
        <input type="text" name="name" placeholder="Enter Name"> <br>

        <label for="email">Enter Email: </label>
        <input type="email" name="email" placeholder="Enter email"> <br>

        <label for="password">Enter Password: </label>
        <input type="password" name="password" placeholder="Enter Password"> <br>

        <input type="submit" name="submit" value="SUBMIT">
        
    </form>

</body>
</html>