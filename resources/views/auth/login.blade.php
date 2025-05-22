<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <form method="POST" action="{{ route('login') }}" class="bg-white p-6 rounded shadow-md flex flex-col gap-4">
        @csrf
        @error('login')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <input type="text" name="username" placeholder="Username" required class="border p-2 rounded" />
        <input type="password" name="password" placeholder="Password" required class="border p-2 rounded" />
        <button type="submit" class="bg-blue-600 text-white p-2 rounded hover:bg-blue-700">Login</button>
    </form>
</body>
</html>
