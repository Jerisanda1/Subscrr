<header id="navbar" class="fixed top-4 left-1/2 -translate-x-1/2 z-50 w-[calc(100%-32px)] max-w-[1500px] flex items-center px-6 py-3 bg-white/60 backdrop-blur-lg rounded-full border border-gray-200 shadow-sm">
    <!-- logo -->
    <a href="<?= site_url('home') ?>" id="logo-subscrr" class="flex items-center gap-2 font-bold text-xl text-gray-800">
        <img src="<?= base_url('assets/uploads/icon/icon_Subscrr.png') ?>" alt="Subscrr" class="h-8 w-8 object-contain">
        Subscrr
    </a>
    
    <!-- nav links (desktop) -->
    <nav class="hidden md:flex gap-8 text-sm text-gray-500 ml-auto">
        <a href="<?= site_url('home') ?>#overview" class="relative font-medium hover:text-gray-900 transition after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-orange-600 after:transition-all hover:after:w-full">Overview</a>
        <a href="<?= site_url('home') ?>#ai_spend" class="relative font-medium hover:text-gray-900 transition after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-orange-600 after:transition-all hover:after:w-full">AI Spend</a>
        <a href="<?= site_url('home') ?>#privacy" class="relative font-medium hover:text-gray-900 transition after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-orange-600 after:transition-all hover:after:w-full">Privacy</a>
        <a href="<?= site_url('home') ?>#pricing" class="relative font-medium hover:text-gray-900 transition after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-orange-600 after:transition-all hover:after:w-full">Pricing</a>
        <a href="<?= site_url('journal') ?>#journal" id="nav-journal" class="relative font-medium hover:text-gray-900 transition after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-orange-600 after:transition-all hover:after:w-full">Journal</a>
    </nav>
    
    <!-- Tombol Get the app (Selalu Terlihat di Semua Ukuran Layar) -->
    <a href="<?= site_url('home') ?>" id="btn-get-app" class="bg-orange-600 text-white text-sm font-semibold px-6 py-3 rounded-full transition ml-4">Get the app</a>

    <!-- Tombol Hamburger (Hanya Mobile) -->
    <button id="menu-toggle" class="md:hidden ml-3 p-2 text-gray-700 focus:outline-none">
        <!-- Icon Buka (Hamburger) -->
        <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        <!-- Icon Tutup (X) -->
        <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hidden">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</header>

<!-- Mobile Menu Container (Dropdown) -->
<div id="mobile-menu" class="hidden fixed top-20 left-1/2 -translate-x-1/2 z-40 w-[calc(100%-32px)] max-w-[1500px] bg-white/95 backdrop-blur-md rounded-3xl border border-gray-200 shadow-xl p-6 md:hidden">
    <nav class="flex flex-col gap-4 text-gray-700">
        <a href="<?= site_url('home') ?>#overview" class="text-base font-medium hover:text-orange-600 transition">Overview</a>
        <a href="<?= site_url('home') ?>#ai_spend" class="text-base font-medium hover:text-orange-600 transition">AI Spend</a>
        <a href="<?= site_url('home') ?>#privacy" class="text-base font-medium hover:text-orange-600 transition">Privacy</a>
        <a href="<?= site_url('home') ?>#pricing" class="text-base font-medium hover:text-orange-600 transition">Pricing</a>
        <a href="<?= site_url('journal') ?>#journal" class="text-base font-medium hover:text-orange-600 transition">Journal</a>
    </nav>
</div>

<!-- Script untuk smooth scroll logo, efek magnetik tombol, dan menu mobile -->
<script>
    // Smooth scroll logo
    document.getElementById('logo-subscrr').addEventListener('click', function(e) {
        var path = window.location.pathname;
        var isHome = path.endsWith('/home') || path.endsWith('/Subscrr') || path.endsWith('/Subscrr/');
        
        if (isHome) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    });

    // Efek magnetik tombol "Get the app" - Hanya aktif di Desktop (Lebar >= 768px)
    const navbar = document.getElementById('navbar');
    const btnGetApp = document.getElementById('btn-get-app');
    const navJournal = document.getElementById('nav-journal');

    const activationRadius = 60; 

    navbar.addEventListener('mousemove', function(e) {
        // Cegah efek magnetik di mobile
        if (window.innerWidth < 768) return;

        const navbarRect = navbar.getBoundingClientRect();
        const mouseX = e.clientX - navbarRect.left;
        const mouseY = e.clientY - navbarRect.top;
        
        const journalRect = navJournal.getBoundingClientRect();
        const journalLeftRel = journalRect.left - navbarRect.left;
        
        if (mouseX < journalLeftRel) {
            btnGetApp.style.transform = 'translate(0, 0)';
            return;
        }
        
        const btnRect = btnGetApp.getBoundingClientRect();
        const btnCenterX = btnRect.left - navbarRect.left + btnRect.width / 2;
        const btnCenterY = btnRect.top - navbarRect.top + btnRect.height / 2;
        
        const distX = mouseX - btnCenterX;
        const distY = mouseY - btnCenterY;
        const distance = Math.sqrt(distX * distX + distY * distY);
        
        if (distance <= activationRadius) {
            const maxShift = 15;
            const shiftX = Math.max(-maxShift, Math.min(maxShift, distX * 0.3));
            const shiftY = Math.max(-maxShift, Math.min(maxShift, distY * 0.3));
            btnGetApp.style.transform = `translate(${shiftX}px, ${shiftY}px)`;
        } else {
            btnGetApp.style.transform = 'translate(0, 0)';
        }
    });

    navbar.addEventListener('mouseleave', function() {
        if (window.innerWidth < 768) return;
        btnGetApp.style.transform = 'translate(0, 0)';
    });

    // ===== SCRIPT UNTUK MOBILE MENU (HAMBURGER) =====
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');

    if (menuToggle) {
        // Toggle menu saat tombol diklik
        menuToggle.addEventListener('click', function(e) {
            e.stopPropagation(); // Mencegah event klik langsung menutup menu
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