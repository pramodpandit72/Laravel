<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 24px; }
        .card { max-width: 640px; padding: 16px; border: 1px solid #ddd; border-radius: 8px; }
        .preview { margin-top: 16px; }
        img { max-width: 100%; height: auto; border-radius: 6px; }
        .error { color: #b00020; margin-top: 8px; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Upload an Image</h2>
        <form action="/upload" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" accept=".jpg,.jpeg,.png,.webp" required>
            <button type="submit">Upload</button>
        </form>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (!empty($fileUrl))
            <div class="preview">
                <p>Uploaded: {{ $originalName }}</p>
                <img src="{{ $fileUrl }}" alt="Uploaded image">
                <p><a href="{{ $fileUrl }}" target="_blank" rel="noopener">Open image</a></p>
            </div>
        @endif
    </div>
</body>
</html>
