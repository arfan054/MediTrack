<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan MediTrack</title>

    @vite('resources/css/app.css')
</head>

<body class="font-sans">
<section class="relative h-screen w-full">

    <!-- Background foto -->
    <img src="/img/clinic.png"
         class="absolute inset-0 w-full h-full object-cover z-0">

    <!-- Overlay gradient (warna yang kamu kasih) -->
    <div class="absolute inset-0 bg-gradient-to-r from-[#022839] via-[#0dd1bf]/60 to-transparent z-10"></div>

    <!-- Navbar sesuai posisi PDF -->
    <nav class="absolute z-20 top-6 w-full flex justify-between items-center px-14">
        <div>
            <img src="/img/logo.jpg" alt="logo" class="h-32">
        </div>

        <ul class="flex gap-14 font-semibold text-white text-xl">
            <li><a href="#alamat" class="hover:opacity-70">Alamat</a></li>
            <li><a href="#layanan" class="hover:opacity-70">Layanan</a></li>
            <li><a href="#login" class="hover:opacity-70">Log in</a></li>
        </ul>
    </nav>

    <!-- Tombol Daftar Antrian -->
    <div class="absolute z-20 bottom-32 inset-x-0 flex justify-center">
        <a href="{{ route('home.store') }}"
           class="bg-[#24968b] text-white font-semibold text-2xl px-20 py-5 rounded-[20px] hover:opacity-90 transition-all">
           Daftar antrian
        </a>
    </div>

</section>




<!-- ========================================================= -->
<!-- PAGE 2 — MAP + ALAMAT (PERSIS DESAIN PDF PAGE 2) -->
<!-- ========================================================= -->
<section id="alamat" class="py-20 px-14 bg-white">
    <h2 class="text-4xl font-semibold text-center text-[#022839] mb-10">Alamat</h2>

    <div class="max-w-5xl mx-auto text-center mb-8 text-lg text-gray-700 leading-relaxed">
        <p><strong>MediTrack</strong></p>
        <p>Jl. Kesehatan No. 123, Jakarta Selatan, DKI Jakarta 12560</p>
        <p>Telp: (021) 555-7890</p>
        <p>Email: info@meditrack.id</p>
    </div>

    <div class="max-w-5xl mx-auto rounded-2xl overflow-hidden shadow-lg border border-gray-200">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.402607845533!2d106.82312687580174!3d-6.211544993776801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3eecbc3e4a5%3A0xb8e9e9e4df4e78a8!2sJakarta!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid"
            width="100%" height="400" style="border:0;" allowfullscreen loading="lazy">
        </iframe>
    </div>
</section>




<!-- ========================================================= -->
<!-- PAGE 3 — PENJELASAN LAYANAN (PERSIS DESAIN PDF PAGE 3) -->
<!-- ========================================================= -->
<section id="layanan" class="py-20 px-14 bg-white grid grid-cols-2 gap-16 items-center">

    <!-- Gambar -->
    <div>
        <img src="/img/service.jpg"
             class="rounded-xl shadow-xl w-full"
             alt="gambar layanan">
    </div>

    <!-- Text -->
    <div>
        <h2 class="text-4xl font-semibold text-[#022839] mb-6">
            Layanan gigi untuk kembalikan senyum terbaikmu
        </h2>

        <p class="text-lg text-gray-700 leading-relaxed mb-4">
            Gigi berlubang sering kali menjadi sumber masalah kesehatan gigi yang serius jika tidak segera ditangani.
            Kerusakan ini dapat menyebabkan nyeri, infeksi, bahkan komplikasi yang mengganggu kenyamanan sehari-hari.
        </p>

        <p class="text-lg text-gray-700 leading-relaxed mb-4">
            Di MediTrack, kami menyediakan layanan penambalan gigi yang profesional untuk memperbaiki kerusakan akibat
            gigi berlubang sekaligus mencegah masalah lebih lanjut.
        </p>

        <p class="text-lg text-gray-700 leading-relaxed">
            Yuk, wujudkan senyum terbaikmu dengan perawatan penambalan gigi di MediTrack Dental. Ditangani oleh tim
            dokter gigi profesional, kami siap memberikan layanan terbaik untuk menjaga kesehatan dan estetika gigimu.
        </p>
    </div>
</section>




<!-- ========================================================= -->
<!-- PAGE 4 — FOOTER (PERSIS DESAIN PDF PAGE 4) -->
<!-- ========================================================= -->
<footer class="py-6 text-center text-white text-lg" style="background-color: #00c4cc;">
    <p>© 2025 MediTrack</p>
</footer>


@if(session('nomor_antrian'))
<div class="p-4 bg-green-200 rounded-lg text-center mt-4">
    <h2 class="text-xl font-bold">Pendaftaran Berhasil!</h2>
    <p class="mt-2">Nomor Antrian Anda:</p>
    <h1 class="text-5xl font-extrabold mt-2">{{ session('nomor_antrian') }}</h1>
</div>
@endif



</body>
</html>
