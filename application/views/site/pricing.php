<!-- ================= PRICING SECTION ================= -->
<style>
  .magnetic {
    will-change: transform;
    text-decoration: none;
    transition: transform 0.1s ease-out;
  }

  #premium-price {
    transition: opacity 0.3s ease, transform 0.3s ease;
  }
  #premium-subtitle {
    transition: opacity 0.3s ease, transform 0.3s ease;
  }

  /* ============ SCROLL ANIMATION STYLES ============ */
  [data-animate] {
    transition: opacity 0.8s cubic-bezier(0.22, 1, 0.36, 1),
      transform 0.8s cubic-bezier(0.22, 1, 0.36, 1);
    will-change: opacity, transform;
  }

  /* Hidden states */
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

  /* Premium card keeps scale(1.03) during animation */
  [data-animate='slide-right-premium'] {
    opacity: 0;
    transform: translateX(50px) scale(1.03);
    transition: opacity 0.8s cubic-bezier(0.22, 1, 0.36, 1),
      transform 0.8s cubic-bezier(0.22, 1, 0.36, 1);
  }

  /* Visible state */
  [data-animate].animate-visible {
    opacity: 1;
    transform: translate(0) scale(1);
  }
  [data-animate='slide-right-premium'].animate-visible {
    transform: translateX(0) scale(1.03);
  }

  /* Responsive: disable slide animations on small screens */
  @media (max-width: 768px) {
    [data-animate='slide-left'],
    [data-animate='slide-right'],
    [data-animate='slide-right-premium'] {
      transform: translateY(40px);
    }
    [data-animate='slide-left'].animate-visible,
    [data-animate='slide-right'].animate-visible,
    [data-animate='slide-right-premium'].animate-visible {
      transform: translateY(0) scale(1);
    }
    [data-animate='slide-right-premium'].animate-visible {
      transform: translateY(0) scale(1.03);
    }
  }
</style>

