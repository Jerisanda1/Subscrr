<!-- ================= BACKGROUND LAYER ================= -->
<div id="page-background" 
     class="fixed inset-0 -z-10 transition-colors duration-1000 ease-in-out bg-[#f5f4ee]"></div>

<!-- ================= SCROLL ANIMATION STYLES ================= -->
<style>
  [data-animate] {
    transition: opacity 0.8s cubic-bezier(0.22, 1, 0.36, 1),
      transform 0.8s cubic-bezier(0.22, 1, 0.36, 1);
    will-change: opacity, transform;
  }

  [data-animate='fade-up'] {
    opacity: 0;
    transform: translateY(40px);
  }
  [data-animate='fade-down'] {
    opacity: 0;
    transform: translateY(-40px);
  }
  [data-animate='slide-left'] {
    opacity: 0;
    transform: translateX(-50px);
  }
  [data-animate='slide-right'] {
    opacity: 0;
    transform: translateX(50px);
  }
  [data-animate='zoom-in'] {
    opacity: 0;
    transform: scale(0.85);
  }

  [data-animate].animate-visible {
    opacity: 1;
    transform: translate(0) scale(1);
  }

  @media (max-width: 768px) {
    [data-animate='slide-left'],
    [data-animate='slide-right'] {
      transform: translateY(40px);
    }
    [data-animate='slide-left'].animate-visible,
    [data-animate='slide-right'].animate-visible {
      transform: translateY(0) scale(1);
    }
  }
</style>

<!-- ================= SECTION AI SPEND ================= -->
<section id="ai_spend" class="min-h-screen flex items-center justify-center p-4 md:p-10">
    <div class="relative w-full max-w-6xl bg-black rounded-[2.5rem] md:rounded-[3rem] p-6 md:p-12 shadow-2xl overflow-hidden lg:h-150 flex items-center">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center w-full">
            
            <!-- Teks Kiri (Canvas Partikel) -->
            <div class="space-y-4 z-10" data-animate="slide-left" style="transition-delay: 0.1s;">
                <p class="text-xs font-bold tracking-[0.2em] text-gray-400 uppercase dark:text-gray-300">
                    Premium · AI Spend
                </p>
                <div id="particle-container" class="relative w-full h-30 md:h-40 cursor-pointer">
                    <canvas id="particleCanvas" class="absolute inset-0 w-full h-full"></canvas>
                    <h2 id="particle-text" 
                        style="font-family: 'Poppins', sans-serif; font-weight: 700;"
                        class="absolute inset-0 opacity-0 pointer-events-none select-none leading-[1.05] tracking-tight text-5xl md:text-6xl lg:text-6xl text-[#ff3b30]">
                        Snap a receipt.<br>
                        Let AI do the math.
                    </h2>
                </div>
                <p class="text-lg md:text-xl text-gray-300 max-w-md leading-relaxed">
                    Typing receipts is a chore. Snapping one is a tap. The AI pulls out the numbers, files them into categories, and throws the photo away.
                </p>
            </div>

            <!-- Video HP Kanan -->
            <div class="relative h-90 w-full flex justify-center lg:justify-center items-start" data-animate="slide-right" style="transition-delay: 0.2s;">
                <div class="relative w-70 md:w-80 lg:w-80 aspect-9/19 overflow-hidden shadow-2xl">
                    <video class="w-full h-full object-cover" autoplay loop muted playsinline>
                        <source src="<?= base_url('assets/uploads/ai_spend/ai-device2.mp4') ?>" type="video/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= SECTION PREMIUM WIDGETS ================= -->
