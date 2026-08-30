<style>
  .magnetic {
    will-change: transform;
    transition: transform 0.3s ease-out;
  }
  .magnetic:hover {
    transition: transform 0s;
  }
  .magnetic {
    text-decoration: none;
  }

  #premium-price {
    transition: opacity 0.3s ease, transform 0.3s ease;
  }
  #premium-subtitle {
    transition: opacity 0.3s ease, transform 0.3s ease;
  }
</style>

<section id="pricing" class="min-h-screen flex items-center justify-center bg-[#f5f4ee] font-sans p-6">
    <div class="max-w-4xl w-full text-center">
        <p class="text-blue-700 font-bold tracking-widest text-sm mb-4">PRICING</p>
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight text-gray-900 leading-tight">
            Free to start.<br>Premium when you grow.
        </h1>

        <!-- Toggle Section -->
        <div class="mt-10 inline-flex bg-white/60 backdrop-blur-md rounded-full p-1 relative shadow-md">
            <!-- Indikator dengan inline style agar pasti terlihat -->
            <div id="toggle-indicator" 
                 style="position:absolute; top:4px; bottom:4px; left:4px; width:calc(50% - 4px); background-color:#f24e1e; border-radius:9999px; transition: transform 0.3s ease-in-out;"></div>
            <button id="btn-monthly" class="relative z-10 flex-1 px-8 py-3 rounded-full font-semibold transition-colors duration-300 text-white" style="background: transparent;">
                Monthly
            </button>
            <button id="btn-yearly" class="relative z-10 flex-1 px-8 py-3 rounded-full font-semibold transition-colors duration-300 text-gray-600" style="background: transparent;">
                Yearly <span id="yearly-discount" class="text-sm font-bold ml-1">− 69%</span>
            </button>
        </div>

        <!-- Cards Grid -->
        <div class="mt-16 grid md:grid-cols-2 gap-8 text-left">

            <!-- Free Card -->
            <div class="bg-white rounded-[2rem] p-10 shadow-sm border border-gray-100 flex flex-col">
                <div class="flex justify-between items-start mb-2">
                    <h2 class="text-2xl font-bold text-gray-900">Free</h2>
                    <div class="text-5xl font-extrabold text-gray-900">$0</div>
                </div>
                <p class="text-gray-500">Enough to see the whole picture.</p>
                <ul class="mt-8 space-y-4 text-gray-800 flex-grow">
                    <li class="flex gap-3 items-center"><span class="text-[#f24e1e] font-bold">➜ </span> Up to 6 subscriptions</li>
                    <li class="flex gap-3 items-center"><span class="text-[#f24e1e] font-bold">➜ </span> Per day / month / year breakdowns</li>
                    <li class="flex gap-3 items-center"><span class="text-[#f24e1e] font-bold">➜ </span> Renewal reminders</li>
                    <li class="flex gap-3 items-center"><span class="text-[#f24e1e] font-bold">➜ </span> Custom icons & colours</li>
                    <li class="flex gap-3 items-center"><span class="text-[#f24e1e] font-bold">➜ </span> iCloud sync & privacy</li>
                </ul>
                <a href="https://apps.apple.com/us/app/subscrr-take-back-control/id6757530448" target="_blank" rel="noopener noreferrer" class="magnetic mt-10 w-full py-4 border border-gray-300 rounded-full font-semibold text-gray-900 hover:bg-gray-50 transition-colors text-center">
                    Start free
                </a>
            </div>

            <!-- Premium Card -->
            <div class="bg-white rounded-[2rem] p-10 shadow-xl relative flex flex-col" style="transform: scale(1.03); border: 1px solid #f24e1e;">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-[#f24e1e] text-white text-xs font-bold px-4 py-1.5 rounded-full shadow-md">Most popular</div>
                <div class="flex justify-between items-start mb-2">
                    <h2 class="text-2xl font-bold text-gray-900">Premium</h2>
                    <div class="text-5xl font-extrabold text-gray-900">
                        <span id="premium-price">$7.99</span> <span id="premium-suffix" class="text-lg font-medium text-gray-500">/mo</span>
                    </div>
                </div>
                <p id="premium-subtitle" class="text-gray-500">Billed monthly. Cancel anytime.</p>
                <ul class="mt-8 space-y-4 text-gray-800 flex-grow">
                    <li class="flex gap-3 items-center"><span class="text-[#f24e1e] font-bold">➜ </span> Unlimited subscriptions</li>
                    <li class="flex gap-3 items-center"><span class="text-[#f24e1e] font-bold">➜ </span> AI Spend: scan receipts & statements</li>
                    <li class="flex gap-3 items-center"><span class="text-[#f24e1e] font-bold">➜ </span> Widgets for Home and Lock Screen</li>
                    <li class="flex gap-3 items-center"><span class="text-[#f24e1e] font-bold">➜ </span> Personal calculation categories</li>
                    <li class="flex gap-3 items-center"><span class="text-[#f24e1e] font-bold">➜ </span> Everything in Free</li>
                    <li class="flex gap-3 items-center"><span class="text-[#f24e1e] font-bold">➜ </span> Support an app with zero ads</li>
                </ul>
                <a href="https://apps.apple.com/us/app/subscrr-take-back-control/id6757530448" target="_blank" rel="noopener noreferrer" class="magnetic mt-10 w-full py-4 bg-[#f24e1e] text-white rounded-full font-semibold hover:bg-[#d63e15] transition-colors shadow-md text-center">
                    Go Premium
                </a>
            </div>

        </div>
    </div>
</section>

<script>
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
                premiumSubtitle.textContent = '$2.50 a month, billed yearly. Cancel anytime.';
                premiumSubtitle.style.opacity = '1';
            }, 120);
            premiumSuffix.textContent = '/yr';
            isMonthly = false;
        }
    };

    monthlyBtn.addEventListener('click', monthlyView);
    yearlyBtn.addEventListener('click', yearlyView);

    // Inisialisasi
    monthlyView();

    // Efek magnetik
    const magneticButtons = document.querySelectorAll('.magnetic');
    const maxDisplacement = 12;
    magneticButtons.forEach(btn => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const mouseX = e.clientX - rect.left - rect.width / 2;
            const mouseY = e.clientY - rect.top - rect.height / 2;
            const moveX = (mouseX / rect.width) * maxDisplacement;
            const moveY = (mouseY / rect.height) * maxDisplacement;
            btn.style.transition = 'transform 0s';
            btn.style.transform = `translate(${moveX}px, ${moveY}px)`;
        });
        btn.addEventListener('mouseleave', () => {
            btn.style.transition = 'transform 0.3s ease-out';
            btn.style.transform = 'translate(0, 0)';
        });
    });
</script>