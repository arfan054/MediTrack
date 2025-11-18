<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login MediTrack</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">

        <!-- Logo -->
        <div class="flex justify-center mb-5">
            <img src="/img/logo.jpg" alt="Logo MediTrack" class="w-32">
        </div>

        <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Login MediTrack</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-3">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST">
            @csrf

            <label class="block font-semibold mb-1 text-gray-700">Email</label>
            <input type="email" name="email"
                class="w-full p-2 border rounded mb-4 focus:ring focus:ring-blue-200"
                placeholder="Masukkan email" required>

            <label class="block font-semibold mb-1 text-gray-700">Password</label>
            <input type="password" name="password"
                class="w-full p-2 border rounded mb-4 focus:ring focus:ring-blue-200"
                placeholder="Masukkan password" required>

            <button
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-lg transition">
                Login
            </button>
        </form>

    </div>

</body>
</html>