<section id="pricing" class="min-h-screen flex items-center justify-center bg-[#f5f4ee] font-sans p-6">
  <div class="max-w-4xl w-full text-center">
    <p
      data-animate="fade-down"
      class="text-blue-700 font-bold tracking-widest text-sm mb-4"
    >
      PRICING
    </p>
    <h1
      data-animate="fade-up"
      style="transition-delay: 0.1s"
      class="text-5xl md:text-7xl font-extrabold tracking-tight text-gray-900 leading-tight"
    >
      Free to start.<br />Premium when you grow.
    </h1>

    <!-- Toggle Section -->
    <div
      data-animate="fade-up"
      style="transition-delay: 0.2s"
      class="mt-10 inline-flex bg-white/60 backdrop-blur-md rounded-full p-1 relative shadow-md"
    >
      <div
        id="toggle-indicator"
        style="
          position: absolute;
          top: 4px;
          bottom: 4px;
          left: 4px;
          width: calc(50% - 4px);
          background-color: #f24e1e;
          border-radius: 9999px;
          transition: transform 0.3s ease-in-out;
        "
      ></div>
      <button
        id="btn-monthly"
        class="relative z-10 flex-1 px-8 py-3 rounded-full font-semibold transition-colors duration-300 text-white"
        style="background: transparent"
      >
        Monthly
      </button>
      <button
        id="btn-yearly"
        class="relative z-10 flex-1 px-8 py-3 rounded-full font-semibold transition-colors duration-300 text-gray-600 whitespace-nowrap"
        style="background: transparent"
      >
        Yearly
        <span id="yearly-discount" class="text-sm font-bold ml-1"
          >− 69%</span
        >
      </button>
    </div>

    <!-- Cards Grid -->
    <div class="mt-16 grid md:grid-cols-2 gap-8 text-left">
      <!-- Free Card -->
      <div
        data-animate="slide-left"
        style="transition-delay: 0.3s"
        class="bg-white rounded-[2rem] p-10 shadow-sm border border-gray-100 flex flex-col"
      >
        <div class="flex justify-between items-start mb-2">
          <h2 class="text-2xl font-bold text-gray-900">Free</h2>
          <div class="text-5xl font-extrabold text-gray-900">$0</div>
        </div>
        <p class="text-gray-500">Enough to see the whole picture.</p>
        <ul class="mt-8 space-y-4 text-gray-800 flex-grow">
          <li class="flex gap-3 items-center">
            <span class="text-[#f24e1e] font-bold">➜ </span> Up to 6
            subscriptions
          </li>
          <li class="flex gap-3 items-center">
            <span class="text-[#f24e1e] font-bold">➜ </span> Per day / month /
            year breakdowns
          </li>
          <li class="flex gap-3 items-center">
            <span class="text-[#f24e1e] font-bold">➜ </span> Renewal reminders
          </li>
          <li class="flex gap-3 items-center">
            <span class="text-[#f24e1e] font-bold">➜ </span> Custom icons &
            colours
          </li>
          <li class="flex gap-3 items-center">
            <span class="text-[#f24e1e] font-bold">➜ </span> iCloud sync &
            privacy
          </li>
        </ul>
        <a
          href="https://apps.apple.com/us/app/subscrr-take-back-control/id6757530448"
          target="_blank"
          rel="noopener noreferrer"
          class="magnetic mt-10 w-full py-4 border border-gray-300 rounded-full font-semibold text-gray-900 hover:bg-gray-50 transition-colors text-center"
        >
          Start free
        </a>
      </div>

      <!-- Premium Card -->
      <div
        data-animate="slide-right-premium"
        style="transition-delay: 0.4s; border: 1px solid #f24e1e;"
        class="bg-white rounded-[2rem] p-10 shadow-xl relative flex flex-col"
        data-scale="1.03"
      >
        <div
          class="absolute -top-4 left-1/2 -translate-x-1/2 bg-[#f24e1e] text-white text-xs font-bold px-4 py-1.5 rounded-full shadow-md"
        >
          Most popular
        </div>
        <div class="flex justify-between items-start mb-2">
          <h2 class="text-2xl font-bold text-gray-900">Premium</h2>
          <div class="text-5xl font-extrabold text-gray-900">
            <span id="premium-price">$7.99</span>
            <span id="premium-suffix" class="text-lg font-medium text-gray-500"
              >/mo</span
            >
          </div>
        </div>
        <p id="premium-subtitle" class="text-gray-500">
          Billed monthly. Cancel anytime.
        </p>
        <ul class="mt-8 space-y-4 text-gray-800 flex-grow">
          <li class="flex gap-3 items-center">
            <span class="text-[#f24e1e] font-bold">➜ </span> Unlimited
            subscriptions
          </li>
          <li class="flex gap-3 items-center">
            <span class="text-[#f24e1e] font-bold">➜ </span> AI Spend: scan
            receipts & statements
          </li>
          <li class="flex gap-3 items-center">
            <span class="text-[#f24e1e] font-bold">➜ </span> Widgets for Home
            and Lock Screen
          </li>
          <li class="flex gap-3 items-center">
            <span class="text-[#f24e1e] font-bold">➜ </span> Personal
            calculation categories
          </li>
          <li class="flex gap-3 items-center">
            <span class="text-[#f24e1e] font-bold">➜ </span> Everything in Free
          </li>
          <li class="flex gap-3 items-center">
            <span class="text-[#f24e1e] font-bold">➜ </span> Support an app
            with zero ads
          </li>
        </ul>
        <a
          href="https://apps.apple.com/us/app/subscrr-take-back-control/id6757530448"
          target="_blank"
          rel="noopener noreferrer"
          class="magnetic mt-10 w-full py-4 bg-[#f24e1e] text-white rounded-full font-semibold hover:bg-[#d63e15] transition-colors shadow-md text-center"
        >
          Go Premium
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ================= FAQ SECTION (DIPERBARUI) ================= -->
<section class="bg-[#f5f4ee] px-6 py-24 lg:py-32">
  <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
    <!-- Kolom Kiri -->
    <div class="lg:col-span-5" data-animate="fade-up">
      <span
        class="text-blue-600 font-bold text-sm uppercase tracking-wider"
        >FAQ</span
      >
      <h2
        class="text-5xl md:text-5xl font-extrabold tracking-tight text-[#111] leading-[1.05] mt-4"
      >
        Good questions.
      </h2>
    </div>

    <!-- Kolom Kanan -->
    <div class="lg:col-span-7">
      <!-- Pertanyaan 1 -->
      <div
        class="faq-item border-b border-gray-300 py-6 first:border-t"
        data-animate="fade-up"
        style="transition-delay: 0.1s"
      >
        <button
          class="faq-question w-full flex items-center justify-between text-left cursor-pointer bg-transparent border-none p-0 group"
        >
          <span
            class="faq-question-text text-xl md:text-2xl font-semibold text-[#111] transition-colors duration-200 group-hover:text-[#ff3b30]"
            >Do I have to connect my bank?</span
          >
          <span
            class="faq-icon text-[#ff3b30] text-4xl font-light leading-none"
            >+</span
          >
        </button>
        <div
          class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out"
        >
          <p class="text-gray-500 text-base md:text-lg leading-relaxed pt-4">
            Never. Subscrr doesn't touch your bank. You add subscriptions
            yourself. Takes a minute, and nothing about your finances ever
            leaves your hands.
          </p>
        </div>
      </div>

      <!-- Pertanyaan 2 -->
      <div
        class="faq-item border-b border-gray-300 py-6"
        data-animate="fade-up"
        style="transition-delay: 0.2s"
      >
        <button
          class="faq-question w-full flex items-center justify-between text-left cursor-pointer bg-transparent border-none p-0 group"
        >
          <span
            class="faq-question-text text-xl md:text-2xl font-semibold text-[#111] transition-colors duration-200 group-hover:text-[#ff3b30]"
            >Where is my data stored?</span
          >
          <span
            class="faq-icon text-[#ff3b30] text-4xl font-light leading-none"
            >+</span
          >
        </button>
        <div
          class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out"
        >
          <p class="text-gray-500 text-base md:text-lg leading-relaxed pt-4">
            Your subscriptions sit in your own private iCloud, tied to your
            Apple ID and synced across your devices. They never reach our
            servers, so we can't read them even if we wanted to.
          </p>
        </div>
      </div>

      <!-- Pertanyaan 3 -->
      <div
        class="faq-item border-b border-gray-300 py-6"
        data-animate="fade-up"
        style="transition-delay: 0.3s"
      >
        <button
          class="faq-question w-full flex items-center justify-between text-left cursor-pointer bg-transparent border-none p-0 group"
        >
          <span
            class="faq-question-text text-xl md:text-2xl font-semibold text-[#111] transition-colors duration-200 group-hover:text-[#ff3b30]"
            >Do you track me?</span
          >
          <span
            class="faq-icon text-[#ff3b30] text-4xl font-light leading-none"
            >+</span
          >
        </button>
        <div
          class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out"
        >
          <p class="text-gray-500 text-base md:text-lg leading-relaxed pt-4">
            Not your money. We use PostHog to count anonymous events like
            "opened the app" or "added a subscription", plus Meta's SDK to
            tell whether an ad we paid for actually worked. No names, no
            amounts, no subscription list, and the advertising identifier only
            if you allow it. The full breakdown is in the privacy policy.
          </p>
        </div>
      </div>

      <!-- Pertanyaan 4 -->
      <div
        class="faq-item border-b border-gray-300 py-6"
        data-animate="fade-up"
        style="transition-delay: 0.4s"
      >
        <button
          class="faq-question w-full flex items-center justify-between text-left cursor-pointer bg-transparent border-none p-0 group"
        >
          <span
            class="faq-question-text text-xl md:text-2xl font-semibold text-[#111] transition-colors duration-200 group-hover:text-[#ff3b30]"
            >What do I get for free?</span
          >
          <span
            class="faq-icon text-[#ff3b30] text-4xl font-light leading-none"
            >+</span
          >
        </button>
        <div
          class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out"
        >
          <p class="text-gray-500 text-base md:text-lg leading-relaxed pt-4">
            Up to six subscriptions with full breakdowns, reminders, custom
            icons and iCloud sync. When six stops being enough, Premium unlocks
            unlimited subscriptions and the AI Spend scanner.
          </p>
        </div>
      </div>

      <!-- Pertanyaan 5 -->
      <div
        class="faq-item border-b border-gray-300 py-6"
        data-animate="fade-up"
        style="transition-delay: 0.5s"
      >
        <button
          class="faq-question w-full flex items-center justify-between text-left cursor-pointer bg-transparent border-none p-0 group"
        >
          <span
            class="faq-question-text text-xl md:text-2xl font-semibold text-[#111] transition-colors duration-200 group-hover:text-[#ff3b30]"
            >How does AI Spend handle my receipts?</span
          >
          <span
            class="faq-icon text-[#ff3b30] text-4xl font-light leading-none"
            >+</span
          >
        </button>
        <div
          class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out"
        >
          <p class="text-gray-500 text-base md:text-lg leading-relaxed pt-4">
            AI reads the numbers and forgets the picture. Images are analysed,
            values extracted, photo discarded. We keep only hashes, never the
            pictures.
          </p>
        </div>
      </div>

      <!-- Pertanyaan 6 -->
      <div
        class="faq-item border-b border-gray-300 py-6"
        data-animate="fade-up"
        style="transition-delay: 0.6s"
      >
        <button
          class="faq-question w-full flex items-center justify-between text-left cursor-pointer bg-transparent border-none p-0 group"
        >
          <span
            class="faq-question-text text-xl md:text-2xl font-semibold text-[#111] transition-colors duration-200 group-hover:text-[#ff3b30]"
            >Can I cancel Premium anytime?</span
          >
          <span
            class="faq-icon text-[#ff3b30] text-4xl font-light leading-none"
            >+</span
          >
        </button>
        <div
          class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out"
        >
          <p class="text-gray-500 text-base md:text-lg leading-relaxed pt-4">
            Yes, in two taps: it's a standard App Store subscription. Your free
            plan keeps working. No hard feelings.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= THREADS PROMO BLOCK ================= -->
<section class="bg-[#f5f4ee] px-6 pb-24 lg:pb-32">
  <a
    href="https://www.threads.com/@subscrr"
    target="_blank"
    rel="noopener noreferrer"
    data-animate="zoom-in"
    style="transition-delay: 0.1s"
    class="block max-w-6xl mx-auto rounded-[2rem] overflow-hidden relative shadow-lg border border-gray-100 bg-white group"
  >
    <!-- Gambar Background dengan Hover Zoom -->
    <img
      src="assets/uploads/pricing/threads-block.webp"
      alt="Threads @subscrr"
      class="w-full h-auto object-cover block select-none transition-transform duration-500 ease-in-out group-hover:scale-105"
    />

    <!-- Overlay Teks -->
    <div
      class="absolute bottom-6 left-6 md:bottom-20 md:left-12 flex items-center gap-5 md:gap-7"
    >
      <!-- Logo Threads (Menggunakan File PNG) -->
      <img
        src="assets/uploads/pricing/threads-icon.png"
        alt="Threads Icon"
        class="w-16 h-16 md:w-25 md:h-25 object-contain drop-shadow-md"
      />

      <!-- Teks -->
      <div class="text-white drop-shadow-md">
        <h2 class="text-5xl md:text-8xl font-extrabold tracking-tight leading-none">
          Threads
        </h2>
        <p class="text-3xl md:text-5xl font-bold mt-1">@subscrr</p>
      </div>
    </div>
  </a>
</section>

<!-- ================= SCRIPTS (PRICING + FAQ + SCROLL ANIMATION) ================= -->
<script>
  // --- Pricing Toggle ---
  const monthlyBtn = document.getElementById('btn-monthly');
  const yearlyBtn = document.getElementById('btn-yearly');
  const yearlyDiscount = document.getElementById('yearly-discount');
  const toggleIndicator = document.getElementById('toggle-indicator');

  const premiumPrice = document.getElementById('premium-price');
  const premiumSuffix = document.getElementById('premium-suffix');
  const premiumSubtitle = document.getElementById('premium-subtitle');

  let animationFrame = null;
  let isMonthly = true;

  const animatePrice = (from, to, duration = 200) => {
    if (animationFrame) cancelAnimationFrame(animationFrame);
    const start = performance.now();
    const step = (now) => {
      const progress = Math.min((now - start) / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 2);
      const current = from + (to - from) * eased;
      premiumPrice.textContent = `$${current.toFixed(2)}`;
      if (progress < 1) {
        animationFrame = requestAnimationFrame(step);
      } else {
        animationFrame = null;
      }
    };
    animationFrame = requestAnimationFrame(step);
  };

  const monthlyView = () => {
    toggleIndicator.style.transform = 'translateX(0%)';
    monthlyBtn.classList.add('text-white');
    monthlyBtn.classList.remove('text-gray-600');
    yearlyBtn.classList.remove('text-white');
    yearlyBtn.classList.add('text-gray-600');
    yearlyDiscount.classList.remove('text-white');
    yearlyDiscount.classList.add('text-[#f24e1e]');

    if (!isMonthly) {
      animatePrice(29.99, 7.99);
      premiumSubtitle.style.opacity = '0';
      setTimeout(() => {
        premiumSubtitle.textContent = 'Billed monthly. Cancel anytime.';
        premiumSubtitle.style.opacity = '1';
      }, 120);
      premiumSuffix.textContent = '/mo';
      isMonthly = true;
    }
  };

  const yearlyView = () => {
    toggleIndicator.style.transform = 'translateX(100%)';
    yearlyBtn.classList.add('text-white');
    yearlyBtn.classList.remove('text-gray-600');
    monthlyBtn.classList.remove('text-white');
    monthlyBtn.classList.add('text-gray-600');
    yearlyDiscount.classList.remove('text-[#f24e1e]');
    yearlyDiscount.classList.add('text-white');

    if (isMonthly) {
      animatePrice(7.99, 29.99);
      premiumSubtitle.style.opacity = '0';
      setTimeout(() => {
        premiumSubtitle.textContent =
          '$2.50 a month, billed yearly. Cancel anytime.';
        premiumSubtitle.style.opacity = '1';
      }, 120);
      premiumSuffix.textContent = '/yr';
      isMonthly = false;
    }
  };

  monthlyBtn.addEventListener('click', monthlyView);
  yearlyBtn.addEventListener('click', yearlyView);

  // Inisialisasi pricing
  monthlyView();

  // ===== MAGNETIC EFFECT (HALUS) untuk tombol pricing =====
  const magneticButtons = document.querySelectorAll('.magnetic');
  const maxDisplacement = 40;
  const smoothing = 1;

  magneticButtons.forEach((btn) => {
    let rafId = null;
    let currentX = 0;
    let currentY = 0;
    let targetX = 0;
    let targetY = 0;
    let isHovering = false;

    function animate() {
      currentX += (targetX - currentX) * smoothing;
      currentY += (targetY - currentY) * smoothing;

      btn.style.transform = `translate3d(${currentX}px, ${currentY}px, 0)`;

      if (isHovering || Math.abs(currentX - targetX) > 0.1 || Math.abs(currentY - targetY) > 0.1) {
        rafId = requestAnimationFrame(animate);
      } else {
        rafId = null;
      }
    }

    btn.addEventListener('mousemove', (e) => {
      const rect = btn.getBoundingClientRect();
      const mouseX = e.clientX - rect.left - rect.width /5;
      const mouseY = e.clientY - rect.top - rect.height /5;

      targetX = (mouseX / rect.width) * maxDisplacement;
      targetY = (mouseY / rect.height) * maxDisplacement;

      isHovering = true;
      if (!rafId) {
        rafId = requestAnimationFrame(animate);
      }
    });

    btn.addEventListener('mouseleave', () => {
      isHovering = false;
      targetX = 0;
      targetY = 0;
      if (!rafId) {
        rafId = requestAnimationFrame(animate);
      }
    });
  });

  // ================= FAQ ACCORDION =================
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach((item) => {
    const question = item.querySelector('.faq-question');
    const answer = item.querySelector('.faq-answer');
    const icon = item.querySelector('.faq-icon');

    question.addEventListener('click', () => {
      const isOpen = item.classList.contains('open');

      // Tutup semua item yang terbuka
      document.querySelectorAll('.faq-item.open').forEach((openItem) => {
        openItem.classList.remove('open');
        openItem.querySelector('.faq-answer').style.maxHeight = '0px';
        openItem.querySelector('.faq-icon').textContent = '+';
      });

      // Buka item yang diklik jika sebelumnya tertutup
      if (!isOpen) {
        item.classList.add('open');
        answer.style.maxHeight = answer.scrollHeight + 'px';
        icon.textContent = '−';
      }
    });
  });

  // ================= SCROLL-TRIGGERED ANIMATIONS =================
  const animatedElements = document.querySelectorAll('[data-animate]');

  // Buat Intersection Observer
  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate-visible');
          // Hentikan observasi setelah animasi dipicu sekali
          obs.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.15, // 15% elemen terlihat
      rootMargin: '0px 0px -40px 0px', // sedikit offset bawah
    }
  );

  // Amati semua elemen dengan atribut data-animate
  animatedElements.forEach((el) => {
    observer.observe(el);
  });

  // Fallback: jika observer tidak didukung, tampilkan semua elemen
  if (!('IntersectionObserver' in window)) {
    animatedElements.forEach((el) => {
      el.classList.add('animate-visible');
    });
  }

  // ================= PREMIUM CARD SCALE SETUP =================
  // Pastikan premium card mempertahankan scale setelah animasi selesai
  const premiumCard = document.querySelector(
    '[data-animate="slide-right-premium"]'
  );
  if (premiumCard) {
    premiumCard.addEventListener('transitionend', (e) => {
      if (
        e.propertyName === 'transform' &&
        premiumCard.classList.contains('animate-visible')
      ) {
        // Pertahankan scale dengan inline style sebagai fallback
        premiumCard.style.transform = 'scale(1.03)';
      }
    });
  }
</script>