<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Student Data</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Course</th>
        </tr>

        @foreach($students as $student)
        <tr>
            <td>{{ $student->_id}}</td>
            <td>{{ $student->name}}</td>
            <td>{{ $student->age}}</td>
            <td>{{ $student->course}}</td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>