<section id="premium-widgets" class="min-h-screen flex flex-col items-center justify-center px-6 py-20 text-center">
    <p class="text-xs font-bold tracking-[0.2em] text-blue-500 uppercase mb-4 dark:text-blue-400" data-animate="fade-down" style="transition-delay: 0.1s;">
        Premium · Widgets
    </p>
    <h2 class="text-5xl md:text-7xl font-extrabold tracking-tight text-[#111] dark:text-white leading-[1.1] max-w-4xl mx-auto" data-animate="fade-up" style="transition-delay: 0.2s;">
        Your next payment,<br>
        right on the Home Screen.
    </h2>
    <p class="mt-6 text-lg md:text-xl text-[#555] dark:text-gray-300 leading-relaxed max-w-2xl mx-auto" data-animate="fade-up" style="transition-delay: 0.3s;">
        What is due next, on the Home and Lock Screen. You find out without opening the app,
        which is the highest praise an app can get. Comes with Premium.
    </p>
    <!-- Video Besar -->
    <div class="mt-16 w-full max-w-4xl overflow-hidden rounded-[2.5rem] md:rounded-[3rem] shadow-2xl" data-animate="zoom-in" style="transition-delay: 0.4s;">
        <video class="w-full h-auto" autoplay loop muted playsinline>
            <source src="<?= base_url('assets/uploads/ai_spend/widgets-device6.mp4') ?>" type="video/mp4">
            Browser Anda tidak mendukung tag video.
        </video>
    </div>
</section>

<!-- ================= SECTION APPLE WATCH ================= -->
<section id="apple-watch" class="min-h-screen flex flex-col items-center justify-center px-6 py-20 text-center">
    <p class="text-xs font-bold tracking-[0.2em] text-blue-500 uppercase mb-4 dark:text-blue-400" data-animate="fade-down" style="transition-delay: 0.1s;">
        Apple Watch
    </p>
    <h2 class="text-5xl md:text-7xl font-extrabold tracking-tight text-[#111] dark:text-white leading-[1.1] max-w-4xl mx-auto" data-animate="fade-up" style="transition-delay: 0.2s;">
        The next charge,<br>
        on your wrist.
    </h2>
    <p class="mt-6 text-lg md:text-xl text-[#555] dark:text-gray-300 leading-relaxed max-w-2xl mx-auto" data-animate="fade-up" style="transition-delay: 0.3s;">
        A complication on the watch face shows what is due next and what it costs.
        Pick its colour right on the watch. The daily affirmation lives there too.
    </p>
    <!-- Dua Media Sejajar -->
    <div class="mt-16 w-full max-w-4xl grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="relative overflow-hidden rounded-[2rem] shadow-2xl aspect-[3/5]" data-animate="slide-left" style="transition-delay: 0.4s;">
            <video class="w-full h-full object-cover" autoplay loop muted playsinline>
                <source src="<?= base_url('assets/uploads/ai_spend/watch-face.mp4') ?>" type="video/mp4">
                Browser Anda tidak mendukung tag video.
            </video>
        </div>
        <div class="relative overflow-hidden rounded-[2rem] shadow-2xl aspect-[3/5]" data-animate="slide-right" style="transition-delay: 0.5s;">
            <img src="<?= base_url('assets/uploads/ai_spend/watch-face.jpg') ?>" 
                 alt="Apple Watch" 
                 class="w-full h-full object-cover">
        </div>
    </div>
    <!-- Teks Besar di Bawah -->
    <div class="mt-20 max-w-4xl mx-auto text-left" data-animate="fade-up" style="transition-delay: 0.6s;">
        <p class="text-3xl md:text-5xl font-extrabold tracking-tight text-[#111] dark:text-white leading-[1.2]">
            You know roughly what you pay every month. <span class="text-[#ff3b30]">Roughly</span> is the problem.
            All your subscriptions. We counted ours and cancelled three the same evening.
            Subscrr turns that quiet leak into <span class="text-[#ff3b30]">one honest number</span> you can act on.
        </p>
    </div>
</section>

