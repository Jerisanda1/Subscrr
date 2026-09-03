<nav class="sticky top-0 z-50 bg-[#f5f4ee]/60 dark:bg-[#0a0a0a]/60 backdrop-blur-md border-b border-gray-200/50 dark:border-gray-700/50 shadow-md">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            
            <!-- Bagian Kiri (Logo & Title) - Diarahkan ke Help Center agar Refresh halaman -->
            <a href="<?= site_url('Help_center') ?>" id="logo-subscrr" class="flex items-center gap-3">
               <img src="<?= base_url('assets/uploads/icon/icon_Subscrr.png') ?>" alt="Subscrr Logo" class="h-9 w-9 object-contain">
                
                <div class="flex items-baseline gap-1.5 text-xl">
                    <span class="font-medium text-gray-900 dark:text-gray-100">Subscrr</span>
                    <span class="font-bold text-gray-900 dark:text-white">Help Center</span>
                </div>
            </a>

            <!-- Bagian Kanan -->
            <div class="flex items-center gap-6">
                <!-- Link Website & Contact (Hanya Desktop) -->
                <div class="hidden md:flex items-center gap-6">
                    <!-- Link Website diarahkan ke Home Website -->
                    <a href="<?= site_url('home') ?>" class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors hover:bg-[#eceae7] rounded-3xl p-2 dark:hover:bg-[#181818] rounded-3xl p-2">Website</a>
                    
                    <!-- Link Contact us (URL Controller, bukan path view) -->
                    <a href="<?= site_url('Help_center/contact') ?>" class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors hover:bg-[#eceae7] rounded-3xl p-2 dark:hover:bg-[#181818] rounded-3xl p-2">Contact us</a>
                </div>
                
                <!-- Tombol Toggle (id="theme-toggle") - Tetap Terlihat di Mobile -->
                <button id="theme-toggle" class="p-2 rounded-full border border-gray-300 dark:border-gray-600 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-gray-700 dark:hover:text-white transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                    </svg>
                </button>

                <!-- Tombol Hamburger (Hanya Mobile) -->
                <button id="menu-toggle" class="md:hidden p-2 text-gray-700 dark:text-gray-300 focus:outline-none">
                    <!-- Icon Buka (Hamburger) -->
                    <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Icon Tutup (X) -->
                    <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hidden">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>
</nav>

<!-- Mobile Menu Container (Dropdown) -->
<div id="mobile-menu" class="hidden fixed top-20 left-1/2 -translate-x-1/2 z-40 w-[calc(100%-32px)] max-w-7xl bg-white/95 dark:bg-[#0a0a0a]/95 backdrop-blur-md rounded-3xl border border-gray-200 dark:border-gray-700 shadow-xl p-6 md:hidden">
    <nav class="flex flex-col gap-4 text-gray-700 dark:text-gray-300">
        <a href="<?= site_url('home') ?>" class="text-base font-medium hover:text-orange-600 transition">Website</a>
        <a href="<?= site_url('Help_center/contact') ?>" class="text-base font-medium hover:text-orange-600 transition">Contact us</a>
    </nav>
</div>

<!-- Script untuk Mobile Menu -->
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');

    if (menuToggle) {
        // Toggle menu saat tombol diklik
        menuToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            mobileMenu.classList.toggle('hidden');
            iconOpen.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
        });

        // Tutup menu jika klik di luar area navbar & menu
        document.addEventListener('click', function(event) {
            if (!mobileMenu.classList.contains('hidden') && 
                !mobileMenu.contains(event.target) && 
                !menuToggle.contains(event.target)) {
                mobileMenu.classList.add('hidden');
                iconOpen.classList.remove('hidden');
                iconClose.classList.add('hidden');
            }
        });

        // Tutup menu secara otomatis ketika salah satu link di dalamnya diklik
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                iconOpen.classList.remove('hidden');
                iconClose.classList.add('hidden');
            });
        });
    }
</script>