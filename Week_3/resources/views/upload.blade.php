<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>

</head>
<body>

    <h2>Upload File</h2>

    <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="file" name="myfile">

        <br><br>

        <button type="submit">Upload</button>

    </form>

    <br>
    @isset($filename)
    <h3>Uploaded Image</h3>
    <img src="{{ assets('storage/uploads/' . $path)}}" alt="">
        
    @endisset

</body>
</html>
