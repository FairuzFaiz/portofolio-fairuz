@extends('layouts.main')

@section('content')
<div class="relative min-h-[80vh] flex items-center pt-20">
    <div class="absolute top-20 right-20 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
    <div class="absolute bottom-20 left-20 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>

    <!-- Floating Animating Elements -->
    <div class="absolute top-40 left-10 md:left-40 text-6xl md:text-8xl opacity-20 hover:opacity-100 transition-opacity duration-500 animate-[bounce_3s_infinite]" data-aos="fade-right" data-aos-delay="200">🚲</div>
    <div class="absolute bottom-40 right-10 md:right-40 text-6xl md:text-8xl opacity-20 hover:opacity-100 transition-opacity duration-500 animate-[bounce_4s_infinite_reverse]" data-aos="fade-left" data-aos-delay="400">♟️</div>
    <div class="absolute top-1/2 left-1/4 text-4xl md:text-6xl opacity-10 hover:opacity-100 transition-opacity duration-500 animate-[pulse_3s_infinite]" data-aos="zoom-in" data-aos-delay="600">✨</div>
    <div class="absolute top-2/3 right-1/4 text-5xl md:text-7xl opacity-10 hover:opacity-100 transition-opacity duration-500 animate-[pulse_4s_infinite]" data-aos="zoom-in" data-aos-delay="800">🎨</div>

    <div class="max-w-4xl mx-auto px-4 relative z-10 text-center" data-aos="fade-up">
        <h1 class="text-5xl font-bold text-white font-outfit mb-6">Siapa Saya?</h1>
        <div class="w-16 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto rounded-full mb-8"></div>
        
        <p class="text-xl text-slate-400 leading-relaxed mb-8">
            Saya sudah berkecimpung di dunia kreatif sebagai freelancer selama kurang lebih 3 tahun. Perjalanan saya dimulai dari mengelola konten media sosial dan branding untuk berbagai klien, mulai dari klinik kesehatan hingga komunitas sekolah.
        </p>

        <p class="text-lg text-slate-400 leading-relaxed mb-16">
            Seiring berjalannya waktu, saya jatuh cinta dengan dunia UI/UX. Bagi saya, desain bukan cuma soal "terlihat bagus" di Instagram, tapi juga soal bagaimana sebuah website bisa memberikan pengalaman yang simpel bagi penggunanya. Itulah kenapa saya sekarang hobi ngulik Figma untuk merancang konsep website yang user-friendly sebelum akhirnya saya wujudkan ke dalam baris kode.
        </p>

        <h2 class="text-3xl font-bold text-white font-outfit mb-6">Sisi Lain</h2>
        <div class="w-16 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto rounded-full mb-8"></div>
        
        <p class="text-lg text-slate-400 leading-relaxed mb-6">
            Kalau lagi nggak di depan layar monitor buat ngedesain atau ngoding, biasanya saya keluar buat bersepeda santai cari angin segar. Atau, kalau lagi pengen asah otak, saya sering banget nongkrong di Chess.com buat main catur.
        </p>

        <div class="bg-slate-800/50 backdrop-blur-md border border-slate-700/50 p-6 rounded-2xl inline-block mb-12 text-center">
            <p class="text-white font-semibold mb-2 text-lg">Mau adu mekanik catur bareng saya?</p>
            <p class="text-slate-400">Langsung gas add akun saya di <a href="https://www.chess.com/member/fawwaizz" target="_blank" class="text-blue-400 hover:text-blue-300 font-bold underline decoration-blue-400/30 hover:decoration-blue-400 transition-colors">Chess.com</a>! ♟️🚲</p>
        </div>

        <h3 class="text-2xl font-bold text-white mb-6 font-outfit">Core Skills</h3>
        <div class="flex flex-wrap justify-center gap-4">
            <span class="px-6 py-3 bg-slate-800/50 backdrop-blur-md border border-slate-700/50 text-blue-400 rounded-full shadow-lg">Frontend Web Development</span>
            <span class="px-6 py-3 bg-slate-800/50 backdrop-blur-md border border-slate-700/50 text-pink-400 rounded-full shadow-lg">Graphic Design (Canva)</span>
            <span class="px-6 py-3 bg-slate-800/50 backdrop-blur-md border border-slate-700/50 text-purple-400 rounded-full shadow-lg">UI/UX & Prototyping</span>
        </div>
    </div>
</div>
@endsection