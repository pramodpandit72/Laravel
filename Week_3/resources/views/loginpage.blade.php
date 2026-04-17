<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @if(session('username'))
  <h1>Welcome {{session('username')}}</h1>
  @else
  <h1>No user found</h1>
  @endif

  <form method="post" action="/loginsubmit">
    @csrf
    <label for="username">Enter Name</label>
    <input type="text" name="username"> <br>
    <label for="password">Enter Password</label>
    <input type="password" name="password"> <br>

    <input type="submit" name="submit" value="LOGIN">

  </form>

  <form method="get" action="/logoutsubmit">
    <input type="submit" name='logout' value="LOGOUT">
  </form>
</body>
</html>