<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <form method="post" action="/submit" class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
        @csrf

        <!-- Success Message -->
        <!-- @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif -->

        <!-- Error Messages -->
        <!-- @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif -->

        <h1 class="text-2xl font-bold mb-6 text-center text-blue-500">
            Student Form
        </h1>

        <!-- Name -->
        <div class="mb-4">
            <label class="block mb-1 font-medium">Enter Name:</label>
            <input type="text" name="name" value="{{ old('name') }}"
                class="w-full border border-gray-300 rounded px-3 py-2" required>
                <span class="text-sm text-red-500">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label class="block mb-1 font-medium">Enter Email:</label>
            <input type="email" name="email" value="{{ old('email') }}"
                class="w-full border border-gray-300 rounded px-3 py-2" required>
                <span class="text-sm text-red-500">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
        </div>

        <!-- Age -->
        <div class="mb-4">
            <label class="block mb-1 font-medium">Age:</label>
            <input type="number" name="age" value="{{ old('age') }}"
                class="w-full border border-gray-300 rounded px-3 py-2" required>
                <span class="text-sm text-red-500">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
        </div>

        <!-- Course -->
        <div class="mb-4">
            <label class="block mb-1 font-medium">Select Course:</label>
            <select name="course" class="w-full border border-gray-300 rounded px-3 py-2" required>
                <option value="">Select Course</option>
                <option value="PHP">PHP</option>
                <option value="Java">Java</option>
                <option value="Python">Python</option>
            </select>
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label class="block mb-1 font-medium">Password:</label>
            <input type="password" name="password" value="{{old('password')}}"
                class="w-full border border-gray-300 rounded px-3 py-2" required>
                <span class="text-sm text-red-500">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
        </div>

        <!-- Submit -->
        <button type="submit"
            class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
            Submit
        </button>

    </form>

</body>
</html>