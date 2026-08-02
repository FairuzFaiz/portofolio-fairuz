@extends('layouts.main')

@section('content')
<!-- Add Confetti library for creative notification -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

<div class="relative min-h-[90vh] flex items-center pt-20 overflow-hidden">
    <!-- 3D Floating Spheres Background -->
    <div class="absolute top-10 left-10 md:left-32 w-32 h-32 rounded-full mix-blend-screen animate-[float_4s_ease-in-out_infinite]" style="background: radial-gradient(circle at 30% 30%, #60a5fa, #3b82f6, #1d4ed8); box-shadow: 0 20px 40px rgba(59, 130, 246, 0.4), inset -10px -10px 20px rgba(0,0,0,0.5), inset 10px 10px 20px rgba(255,255,255,0.8);" data-aos="zoom-in" data-aos-delay="200"></div>
    
    <div class="absolute bottom-20 right-10 md:right-32 w-48 h-48 rounded-full mix-blend-screen animate-[float_5s_ease-in-out_infinite_reverse]" style="background: radial-gradient(circle at 30% 30%, #f472b6, #ec4899, #be185d); box-shadow: 0 20px 40px rgba(236, 72, 153, 0.4), inset -15px -15px 30px rgba(0,0,0,0.5), inset 15px 15px 30px rgba(255,255,255,0.8);" data-aos="zoom-in" data-aos-delay="400"></div>

    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-purple-600/10 rounded-full mix-blend-multiply filter blur-3xl z-0 pointer-events-none"></div>

    <div class="max-w-4xl mx-auto px-4 w-full relative z-10 my-16" data-aos="fade-up">
        <div class="text-center mb-12">
            <h1 class="text-5xl md:text-6xl font-black text-white font-outfit mb-6 tracking-tight drop-shadow-lg">
                Mari <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400">Berkolaborasi!</span>
            </h1>
            <div class="w-20 h-1.5 bg-gradient-to-r from-blue-500 to-pink-500 mx-auto rounded-full mb-8 shadow-[0_0_15px_rgba(236,72,153,0.5)]"></div>
            <p class="text-slate-300 text-xl font-light leading-relaxed max-w-2xl mx-auto">
                Punya ide project menarik atau butuh bantuan desain untuk brand kamu? Langsung saja kirim pesan di bawah ini, saya akan balas secepatnya!
            </p>
        </div>

        <div class="relative group">
            <!-- 3D Card Glow Effect -->
            <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-pink-600 rounded-[2rem] blur opacity-25 group-hover:opacity-40 transition duration-1000 group-hover:duration-200"></div>
            
            <div class="relative bg-slate-800/60 backdrop-blur-2xl border border-slate-700/50 p-8 md:p-12 rounded-[2rem] shadow-2xl">
                <form id="contact-form" class="space-y-8">
                    <div data-aos="fade-up" data-aos-delay="100">
                        <label class="block text-sm font-bold text-slate-200 mb-2 uppercase tracking-wider">Nama Lengkap</label>
                        <input type="text" id="name" required class="w-full bg-slate-900/50 border border-slate-600 rounded-2xl px-5 py-4 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all shadow-inner placeholder-slate-500" placeholder="Tulis nama kamu di sini">
                    </div>
                    
                    <div data-aos="fade-up" data-aos-delay="200">
                        <label class="block text-sm font-bold text-slate-200 mb-2 uppercase tracking-wider">Alamat Email</label>
                        <input type="email" id="email" required class="w-full bg-slate-900/50 border border-slate-600 rounded-2xl px-5 py-4 text-white focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all shadow-inner placeholder-slate-500" placeholder="nama@email.com">
                    </div>
                    
                    <div data-aos="fade-up" data-aos-delay="300">
                        <label class="block text-sm font-bold text-slate-200 mb-2 uppercase tracking-wider">Pesan Anda</label>
                        <textarea id="message" rows="5" required class="w-full bg-slate-900/50 border border-slate-600 rounded-2xl px-5 py-4 text-white focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all shadow-inner placeholder-slate-500 resize-none" placeholder="Ceritakan sedikit tentang project atau pertanyaan kamu..."></textarea>
                    </div>
                    
                    <div data-aos="fade-up" data-aos-delay="400" class="pt-4">
                        <button type="submit" id="submit-btn" class="w-full group/btn relative inline-flex items-center justify-center px-8 py-5 text-lg font-bold text-white transition-all duration-200 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-2xl overflow-hidden shadow-[0_0_40px_rgba(168,85,247,0.4)] hover:shadow-[0_0_60px_rgba(168,85,247,0.6)] hover:-translate-y-1">
                            <span class="absolute w-0 h-0 transition-all duration-500 ease-out bg-white rounded-full group-hover/btn:w-56 group-hover/btn:h-56 opacity-10"></span>
                            <span class="relative flex items-center gap-3">
                                <svg class="w-6 h-6 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                                Kirim Pesan Sekarang
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Creative Notification Modal -->
<div id="success-modal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4">
    <div class="absolute inset-0 bg-slate-900/80 backdrop-blur-sm transition-opacity opacity-0" id="modal-backdrop"></div>
    <div class="relative bg-slate-800 border-2 border-green-500/50 rounded-3xl p-8 md:p-12 shadow-[0_0_100px_rgba(34,197,94,0.4)] max-w-md w-full transform scale-90 opacity-0 transition-all duration-500 ease-out flex flex-col items-center text-center" id="modal-content">
        <div class="w-24 h-24 bg-green-500 rounded-full flex items-center justify-center mb-6 shadow-[0_0_30px_rgba(34,197,94,0.5)]">
            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
        </div>
        <h3 class="text-3xl font-black text-white font-outfit mb-4">Pesan Terkirim! 🎉</h3>
        <p class="text-slate-300 text-lg mb-8">Terima kasih sudah menghubungi saya. Pesan kamu sudah meluncur ke email saya dan akan segera saya balas!</p>
        <button id="close-modal" class="px-8 py-3 bg-slate-700 hover:bg-slate-600 text-white rounded-xl font-bold transition-colors w-full">Tutup</button>
    </div>
