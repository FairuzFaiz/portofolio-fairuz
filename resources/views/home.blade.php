@extends('layouts.main')

@section('content')
<div class="relative overflow-hidden">
    <!-- Abstract Background Gradients -->
    <div class="absolute top-0 -left-4 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
    <div class="absolute top-0 -right-4 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
    <div class="absolute -bottom-8 left-20 w-72 h-72 bg-pink-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Hero Section -->
        <section class="min-h-[85vh] flex items-center justify-center pt-20 pb-12" data-aos="fade-up">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-block mb-4 px-4 py-1.5 rounded-full border border-blue-500/30 bg-blue-500/10 text-blue-400 text-sm font-semibold tracking-wider uppercase">
                    Frontend Web & Graphic Design
                </div>
                <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 text-white font-outfit">
                    Membantu Brand Tampil Menarik lewat <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500">Desain & Code</span>
                </h1>
                <p class="mt-6 text-xl text-slate-400 leading-relaxed max-w-2xl mx-auto font-light">
                    Halo, saya Faiz. Saya seorang Graphic Designer yang juga mendalami dunia Frontend Development. Fokus saya adalah menciptakan konten visual yang estetik sekaligus membangun tampilan website yang nyaman digunakan.
                </p>
                
                <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/portfolio" class="px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 text-white rounded-full font-semibold transition-all shadow-[0_0_20px_rgba(59,130,246,0.5)] hover:shadow-[0_0_30px_rgba(168,85,247,0.6)] transform hover:-translate-y-1">
                        Lihat Karya Desain
                    </a>
                    <a href="#github-repos" class="px-8 py-4 bg-slate-800 hover:bg-slate-700 text-white border border-slate-700 rounded-full font-semibold transition-all transform hover:-translate-y-1">
                        Cek Repo GitHub
                    </a>
                </div>
            </div>
        </section>

        <!-- Experience & Background -->
        <section class="py-24 border-t border-slate-800/50" id="experience">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-white font-outfit mb-4">Keahlian Utama</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Frontend Developer -->
                <div class="group relative bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 p-8 rounded-2xl hover:bg-slate-800 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-purple-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="w-14 h-14 bg-blue-500/10 border border-blue-500/20 text-blue-400 rounded-xl flex items-center justify-center mb-6 transform group-hover:-translate-y-2 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 font-outfit">Frontend Developer</h3>
                    <p class="text-slate-400 leading-relaxed">Berfokus pada pengembangan antarmuka web interaktif, membangun sistem aplikasi yang efisien, responsif, dan aktif mengelola repository proyek melalui GitHub.</p>
                </div>

                <!-- Graphic Designer -->
                <div class="group relative bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 p-8 rounded-2xl hover:bg-slate-800 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute inset-0 bg-gradient-to-br from-pink-500/5 to-orange-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="w-14 h-14 bg-pink-500/10 border border-pink-500/20 text-pink-400 rounded-xl flex items-center justify-center mb-6 transform group-hover:-translate-y-2 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 font-outfit">Graphic Designer</h3>
                    <p class="text-slate-400 leading-relaxed">Berpengalaman 3 tahun dalam mendesain konten sosial media dinamis menggunakan Canva. Terbiasa menangani klien medis/klinik seperti Mahir Sunat dan Cigading Medika.</p>
                </div>

                <!-- UI/UX Enthusiast -->
                <div class="group relative bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 p-8 rounded-2xl hover:bg-slate-800 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-indigo-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="w-14 h-14 bg-purple-500/10 border border-purple-500/20 text-purple-400 rounded-xl flex items-center justify-center mb-6 transform group-hover:-translate-y-2 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 font-outfit">UI/UX & Prototyping</h3>
                    <p class="text-slate-400 leading-relaxed">Memiliki keterampilan pendukung dalam mendesain UI/UX menggunakan Figma. Hal ini sangat membantu saya dalam merancang tampilan awal sebelum diimplementasikan ke dalam kode.</p>
                </div>
            </div>
        </section>

        <!-- Featured Projects (from DB) -->
        <section class="py-24 border-t border-slate-800/50 relative" id="github-repos">
            <div class="absolute top-0 right-0 w-64 h-64 bg-blue-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
            
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-white font-outfit mb-4">Latest Projects</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto rounded-full mb-6"></div>
                <p class="text-lg text-slate-400 max-w-2xl mx-auto">A collection of my recent frontend and system development projects.</p>
            </div>

            <!-- Repo/Project Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($projects as $p)
                <div class="group relative bg-slate-800/40 backdrop-blur-sm rounded-2xl overflow-hidden border border-slate-700/50 hover:border-blue-500/30 transition-all duration-500 flex flex-col" data-aos="fade-up">
                    <div class="h-48 overflow-hidden relative bg-slate-800 flex items-center justify-center shrink-0">
                        <div class="absolute inset-0 bg-slate-900/20 group-hover:bg-transparent transition-all z-10"></div>
                        @php
                            $imagePath = $p->image;
                            $webPath = Str::startsWith($imagePath, 'uploads/') ? '/' . $imagePath : '/uploads/' . $imagePath;
                            $fullPath = public_path(ltrim($webPath, '/'));
                            $firstImage = $webPath;
                            
                            if (is_dir($fullPath)) {
                                $files = array_diff(scandir($fullPath), ['.', '..']);
                                if (count($files) > 0) {
                                    $firstImage = $webPath . '/' . reset($files);
                                } else {
                                    $firstImage = null;
                                }
                            }
                        @endphp
                        @if($firstImage)
                            <img src="{{$firstImage}}" alt="{{$p->title}}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        @else
                            <div class="text-slate-600 font-outfit">No Image</div>
                        @endif
                        
                        <!-- Badge Overlapping -->
                        <div class="absolute -bottom-3 right-4 z-20">
                            <span class="inline-block px-3 py-1 text-[10px] font-bold tracking-wider text-white uppercase bg-gradient-to-r from-blue-600 to-purple-600 rounded-full shadow-lg">
                                {{$p->category}}
                            </span>
                        </div>
                    </div>

                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="font-bold text-xl mb-2 text-white font-outfit mt-2">{{$p->title}}</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-2 flex-grow">
                            {{Str::limit($p->description, 100)}}
                        </p>
                        <a href="/project/{{$p->id}}" class="inline-flex items-center gap-2 text-sm font-bold text-blue-400 hover:text-blue-300 transition-colors group/link mt-auto">
                            View Project Details
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform group-hover/link:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
@endsection