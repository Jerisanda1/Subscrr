<!-- Container utama: Kotak gelap dengan sudut atas membulat -->
<style>
    /* Animasi reveal: muncul dengan fade-in + slide-up */
    .reveal {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }
    .reveal.visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<div class="bg-[#14141a] text-white min-h-screen flex flex-col justify-between relative overflow-hidden rounded-t-[3rem]">
    
    <!-- Bagian CTA / Hero (diberi class reveal) -->
    <div class="flex flex-col items-center justify-center flex-grow px-4 py-20 text-center reveal">
        <!-- Judul Besar -->
       <h1 class="text-5xl md:text-7xl font-black tracking-tight mb-10 leading-tight">
         <span class="inline-flex items-center group transition-transform duration-300 hover:-translate-y-1 cursor-pointer">
            <span class="text-[#ff2500]">Download</span><img src="assets/uploads/icon/icon_Subscrr.png" alt="Subscrr Logo" 
                class="inline-block h-14 w-14 md:h-20 md:w-20 align-middle ml-2 rounded-xl transition-transform duration-300 origin-center group-hover:-rotate-6 group-hover:scale-105"><span class="text-[#ff2500]">ubscrr</span>
         </span>
         <br>
         <span class="text-[#ff2500]">to get Started</span>
       </h1>

        <a href="https://apps.apple.com/us/app/subscrr-take-back-control/id6757530448" target="_blank" id="appstore-btn" class="block mb-4 transition-transform duration-200 ease-out will-change-transform" style="display: inline-block;">
            <img src="assets/uploads/footer/appstore-badge.svg" alt="Download on the App Store" class="h-14 md:h-13 w-auto mx-auto invert rounded-3xl">
        </a>

        <!-- Teks kecil di bawah tombol -->
        <p class="text-gray-400 text-sm font-medium mb-20">
            iPhone · iOS 17+ · Free to start
        </p>

    </div>

    <!-- Footer Bawah (Tidak perlu rounded lagi karena sudah di container utama) -->
    <footer class="bg-[#14141a] border-t border-gray-600">
        <div class="max-w-7xl mx-auto px-6 py-6">
            <!-- ... isi footer tetap sama ... -->
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <!-- Kiri: Logo & Sosmed -->
                <div class="flex flex-col md:flex-row items-center gap-6">
                    <!-- Logo -->
                    <a href="#" class="flex items-center gap-2">
                        <img src="assets/uploads/icon/icon_Subscrr.png" alt="Subscrr" class="h-8 w-8 rounded-md">
                        <span class="text-xl font-bold text-white">Subscrr</span>
                    </a>
                    
                    <!-- Sosial Media Icons -->
                    <div class="flex items-center gap-4 text-gray-400">
                        <!-- Threads -->
                        <a href="#" class="hover:text-white">
                            <img src="assets/uploads/pricing/threads-icon.png" alt="Threads" class="w-5 h-5">
                        </a>
                        <!-- Instagram -->
                        <a href="#" class="hover:text-white"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
                        <!-- X -->
                        <a href="#" class="hover:text-white"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg></a>
                        <!-- TikTok -->
                        <a href="#" class="hover:text-white"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg></a>
                        <!-- YouTube -->
                        <a href="#" class="hover:text-white"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg></a>
                    </div>
                </div>

                <!-- Kanan: Links & Copyright -->
                <div class="flex flex-col md:flex-row items-center gap-6 text-sm text-gray-400">
                    <nav class="flex flex-wrap justify-center gap-6">
                        <a href="<?= site_url('help_center') ?>" class="hover:text-white transition">Help Center</a>
                        <a href="#" class="hover:text-white transition">Contact us</a>
                       <a
    href="<?= base_url('privacy-policy') ?>"
    class="transition hover:text-white"
>
    Privacy Policy
</a>
                        <a href="#" class="hover:text-white transition">Terms of Use</a>
                    </nav>
                    <span class="text-gray-500">© 2026 Subscrr. All rights reserved.</span>
                </div>

            </div>
            
            <!-- Bagian Badge Maidemail -->
            <div class="mt-6">
               <img src="assets/uploads/footer/subscrr.svg" alt="Maidemail" class="h-8 w-auto invert">
            </div>
        </div>
    </footer>
</div>

<script>
    // Efek magnetik pada tombol App Store
    const btn = document.getElementById('appstore-btn');
    if (btn) {
        const strength = 0.15;
        const maxShift = 15;

        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const centerX = rect.left + rect.width /5;
            const centerY = rect.top + rect.height /5;

            const deltaX = e.clientX - centerX;
            const deltaY = e.clientY - centerY;

            let shiftX = deltaX * strength;
            let shiftY = deltaY * strength;
            shiftX = Math.max(-maxShift, Math.min(maxShift, shiftX));
            shiftY = Math.max(-maxShift, Math.min(maxShift, shiftY));

            btn.style.transform = `translate(${shiftX}px, ${shiftY}px)`;
        });

        btn.addEventListener('mouseleave', () => {
            btn.style.transform = 'translate(0, 0)';
        });
    }

    // Animasi reveal saat elemen hero masuk viewport (saat di-scroll pertama kali)
    const revealElement = document.querySelector('.reveal');
    if (revealElement) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    // Hentikan pengamatan setelah animasi muncul (hanya sekali)
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 }); // muncul saat 10% elemen terlihat

        observer.observe(revealElement);
    }
</script>