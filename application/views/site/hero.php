<!-- ================= HERO SECTION ================= -->
<section class="min-h-screen flex flex-col lg:flex-row items-center justify-center bg-[#f5f4ee] px-6 py-12 gap-12 lg:gap-20">
  
  <!-- Kolom Kiri -->
  <div class="max-w-xl w-full">
    <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight text-[#111] leading-[1.1]">
      All your subscriptions. And what they really cost.
    </h1>
    <p class="mt-6 text-lg md:text-xl text-[#666] leading-relaxed max-w-lg">
      Everything you pay for in one place, the honest total per day, month and year, and a quiet nudge the day before the money leaves.
    </p>
    <div class="mt-8 flex flex-wrap gap-4">
      <a href="#" class="inline-flex items-center justify-center rounded-full bg-[#ff3b30] px-8 py-4 text-base font-semibold text-white transition hover:bg-[#e02e24]">
        Download on the App Store
      </a>
      <a href="#" class="inline-flex items-center justify-center rounded-full border border-gray-300 bg-white px-8 py-4 text-base font-semibold text-[#111] transition hover:bg-gray-50">
        See it in motion
      </a>
    </div>
  </div>

  <!-- Kolom Kanan -->
  <div class="relative w-full max-w-[440px] h-auto flex justify-center mt-10 lg:mt-[100px]">
    
    <!-- Video -->
    <video 
      class="absolute top-[2%] left-[5%] w-[90%] h-[95%] object-cover rounded-[2.2rem] z-0"
      autoplay muted loop playsinline
      src="<?= base_url('assets/uploads/hero/hero-screen.mp4') ?>">
    </video>

    <!-- Frame HP -->
    <img 
      src="<?= base_url('assets/uploads/hero/hero-frame.png') ?>" 
      alt="Phone Frame" 
      class="relative w-full h-auto object-contain drop-shadow-2xl z-10">

    <!-- QR Code -->
    <div class="absolute left-[-90px] bottom-[90px] z-20 bg-white/60 backdrop-blur-md border border-gray-200 shadow-sm p-4 rounded-3xl">
      <img 
        src="<?= base_url('assets/uploads/hero/qr-appstore.svg') ?>" 
        alt="QR Code App Store" 
        class="w-[150px] h-auto block">
    </div>
  </div>

</section>

<!-- ================= VIDEO FULL SCREEN ================= -->
<section class="relative w-full min-h-screen overflow-hidden bg-black">
    <!-- Video Background -->
    <video 
        id="promo-video"
        class="absolute inset-0 w-full h-full object-cover" 
        autoplay loop muted playsinline
        src="<?= base_url('assets/uploads/hero/promo.mp4') ?>">
    </video>

    <!-- Overlay Teks di Tengah -->
    <div class="absolute inset-0 flex items-center justify-center">
        <h2 class="text-white text-5xl md:text-7xl font-bold tracking-tight drop-shadow-lg">
            Feel lighter.
        </h2>
    </div>

    <!-- Tombol Mute/Unmute (Pojok Kanan Bawah) -->
    <button 
        id="toggle-sound" 
        class="absolute bottom-6 right-6 z-20 flex items-center justify-center w-12 h-12 bg-black/50 hover:bg-black/70 text-white rounded-full transition backdrop-blur-sm">
        <!-- Icon Muted (default) -->
        <svg id="icon-muted" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 9.75L19.5 12m0 0l2.25 2.25M19.5 12l2.25-2.25M19.5 12l-2.25 2.25m-10.5-6l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z" />
        </svg>
        <!-- Icon Unmuted -->
        <svg id="icon-unmuted" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hidden">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.114 5.636a9 9 0 010 12.728M16.463 8.288a5.25 5.25 0 010 7.424M6.75 8.25l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z" />
        </svg>
    </button>
</section>

<!-- Script untuk mengaktifkan suara video -->
<script>
    const video = document.getElementById('promo-video');
    const btn = document.getElementById('toggle-sound');
    const iconMuted = document.getElementById('icon-muted');
    const iconUnmuted = document.getElementById('icon-unmuted');

    // Pastikan video muted saat autoplay pertama (karena kebijakan browser)
    video.muted = true; 
    video.play().catch(() => {
        // Autoplay diblokir, user harus klik tombol
    });

    // Logika tombol Mute/Unmute
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

    // Otomatis unmute saat user pertama kali klik di mana saja
    document.body.addEventListener('click', function unmuteOnce() {
        if (video.muted) {
            video.muted = false;
            iconMuted.classList.add('hidden');
            iconUnmuted.classList.remove('hidden');
        }
        document.body.removeEventListener('click', unmuteOnce);
    }, { once: true });
</script>