<!-- ================= HERO SECTION ================= -->
<section class="min-h-screen flex flex-col lg:flex-row items-center justify-center bg-[#f5f4ee] px-6 py-20 gap-12 lg:gap-20">
    <div class="max-w-xl w-full">
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight text-[#111] leading-[1.1]">
            All your subscriptions. And what they really cost.
        </h1>
        <p class="mt-6 text-lg md:text-xl text-[#666] leading-relaxed max-w-lg">
            Everything you pay for in one place, the honest total per day, month and year,
            and a quiet nudge the day before the money leaves.
        </p>
        <div class="mt-8 flex flex-wrap gap-4">
            <a href="https://apps.apple.com/us/app/subscrr-take-back-control/id6757530448" 
               target="_blank" 
               rel="noopener noreffer" 
               class="magnetic inline-flex items-center justify-center rounded-full bg-[#ff3b30] px-8 py-4 text-base font-semibold text-white transition shadow-sm">
                Download on the App Store
            </a>
            <a href="#overview" class="magnetic inline-flex items-center justify-center rounded-full border border-gray-300 px-8 py-4 text-base font-semibold text-[#111] transition">
                See it in motion
            </a>
        </div>
    </div>
    <div class="relative w-full max-w-[440px] h-auto flex justify-center mt-10 lg:mt-[100px]">
        <video class="absolute top-[2%] left-[5%] w-[90%] h-[95%] object-cover rounded-[2.2rem] z-0"
               autoplay muted loop playsinline
               src="<?= base_url('assets/uploads/hero/hero-screen.mp4') ?>">
        </video>
        <img src="<?= base_url('assets/uploads/hero/hero-frame.png') ?>"
             alt="Phone Frame"
             class="relative w-full h-auto object-contain drop-shadow-2xl z-10">
        <div class="magnetic absolute left-[-90px] bottom-[90px] z-20 bg-white/60 backdrop-blur-md border border-gray-200 shadow-sm p-4 rounded-3xl ">
            <img src="<?= base_url('assets/uploads/hero/qr-appstore.svg') ?>"
                 alt="QR Code App Store"
                 class="w-[150px] h-auto block">
        </div>
    </div>
</section>

<!-- ================= PROMO VIDEO ================= -->
<section id="promo-section" class="relative w-full h-auto lg:min-h-screen overflow-hidden bg-[#f5f4ee]">
    <!-- Wrapper: relative di mobile, absolute di desktop -->
    <div id="promo-video-wrapper" class="relative w-full h-auto lg:absolute lg:inset-0 lg:overflow-hidden lg:rounded-[2.5rem]">
        <video id="promo-video"
               class="relative w-full h-auto lg:absolute lg:inset-0 lg:w-full lg:h-full lg:object-cover"
               style="transform: scale(1); transform-origin: center center; border-radius: 2.5rem; transition: transform 1s cubic-bezier(0.16, 1, 0.3, 1); will-change: transform;"
               autoplay loop muted playsinline
               src="<?= base_url('assets/uploads/hero/promo.mp4') ?>">
        </video>
    </div>

    <button id="toggle-sound"
            class="absolute bottom-6 right-6 z-20 flex items-center justify-center w-12 h-12 bg-black/50 hover:bg-black/70 text-white rounded-full transition backdrop-blur-sm">
        <svg id="icon-muted"
             xmlns="http://www.w3.org/2000/svg"
             fill="none" viewBox="0 0 24 24"
             stroke-width="1.5" stroke="currentColor"
             class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M17.25 9.75L19.5 12m0 0l2.25 2.25M19.5 12l2.25-2.25M19.5 12l-2.25 2.25m-10.5-6l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z" />
        </svg>
        <svg id="icon-unmuted"
             xmlns="http://www.w3.org/2000/svg"
             fill="none" viewBox="0 0 24 24"
             stroke-width="1.5" stroke="currentColor"
             class="w-6 h-6 hidden">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M19.114 5.636a9 9 0 010 12.728M16.463 8.288a5.25 5.25 0 010 7.424M6.75 8.25l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z" />
        </svg>
    </button>
</section>

<!-- ================= SCRIPTS ================= -->
<script>
    (function() {
        'use strict';

        const magneticElements = document.querySelectorAll('.magnetic');

        magneticElements.forEach((el) => {
            el.addEventListener('mousemove', (e) => {
                const rect = el.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;

                const maxShift = 20;
                const shiftX = Math.max(-maxShift, Math.min(maxShift, x * 0.5));
                const shiftY = Math.max(-maxShift, Math.min(maxShift, y * 0.5));

                el.style.transform = `translate(${shiftX}px, ${shiftY}px)`;
            });

            el.addEventListener('mouseleave', () => {
                el.style.transform = 'translate(0, 0)';
            });
        });

        const video = document.getElementById('promo-video');
        const btn = document.getElementById('toggle-sound');
        const iconMuted = document.getElementById('icon-muted');
        const iconUnmuted = document.getElementById('icon-unmuted');

        if (video && btn) {
            video.muted = true;
            video.play().catch(() => {});

            btn.addEventListener('click', function() {
                if (video.muted) {
                    video.muted = false;
                    iconMuted.classList.add('hidden');
                    iconUnmuted.classList.remove('hidden');
                } else {
                    video.muted = true;
                    iconMuted.classList.remove('hidden');
                    iconUnmuted.classList.add('hidden');
                }
            });

        }

        const promoSection = document.getElementById('promo-section');
        const promoVideo = document.getElementById('promo-video');

        function handleScrollScale() {
            if (!promoSection || !promoVideo) return;

            const rect = promoSection.getBoundingClientRect();
            const viewportHeight = window.innerHeight;

            // Deteksi layar mobile (Android/iOS) - lebar layar < 1024px
            const isMobile = window.innerWidth < 1024;

            if (isMobile) {
                // LOGIKA ANDROID: Lebih responsif, animasi muncul saat video mulai terlihat
                // Gunakan threshold sedikit lebih besar dari 0.5 (misal 0.85 atau 1)
                // agar tidak perlu scroll jauh ke tengah layar.
                const threshold = viewportHeight * 0.85; // bisa diubah ke 1 jika ingin langsung aktif

                if (rect.top < threshold) {
                    promoVideo.style.transform = 'scale(1)';
                } else {
                    promoVideo.style.transform = 'scale(0.85)';
                }
            } else {
                // LOGIKA DESKTOP: Tetap pakai kondisi asli (tengah layar)
                if (rect.top < viewportHeight * 0.5) {
                    promoVideo.style.transform = 'scale(1)';
                } else {
                    promoVideo.style.transform = 'scale(0.85)';
                }
            }
        }

        window.addEventListener('scroll', handleScrollScale, { passive: true });
        window.addEventListener('resize', handleScrollScale);
        handleScrollScale();
      })();
</script>