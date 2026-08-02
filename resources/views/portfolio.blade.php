@extends('layouts.main')

@section('content')
<div class="relative min-h-screen pt-20 pb-24">
    <!-- Abstract Background Gradients -->
    <div class="absolute top-20 left-0 w-96 h-96 bg-blue-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16" data-aos="fade-down">
            <h2 class="text-4xl md:text-5xl font-bold text-white font-outfit mb-4">My Portfolio</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto rounded-full mb-8"></div>
            <p class="text-lg text-slate-400 max-w-2xl mx-auto">A showcase of my expertise in Graphic Design alongside my capabilities in UI/UX Design and System Development.</p>
        </div>

        <!-- Filter Category -->
        <div class="flex justify-center mb-12" data-aos="fade-up">
            <div class="inline-flex bg-slate-800/80 backdrop-blur-md p-1.5 rounded-full border border-slate-700/50">
                <button class="filter-btn active px-6 py-2 rounded-full text-sm font-semibold transition-all duration-300 text-white bg-blue-500 shadow-md" data-filter="all">All Projects</button>
                <button class="filter-btn px-6 py-2 rounded-full text-sm font-semibold transition-all duration-300 text-slate-400 hover:text-white" data-filter="UI/UX">UI/UX Design</button>
                <button class="filter-btn px-6 py-2 rounded-full text-sm font-semibold transition-all duration-300 text-slate-400 hover:text-white" data-filter="Graphic Design">Graphic Design</button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-grid">
            @foreach($projects as $p)
                <div class="portfolio-item group relative bg-slate-800/40 backdrop-blur-sm rounded-2xl overflow-hidden border border-slate-700/50 hover:border-blue-500/30 transition-all duration-500" data-category="{{ $p->category }}" data-aos="fade-up">
                    <div class="aspect-[4/3] overflow-hidden relative">
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
                            <img src="{{$firstImage}}" 
                                 alt="{{$p->title}}" 
                                 class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        @else
                            <div class="w-full h-full bg-slate-800 flex items-center justify-center text-slate-500 font-outfit transform group-hover:scale-110 transition-transform duration-700">No Image</div>
                        @endif
                    </div>

                    <div class="p-6 relative">
                        <div class="absolute -top-5 right-6">
                            <span class="inline-block px-4 py-1.5 text-xs font-bold tracking-wider text-white uppercase bg-gradient-to-r from-blue-600 to-purple-600 rounded-full shadow-lg">
                                {{$p->category}}
                            </span>
                        </div>

                        <h3 class="font-bold text-2xl mb-3 text-white font-outfit mt-2">{{$p->title}}</h3>
                        
                        <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-2">
                            {{$p->description}}
                        </p>

                        <a href="/project/{{$p->id}}" class="inline-flex items-center gap-2 text-sm font-bold text-blue-400 hover:text-blue-300 transition-colors group/link">
                            View Project Details
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform group-hover/link:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        
        <!-- Empty State (Hidden by default) -->
        <div id="empty-state" class="hidden py-20 text-center">
            <svg class="w-16 h-16 text-slate-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
            <h3 class="text-xl font-semibold text-slate-300">No projects found</h3>
            <p class="text-slate-500 mt-2">Try selecting a different category.</p>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const items = document.querySelectorAll('.portfolio-item');
        const emptyState = document.getElementById('empty-state');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all
                filterBtns.forEach(b => {
                    b.classList.remove('active', 'text-white', 'bg-blue-500', 'shadow-md');
                    b.classList.add('text-slate-400');
                });
                
                // Add active class to clicked
                btn.classList.add('active', 'text-white', 'bg-blue-500', 'shadow-md');
                btn.classList.remove('text-slate-400');

                const filterValue = btn.getAttribute('data-filter');
                let visibleCount = 0;

                items.forEach(item => {
                    // For filtering, check if item category contains the filter text (case insensitive) or if it's "all"
                    const category = item.getAttribute('data-category').toLowerCase();
                    const filterLower = filterValue.toLowerCase();
                    
                    if (filterValue === 'all' || category.includes(filterLower) || (filterLower === 'ui/ux' && category.includes('ui'))) {
                        item.style.display = 'block';
                        // Re-trigger AOS slightly
                        setTimeout(() => item.classList.add('aos-animate'), 50);
                        visibleCount++;
                    } else {
                        item.style.display = 'none';
                        item.classList.remove('aos-animate');
                    }
                });
                
                if(visibleCount === 0) {
                    emptyState.classList.remove('hidden');
                } else {
                    emptyState.classList.add('hidden');
                }
            });
        });
    });
</script>
@endsection