</div>

<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-30px) rotate(10deg); }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    const submitBtn = document.getElementById('submit-btn');
    const modal = document.getElementById('success-modal');
    const backdrop = document.getElementById('modal-backdrop');
    const content = document.getElementById('modal-content');
    const closeBtn = document.getElementById('close-modal');

    // Fire Confetti!
    const fireConfetti = () => {
        var duration = 3 * 1000;
        var end = Date.now() + duration;

        (function frame() {
            confetti({
                particleCount: 5,
                angle: 60,
                spread: 55,
                origin: { x: 0 },
                colors: ['#3b82f6', '#ec4899', '#a855f7']
            });
            confetti({
                particleCount: 5,
                angle: 120,
                spread: 55,
                origin: { x: 1 },
                colors: ['#3b82f6', '#ec4899', '#a855f7']
            });

            if (Date.now() < end) {
                requestAnimationFrame(frame);
            }
        }());
    };

    const showModal = () => {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        
        // Trigger animations
        setTimeout(() => {
            backdrop.classList.remove('opacity-0');
            backdrop.classList.add('opacity-100');
            
            content.classList.remove('scale-90', 'opacity-0');
            content.classList.add('scale-100', 'opacity-100');
            
            fireConfetti();
        }, 10);
    };

    const hideModal = () => {
        backdrop.classList.remove('opacity-100');
        backdrop.classList.add('opacity-0');
        
        content.classList.remove('scale-100', 'opacity-100');
        content.classList.add('scale-90', 'opacity-0');
        
        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }, 500);
    };

    closeBtn.addEventListener('click', hideModal);

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Change button state
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<span class="flex items-center gap-3"><svg class="w-6 h-6 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Mengirim...</span>';
        submitBtn.disabled = true;

        // Send to FormSubmit
        fetch("https://formsubmit.co/ajax/faizfaizs123@gmail.com", {
            method: "POST",
            headers: { 
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify({
                Nama: document.getElementById('name').value,
                Email: document.getElementById('email').value,
                Pesan: document.getElementById('message').value
            })
        })
        .then(response => response.json())
        .then(data => {
            // Success
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            form.reset();
            showModal();
        })
        .catch(error => {
            // Error (fallback or actual error)
            console.error(error);
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            alert("Maaf, terjadi kesalahan. Silakan coba lagi.");
        });
    });
});
</script>
@endsection