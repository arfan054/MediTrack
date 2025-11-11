<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediTrack - Layanan</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-800">

    <!-- Header -->
    <header class="flex justify-between items-center px-8 py-4 shadow-md">
        <h1 class="text-2xl font-bold text-blue-600">Layanan</h1>
        <nav class="flex gap-6 text-gray-700 font-medium">
            <a href="/login" class="hover:text-blue-600">Log in</a>
            <a href="/alamat" class="hover:text-blue-600">Alamat</a>
            <a href="/antrian" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Daftar Antrian
            </a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="flex flex-col items-center text-center px-8 py-16 bg-blue-50">
        <h2 class="text-3xl md:text-4xl font-bold text-blue-700 mb-4">
            Layanan gigi untuk kembalikan senyum terbaikmu
        </h2>
        <p class="max-w-2xl text-gray-600 leading-relaxed">
            Gigi berlubang sering kali menjadi sumber masalah kesehatan gigi yang serius jika tidak segera ditangani.
            Kerusakan ini dapat menyebabkan nyeri, infeksi, bahkan komplikasi yang mengganggu kenyamanan sehari-hari.
        </p>
    </section>

    <!-- Content Section -->
    <section class="px-8 md:px-20 py-12 text-gray-700">
        <p class="mb-4">
            Di <strong>Audy Dental</strong>, kami menyediakan layanan penambalan gigi yang profesional untuk memperbaiki
            kerusakan akibat gigi berlubang sekaligus mencegah masalah lebih lanjut.
        </p>
        <p class="mb-4">
            Perawatan ini dapat menghilangkan rasa sakit, memperbaiki fungsi mengunyah yang terganggu, dan meningkatkan
            estetika gigi, sehingga senyummu kembali percaya diri.
        </p>
        <p>
            Yuk, wujudkan senyum terbaikmu dengan perawatan penambalan gigi di <strong>AUDY Dental</strong>.
            Ditangani oleh tim dokter gigi profesional, kami siap memberikan layanan terbaik untuk menjaga kesehatan dan
            estetika gigimu.
        </p>
    </section>

    <!-- Footer -->
    <footer class="text-center py-6 bg-gray-100 mt-12 text-sm text-gray-500">
        © 2025 MediTrack
    </footer>

</body>
</html>
