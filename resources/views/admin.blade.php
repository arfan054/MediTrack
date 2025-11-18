<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediTrack Admin</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="flex">

    <!-- SIDEBAR -->
    <div class="w-64 h-screen bg-teal-600 text-white flex flex-col p-6">
        
        <!-- LOGO -->
        <div class="flex items-center gap-3 mb-10">
            <img src="/images/logo.png" class="w-12" alt="Logo">
            <div>
                <h1 class="text-xl font-bold">MediTrack</h1>
                <p class="text-xs">Solusi cerdas manajemen<br>klinik modern</p>
            </div>
        </div>

        <!-- MENU -->
        <ul class="space-y-6 text-lg">
            <li class="flex items-center gap-3 cursor-pointer">
                <span>🏠</span> Dashboard
            </li>
            <li class="flex items-center gap-3 cursor-pointer">
                <span>🩺</span> Dokter
            </li>
            <li class="flex items-center gap-3 cursor-pointer">
                <span>👤</span> Pasien
            </li>
        </ul>

        <!-- LOGOUT -->
        <div class="mt-auto">
            <button class="flex items-center gap-2 mt-10 text-lg">
                <span>⬅</span> Logout
            </button>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="flex-1 p-10">

        <!-- HEADER -->
        <h1 class="text-3xl font-bold text-teal-700 mb-10">MediTrack Klinik</h1>

        <!-- TITLE + BUTTON -->
        <div class="flex items-center justify-between pr-10">
            <h2 class="text-5xl font-extrabold text-gray-700 border border-purple-500 px-4 py-2">
                Daftar pasien
            </h2>

            <a href="#" class="bg-teal-600 hover:bg-teal-700 text-white px-6 py-2 rounded-full text-lg font-semibold">
                + Tambah pasien
            </a>
        </div>

    </div>

</div>

</body>
</html>