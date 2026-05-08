<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($students as $student)
        <li> Regno, {{ $student->regno }} </br>
        Name: {{ $student->name }} <br>
        City: {{ $student->city }} <br>
        Course: {{ $student->course }} <br>
        Marks: {{ $student->marks }} <br>
        </li>
        <hr>
        @endforeach

    </ul>
</body>
</html>