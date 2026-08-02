@extends('layouts.main')

@section('content')
<div class="relative min-h-screen pt-12 pb-24">
    <!-- Background Decor -->
    <div class="absolute top-0 left-0 w-full h-[50vh] bg-gradient-to-b from-blue-900/20 to-transparent"></div>
    
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Back button -->
        <div class="mb-10" data-aos="fade-right">
            <a href="/portfolio" class="inline-flex items-center gap-2 text-slate-400 hover:text-white transition-colors group">
                <div class="w-8 h-8 rounded-full bg-slate-800/50 flex items-center justify-center border border-slate-700/50 group-hover:bg-blue-500/20 group-hover:border-blue-500/50 transition-all">
                    <svg class="w-4 h-4 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                </div>
                <span>Back to Portfolio</span>
            </a>
        </div>

        <!-- Project Header -->
        <div class="mb-12 text-center md:text-left" data-aos="fade-up">
            <span class="inline-block px-4 py-1.5 mb-4 text-sm font-bold tracking-wider text-white uppercase bg-gradient-to-r from-blue-600 to-purple-600 rounded-full shadow-lg">
                {{$project->category}}
            </span>
            <h1 class="text-4xl md:text-6xl font-bold text-white font-outfit mb-6 leading-tight">{{$project->title}}</h1>
        </div>

        <!-- Project Image / Images -->
        <div class="mb-16" data-aos="zoom-in" data-aos-delay="100">
            @php
                $imagePath = $project->image;
                $webPath = Str::startsWith($imagePath, 'uploads/') ? '/' . $imagePath : '/uploads/' . $imagePath;
                $fullPath = public_path(ltrim($webPath, '/'));
            @endphp
            
            @if(is_dir($fullPath))
                @php
                    $files = array_diff(scandir($fullPath), ['.', '..']);
                @endphp
                @if(count($files) > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($files as $file)
                            <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-slate-700/50 group">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <img src="{{ $webPath . '/' . $file }}" alt="{{$project->title}}" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-500">
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-slate-700/50 bg-slate-800 flex items-center justify-center aspect-video">
                        <p class="text-slate-500 font-outfit text-xl">Image coming soon</p>
                    </div>
                @endif
            @else
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-slate-700/50">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent z-10"></div>
                    <img src="{{ $webPath }}" alt="{{$project->title}}" class="w-full h-auto max-h-[70vh] object-cover">
                </div>
            @endif
        </div>

        <!-- Project Content -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="md:col-span-2" data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-2xl font-bold text-white font-outfit mb-6">About The Project</h2>
                <div class="prose prose-invert prose-lg text-slate-400 max-w-none">
                    {!! nl2br(e($project->description)) !!}
                </div>
            </div>
            
            <div class="md:col-span-1" data-aos="fade-left" data-aos-delay="300">
                <div class="bg-slate-800/50 backdrop-blur-md rounded-2xl border border-slate-700/50 p-8 sticky top-28">
                    <h3 class="text-lg font-bold text-white mb-6 font-outfit">Project Details</h3>
                    
                    <div class="space-y-6">
                        <div>
                            <p class="text-sm text-slate-500 font-semibold mb-1">Category</p>
                            <p class="text-white">{{$project->category}}</p>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500 font-semibold mb-1">Tools</p>
                            <div class="flex flex-wrap gap-2 mt-2">
                                @if(stripos($project->category, 'ui') !== false || stripos($project->category, 'ux') !== false)
                                    <span class="px-3 py-1 bg-slate-700 text-slate-300 text-xs rounded-full">Figma</span>
                                    <span class="px-3 py-1 bg-slate-700 text-slate-300 text-xs rounded-full">Prototyping</span>
                                @else
                                    <span class="px-3 py-1 bg-slate-700 text-slate-300 text-xs rounded-full">Canva</span>
                                    <span class="px-3 py-1 bg-slate-700 text-slate-300 text-xs rounded-full">Graphic Design</span>
                                @endif
                            </div>
                        </div>
                        <div>
                            <p class="text-sm text-slate-500 font-semibold mb-1">Date</p>
                            <p class="text-white">{{ $project->created_at->format('M d, Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection