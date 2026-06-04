<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>

<h2>Upload File</h2>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<form action="/upload" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Select File:</label><br>
    <input type="file" name="file"><br><br>

    <button type="submit">Upload</button>
</form>

</body>
</html>