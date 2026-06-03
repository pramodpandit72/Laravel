<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/submit-form" method="POST">
        @csrf
        <label for="">Name: </label>
        <input type="text" name="name" placeholder="Enter name"> <br> 
        @error('name')
            <p>{{ $message }}</p>
        @enderror
        <label for="">Age: </label>
        <input type="number" name="age" placeholder="Enter age"> <br> 
        @error('age')
            <p>{{ $message }}</p>
        @enderror
        <label for="">Course: </label>
            <select name="course" id="">
                <option value="" disabled selected hidden>Select Course</option>
                <option value="Laravel">Laravel</option>
                <option value="PHP">PHP</option>
                <option value="Javascript">Javascript</option>
            </select>
        <br> 
        <button type="submit">Submit</button>

    </form>
</body>
</html>
