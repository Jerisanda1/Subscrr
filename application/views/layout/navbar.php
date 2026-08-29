<header id="navbar" class="fixed top-4 left-1/2 -translate-x-1/2 z-50 w-[calc(100%-32px)] max-w-[1500px] flex items-center px-6 py-3 bg-white/60 backdrop-blur-xl rounded-full border border-gray-200 shadow-sm">
    <!-- logo -->
    <a href="<?= site_url('home') ?>" id="logo-subscrr" class="flex items-center gap-2 font-bold text-xl text-gray-800">
        <img src="<?= base_url('assets/uploads/icon/icon_Subscrr.png') ?>" alt="Subscrr" class="h-8 w-8 object-contain">
        Subscrr
    </a>
    
    <!-- nav links -->
    <nav class="hidden md:flex gap-8 text-sm text-gray-500 ml-auto">
        <a href="<?= site_url('home') ?>#overview" class="relative font-medium hover:text-gray-900 transition after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-orange-600 after:transition-all hover:after:w-full">Overview</a>
        <a href="<?= site_url('home') ?>#ai_spend" class="relative font-medium hover:text-gray-900 transition after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-orange-600 after:transition-all hover:after:w-full">AI Spend</a>
        <a href="<?= site_url('home') ?>#privacy" class="relative font-medium hover:text-gray-900 transition after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-orange-600 after:transition-all hover:after:w-full">Privacy</a>
        <a href="<?= site_url('home') ?>#pricing" class="relative font-medium hover:text-gray-900 transition after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-orange-600 after:transition-all hover:after:w-full">Pricing</a>
        <a href="<?= site_url('blog') ?>" id="nav-blog" class="relative font-medium hover:text-gray-900 transition after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-0 after:bg-orange-600 after:transition-all hover:after:w-full">Blog</a>
    </nav>
    
    <!-- tombol Get the app -->
    <a href="<?= site_url('home') ?>" id="btn-get-app" class="bg-orange-600 text-white text-sm font-semibold px-6 py-3 rounded-full transition ml-4">Get the app</a>
</header>

<!-- Script untuk smooth scroll logo dan efek magnetik tombol -->
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

    // Efek magnetik tombol "Get the app" - hanya aktif di sekitar tombol
    const navbar = document.getElementById('navbar');
    const btnGetApp = document.getElementById('btn-get-app');
    const navBlog = document.getElementById('nav-blog');

    const activationRadius = 60; 

    navbar.addEventListener('mousemove', function(e) {
        const navbarRect = navbar.getBoundingClientRect();
        const mouseX = e.clientX - navbarRect.left;
        const mouseY = e.clientY - navbarRect.top;
        
        const blogRect = navBlog.getBoundingClientRect();
        const blogLeftRel = blogRect.left - navbarRect.left;
        
        if (mouseX < blogLeftRel) {
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
        btnGetApp.style.transform = 'translate(0, 0)';
    });
</script>