<!-- ================= SCRIPT ================= -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ---------- ANIMASI PARTIKEL ----------
    const canvas = document.getElementById('particleCanvas');
    const container = document.getElementById('particle-container');
    
    if (!canvas || !container) return;

    const ctx = canvas.getContext('2d');
    const TEXT = "Snap a receipt.\nLet AI do the math.";
    const GAP = 2;
    const PARTICLE_RADIUS = 1.5;

    let particles = [];
    let animating = false;
    let idleRAF = null;
    let animationRAF = null;   // untuk animasi klik
    let isParticleVisible = true; // default terlihat

    function resize() {
        const rect = container.getBoundingClientRect();
        canvas.width = rect.width;
        canvas.height = rect.height;
        initParticles();
        if (!animating && isParticleVisible) startIdle();
    }

    function getTextPositions() {
        const tempCanvas = document.createElement('canvas');
        const tempCtx = tempCanvas.getContext('2d');
        tempCanvas.width = canvas.width;
        tempCanvas.height = canvas.height;

        const textEl = document.getElementById('particle-text');
        let fontFamily = 'Arial, sans-serif';
        let fontWeight = 'bold';
        if (textEl) {
            const style = window.getComputedStyle(textEl);
            fontFamily = style.fontFamily;
            fontWeight = style.fontWeight;
        }

        let fontSize = Math.min(canvas.width / 8.5, canvas.height / 2.2, 80);
        const lines = TEXT.split('\n');
        const lineHeightFactor = 1.05;
        const paddingX = 5;
        const paddingY = 10;

        function isFit(size) {
            tempCtx.font = `${fontWeight} ${size}px ${fontFamily}`;
            const lineHeight = size * lineHeightFactor;
            const totalHeight = lines.length * lineHeight;
            if (totalHeight > canvas.height - paddingY * 2) return false;
            for (const line of lines) {
                const metrics = tempCtx.measureText(line);
                if (metrics.width + paddingX * 2 > canvas.width) return false;
            }
            return true;
        }

        while (fontSize > 5 && !isFit(fontSize)) {
            fontSize -= 2;
        }

        tempCtx.font = `${fontWeight} ${fontSize}px ${fontFamily}`;
        tempCtx.fillStyle = '#ffffff';
        tempCtx.textAlign = 'left';
        tempCtx.textBaseline = 'middle';

        const lineHeight = fontSize * lineHeightFactor;
        const totalTextHeight = lines.length * lineHeight;
        const startY = (canvas.height - totalTextHeight) / 2 + lineHeight / 2;

        lines.forEach((line, index) => {
            tempCtx.fillText(line, paddingX, startY + index * lineHeight);
        });

        const data = tempCtx.getImageData(0, 0, canvas.width, canvas.height).data;
        const positions = [];

        for (let y = 0; y < canvas.height; y += GAP) {
            for (let x = 0; x < canvas.width; x += GAP) {
                const idx = (y * canvas.width + x) * 4;
                if (data[idx + 3] > 128) {
                    positions.push({ x, y });
                }
            }
        }
        return positions;
    }

    function initParticles() {
        const targets = getTextPositions();
        particles = targets.map(target => ({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            targetX: target.x,
            targetY: target.y,
            vx: (Math.random() - 0.5) * 2,
            vy: (Math.random() - 0.5) * 2
        }));

        if (animating) {
            particles.forEach(p => {
                p.x = p.targetX;
                p.y = p.targetY;
                p.vx = 0;
                p.vy = 0;
            });
            paint();
        }
    }

    function paint() {
        ctx.fillStyle = '#000000';
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        ctx.fillStyle = '#ff3b30';
        particles.forEach(p => {
            ctx.beginPath();
            ctx.arc(p.x, p.y, PARTICLE_RADIUS, 0, Math.PI * 2);
            ctx.fill();
        });
    }

    function startIdle() {
        if (idleRAF) cancelAnimationFrame(idleRAF);
        if (!isParticleVisible) return; // jangan mulai jika tidak terlihat

        function update() {
            if (!isParticleVisible) { idleRAF = null; return; } // hentikan jika keluar
            particles.forEach(p => {
                p.x += p.vx;
                p.y += p.vy;
                if (p.x < 0 || p.x > canvas.width) p.vx *= -1;
                if (p.y < 0 || p.y > canvas.height) p.vy *= -1;
                p.x = Math.max(0, Math.min(canvas.width, p.x));
                p.y = Math.max(0, Math.min(canvas.height, p.y));
            });
            paint();
            idleRAF = requestAnimationFrame(update);
        }
        idleRAF = requestAnimationFrame(update);
    }

    function animate() {
        if (!animating || !isParticleVisible) {
            if (animationRAF) { cancelAnimationFrame(animationRAF); animationRAF = null; }
            return;
        }
        particles.forEach(p => {
            const dx = p.targetX - p.x;
            const dy = p.targetY - p.y;
            p.vx += dx * 0.05;
            p.vy += dy * 0.05;
            p.vx *= 0.85;
            p.vy *= 0.85;
            p.x += p.vx;
            p.y += p.vy;
        });
        paint();
        animationRAF = requestAnimationFrame(animate);
    }

    canvas.addEventListener('click', () => {
        if (!animating) {
            animating = true;
            if (idleRAF) {
                cancelAnimationFrame(idleRAF);
                idleRAF = null;
            }
            if (animationRAF) cancelAnimationFrame(animationRAF);
            animationRAF = requestAnimationFrame(animate);
        }
    });

    // Observer untuk visibility partikel
    const particleObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            isParticleVisible = entry.isIntersecting;
            if (!isParticleVisible) {
                // hentikan semua animasi
                if (idleRAF) { cancelAnimationFrame(idleRAF); idleRAF = null; }
                if (animationRAF) { cancelAnimationFrame(animationRAF); animationRAF = null; }
                animating = false;
            } else {
                // jika terlihat kembali dan tidak sedang animating, mulai idle
                if (!animating) {
                    startIdle();
                }
            }
        });
    }, { threshold: 0.1 });
    particleObserver.observe(container);

    window.addEventListener('resize', resize, { passive: true });
    if (document.fonts) {
        document.fonts.ready.then(resize);
    }
    resize();

    // ---------- PERUBAHAN BACKGROUND HALAMAN ----------
    const bgElement = document.getElementById('page-background');
    const sections = [
        { id: 'ai_spend',        light: '#f5f4ee', dark: '#0a0a0a' },
        { id: 'premium-widgets', light: '#f5d0b0', dark: '#2b160b' },
        { id: 'apple-watch',     light: '#f5f4ee', dark: '#0a0a0a' }
    ];

    const sectionElements = sections.map(s => document.getElementById(s.id));
    let activeSectionId = null;

    function updateBackgroundColor() {
        const isDark = document.documentElement.classList.contains('dark');
        const section = sections.find(s => s.id === activeSectionId);
        if (section) {
            bgElement.style.backgroundColor = isDark ? section.dark : section.light;
        } else {
            bgElement.style.backgroundColor = isDark ? '#0a0a0a' : '#f5f4ee';
        }
    }

    const bgObserver = new IntersectionObserver((entries) => {
        let maxRatio = 0;
        let newActiveId = null;

        entries.forEach(entry => {
            if (entry.isIntersecting && entry.intersectionRatio > maxRatio) {
                maxRatio = entry.intersectionRatio;
                newActiveId = entry.target.id;
            }
        });

        if (newActiveId) {
            activeSectionId = newActiveId;
            updateBackgroundColor();
        }
    }, {
        threshold: [0.2, 0.4, 0.6, 0.8]
    });

    sectionElements.forEach(el => {
        if (el) bgObserver.observe(el);
    });

    // Deteksi perubahan kelas 'dark' pada <html> (karena toggle dark mode)
    const htmlElement = document.documentElement;
    const themeObserver = new MutationObserver(updateBackgroundColor);
    themeObserver.observe(htmlElement, { attributes: true, attributeFilter: ['class'] });

    // Inisialisasi awal
    updateBackgroundColor();

    // ---------- SCROLL ANIMATION OBSERVER ----------
    const animatedElements = document.querySelectorAll('[data-animate]');

    const scrollObserver = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-visible');
                obs.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15,
        rootMargin: '0px 0px -40px 0px'
    });

    animatedElements.forEach(el => scrollObserver.observe(el));

    if (!('IntersectionObserver' in window)) {
        animatedElements.forEach(el => el.classList.add('animate-visible'));
    }
});
</script>