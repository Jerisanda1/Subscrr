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

<div class="bg-[#14141a] dark:bg-[#0a0a0a] text-gray-900 dark:text-white min-h-screen flex flex-col justify-between relative overflow-hidden rounded-t-[3rem]">
    
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
        <p class="text-gray-500 dark:text-gray-400 text-sm font-medium mb-20">
            iPhone · iOS 17+ · Free to start
        </p>

    </div>

    <!-- Footer Bawah -->
    <footer class="bg-[#14141a] dark:bg-[#0a0a0a] border-t border-gray-600">
        <div class="max-w-7xl mx-auto px-6 py-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <!-- Kiri: Logo & Sosmed -->
                <div class="flex flex-col md:flex-row items-center gap-6">
                    <!-- Logo -->
                    <a href="#" class="flex items-center gap-2">
                        <img src="assets/uploads/icon/icon_Subscrr.png" alt="Subscrr" class="h-8 w-8 rounded-md">
                        <span class="text-xl font-bold text-white">Subscrr</span>
                    </a>
                    
                    <!-- Sosial Media Icons -->
                  <div class="flex items-center gap-4 text-gray-600 dark:text-gray-400">
                     <!-- Threads -->
                    <a href="https://www.threads.com/@subscrr" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M17.74 11.22c-.1-.05-.2-.09-.31-.13-.18-3.24-1.95-5.09-4.93-5.11h-.04c-1.78 0-3.26.76-4.17 2.14l1.64 1.12c.68-1.03 1.75-1.25 2.53-1.25h.03c.98 0 1.72.29 2.2.85.35.41.58.97.7 1.68a12.5 12.5 0 0 0-2.81-.13c-2.83.16-4.64 1.81-4.52 4.1.06 1.16.64 2.16 1.63 2.81.84.55 1.92.82 3.04.76 1.48-.08 2.64-.65 3.45-1.68.62-.78 1.01-1.8 1.18-3.08.71.43 1.23 1 1.52 1.68.5 1.16.53 3.07-1.03 4.62-1.36 1.36-3 1.95-5.49 1.97-2.76-.02-4.84-.9-6.2-2.63-1.27-1.61-1.93-3.94-1.95-6.94.02-2.99.68-5.32 1.95-6.94C7.5 3.35 9.58 2.47 12.34 2.45c2.78.02 4.9.91 6.31 2.65.69.85 1.2 1.92 1.55 3.17l1.92-.51c-.42-1.54-1.07-2.87-1.96-3.97C18.36 1.57 15.71.45 12.35.43 8.99.45 6.4 1.58 4.66 3.79 3.11 5.75 2.31 8.5 2.28 11.98v.02c.03 3.48.83 6.22 2.38 8.19 1.74 2.2 4.33 3.33 7.7 3.36 3-.02 5.11-.81 6.86-2.55 2.29-2.29 2.22-5.16 1.47-6.92-.54-1.26-1.57-2.29-2.95-2.86Zm-5.17 4.72c-1.24.07-2.53-.49-2.6-1.68-.05-.89.63-1.88 2.68-2 .23-.01.46-.02.68-.02.73 0 1.41.07 2.03.2-.23 2.89-1.59 3.44-2.79 3.5Z"></path>
                        </svg>
                    </a>
                    <!-- Telegram -->
                    <a href="https://t.me/subscrr_app" target="_blank" rel="noopener noreferrer" class="hover:text-white"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg></a>
                    <!-- Instagram -->
                    <a href="https://instagram.com/subscrr" target="_blank" rel="noopener noreferrer" class="hover:text-white"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
                    <!-- X -->
                    <a href="https://x.com/subscrr" target="_blank" rel="noopener noreferrer" class="hover:text-white"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg></a>
                    <!-- TikTok -->
                    <a href="https://www.tiktok.com/@subscrr" target="_blank" rel="noopener noreferrer" class="hover:text-white"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg></a>
                    <!-- YouTube -->
                    <a href="https://www.youtube.com/@subscrr_app" target="_blank" rel="noopener noreferrer" class="hover:text-white"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg></a>
                   </div>
                </div>

                <!-- Kanan: Links & Copyright -->
                <div class="flex flex-col md:flex-row items-center gap-6 text-sm text-gray-600 dark:text-gray-400">
                    <nav class="flex flex-wrap justify-center gap-6">
                        <a href="<?= base_url('help_center') ?>" class="hover:text-white transition">Help Center</a>
                        <a href="<?= base_url('journal') ?>" class="hover:text-white transition">Journal</a>
                        <!-- Link Contact us dengan mailto -->
                        <a href="mailto:hi@subscrr.app" id="contact-link" class="hover:text-white transition">Contact us</a>
                        <!-- Link Privacy Policy dan Terms of Use -->
                        <a href="<?= base_url('privacy-policy') ?>" class="hover:text-white transition">Privacy Policy</a>
                        <a href="<?= base_url('terms') ?>" class="hover:text-white transition">Terms of Use</a>
                                            <!-- Toggle Dark Mode -->
                   <button id="theme-toggle" class="flex items-center text-gray-600 transition-all dark:text-gray-400 hover:text-white">
                        <!-- Ikon Matahari (Tampil saat Dark Mode) -->
                        <svg id="icon-sun" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                        </svg>
                        
                        <!-- Ikon Bulan (Tersembunyi, akan muncul saat Mode Terang) -->
                        <svg id="icon-moon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 hidden">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.2 14.8A8.4 8.4 0 1 1 9.2 3.8a7 7 0 0 0 11 11Z" />
                        </svg>
                        
                        <!-- Teks Label -->
                        <span id="theme-text">Light</span>
                    </button>
                    </nav>
                    
                    <span class="text-gray-500 dark:text-gray-500">© 2026 Subscrr. All rights reserved.</span>

                </div>

            </div>
            
            <!-- Bagian Badge Maidemail -->
            <a href="https://maidensail.com/startup/subscrr" target="_blank">
               <img src="assets/uploads/footer/subscrr.svg" alt="Maidemail" class="h-8 w-auto invert mt-6">
            </a>
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

    // Animasi reveal saat elemen hero masuk viewport
    const revealElement = document.querySelector('.reveal');
    if (revealElement) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        observer.observe(revealElement);
    }

    // Script untuk menampilkan email saat "Contact us" diklik
    const contactLink = document.getElementById('contact-link');
    if (contactLink) {
        const originalText = contactLink.textContent;
        const emailAddress = 'hi@subscrr.app';
        
        contactLink.addEventListener('click', function(e) {
            e.preventDefault();
            
            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(emailAddress).then(() => {
                    contactLink.textContent = "✓ " + emailAddress + " copied";
                    setTimeout(() => {
                        contactLink.textContent = originalText;
                    }, 2000);
                }).catch(err => {
                    console.error('Gagal menyalin: ', err);
                });
            } else {
                const tempInput = document.createElement('textarea');
                tempInput.value = emailAddress;
                document.body.appendChild(tempInput);
                tempInput.select();
                document.execCommand('copy');
                document.body.removeChild(tempInput);
                
                contactLink.textContent = "✓ " + emailAddress + " copied";
                setTimeout(() => {
                    contactLink.textContent = originalText;
                }, 2000);
            }
        });
    }

     const themeToggleBtn = document.getElementById('theme-toggle');
    const iconSun = document.getElementById('icon-sun');
    const iconMoon = document.getElementById('icon-moon');
    const themeText = document.getElementById('theme-text'); // Tambahan untuk teks

    function updateThemeUI() {
        if (document.documentElement.classList.contains('dark')) {
            iconMoon.classList.add('hidden');
            iconSun.classList.remove('hidden');
            themeText.textContent = 'Light'; // Saat gelap, tombol menampilkan opsi untuk pergi ke terang
        } else {
            iconMoon.classList.remove('hidden');
            iconSun.classList.add('hidden');
            themeText.textContent = 'Dark'; // Saat terang, tombol menampilkan opsi untuk pergi ke gelap
        }
    }

    // Cek localStorage saat halaman dimuat agar tema tetap tersimpan
    if (localStorage.getItem('theme') === 'dark') {
        document.documentElement.classList.add('dark');
    }
    
    // Jalankan fungsi awal agar ikon dan teks sesuai kondisi awal
    updateThemeUI();

    if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', function() {
            document.documentElement.classList.toggle('dark');
            
            if (document.documentElement.classList.contains('dark')) {
                localStorage.setItem('theme', 'dark');
            } else {
                localStorage.setItem('theme', 'light');
            }
            
            updateThemeUI();
        });
    }
</script>