<section id="pricing" class="min-h-screen flex items-center justify-center bg-[#f5f4ee] font-sans p-6">
    <div class="max-w-4xl w-full text-center">
        
        <!-- Header -->
        <p class="text-blue-700 font-bold tracking-widest text-sm mb-4">PRICING</p>
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight text-gray-900 leading-tight">
            Free to start.<br>Premium when you grow.
        </h1>

        <!-- Toggle Section -->
        <div class="mt-10 inline-flex bg-white/60 backdrop-blur-md   rounded-full p-1 relative shadow-md">
            <button id="btn-monthly" class="px-8 py-3 rounded-full bg-[#f24e1e] text-white font-semibold transition-all duration-300">Monthly</button>
            <button id="btn-yearly" class="px-8 py-3 rounded-full text-gray-600 font-semibold transition-all duration-300">Yearly <span id="yearly-discount" class="text-[#f24e1e] text-sm font-bold ml-1">− 69%</span></button>
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

                <button class="mt-10 w-full py-4 border border-gray-300 rounded-full font-semibold text-gray-900 hover:bg-gray-50 transition">Start free</button>
            </div>

            <!-- Premium Card -->
          <div class="bg-white rounded-[2rem] p-10 shadow-xl relative flex flex-col"   style="transform: scale(1.03); border: 1px solid #f24e1e;">
                <!-- Badge -->
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

                <button class="mt-10 w-full py-4 bg-[#f24e1e] text-white rounded-full font-semibold hover:bg-[#d63e15] transition shadow-md">Go Premium</button>
            </div>

        </div>
    </div>
</section>

<script>
    // JavaScript untuk mengaktifkan fungsi toggle Monthly dan Yearly
    const monthlyBtn = document.getElementById('btn-monthly');
    const yearlyBtn = document.getElementById('btn-yearly');
    const yearlyDiscount = document.getElementById('yearly-discount');
    
    const premiumPrice = document.getElementById('premium-price');
    const premiumSuffix = document.getElementById('premium-suffix');
    const premiumSubtitle = document.getElementById('premium-subtitle');

    const monthlyView = () => {
        // Update style toggle
        monthlyBtn.classList.add('bg-[#f24e1e]', 'text-white');
        monthlyBtn.classList.remove('text-gray-500');
        yearlyBtn.classList.remove('bg-[#f24e1e]', 'text-white');
        yearlyBtn.classList.add('text-gray-500');
        yearlyDiscount.classList.remove('text-white');
        yearlyDiscount.classList.add('text-[#f24e1e]');
        
        // Update konten harga
        premiumPrice.textContent = '$7.99';
        premiumSuffix.textContent = '/mo';
        premiumSubtitle.textContent = 'Billed monthly. Cancel anytime.';
    };

    const yearlyView = () => {
        // Update style toggle
        yearlyBtn.classList.add('bg-[#f24e1e]', 'text-white');
        yearlyBtn.classList.remove('text-gray-500');
        monthlyBtn.classList.remove('bg-[#f24e1e]', 'text-white');
        monthlyBtn.classList.add('text-gray-500');
        yearlyDiscount.classList.remove('text-[#f24e1e]');
        yearlyDiscount.classList.add('text-white');

        // Update konten harga (menggunakan perhitungan diskon 69%: 7.99 * 12 * 0.31 ≈ 29.72)
        premiumPrice.textContent = '$29.99';
        premiumSuffix.textContent = '/yr';
        premiumSubtitle.textContent = '$2.50 a month, billed yearly. Cancel anytime.';
    };

    monthlyBtn.addEventListener('click', monthlyView);
    yearlyBtn.addEventListener('click', yearlyView);
</script>