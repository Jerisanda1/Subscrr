<section class="max-w-6xl mx-auto px-6 lg:px-8 pb-24">

    <!-- HERO SECTION -->
    <div class="text-center pt-20 pb-16">
        <span class="text-orange-600 dark:text-orange-500 font-bold text-xs tracking-[0.2em] uppercase">Subscrr Help Center</span>
        <h1 class="mt-4 text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-gray-900 dark:text-white">How can we help?</h1>
        <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">Search the guides, or pick a category below.</p>

        <!-- Search Bar (Dengan fitur AJAX) -->
        <div class="relative mt-10 max-w-2xl mx-auto">
            <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </div>
            <input type="text" id="search-input" class="block w-full pl-13 pr-14 py-4 border border-gray-200 dark:border-gray-700 rounded-2xl bg-white dark:bg-[#161616] text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500/50 shadow-md" placeholder="How can we help?">
            <div class="absolute inset-y-0 right-0 pr-5 flex items-center pointer-events-none">
                <span class="text-gray-400 border border-gray-300 dark:border-gray-600 rounded px-1.5 py-0.5 text-xs">/</span>
            </div>

            <!-- Dropdown Hasil Pencarian -->
            <div id="search-results" class="hidden absolute top-full left-0 right-0 mt-2 bg-white dark:bg-[#161616] border border-gray-200 dark:border-gray-800 rounded-3xl shadow-xl overflow-hidden z-50 max-h-96 overflow-y-auto"></div>
        </div>
    </div>

    <!-- KARTU UTAMA (Baris Pertama - 2 Kolom) -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <?php foreach ($main_cards as $card): ?>
        <a href="<?php echo $card['link']; ?>" class="group p-6 rounded-3xl bg-white dark:bg-[#161616] border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md hover:-translate-y-1 hover:border-orange-500 transition-all duration-300">
            <div class="flex items-start gap-4">
                <div class="p-3 rounded-2xl bg-orange-100/50 dark:bg-orange-900/20 text-orange-600 dark:text-orange-500">
                    <?php echo $card['icon']; ?>
                </div>
                <div class="flex-1">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white"><?php echo $card['title']; ?></h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mt-3"><?php echo $card['description']; ?></p>
                </div>
            </div>
            <span class="text-xs text-gray-500 dark:text-gray-500 mt-5 block text-right"><?php echo $card['count']; ?></span>
        </a>
        <?php endforeach; ?>
    </div>

    <!-- LABEL KATEGORI -->
    <div class="flex items-center mb-6">
        <h4 class="text-sm font-semibold text-gray-800 dark:text-gray-200 tracking-widest uppercase">Categories</h4>
    </div>

    <!-- KARTU KATEGORI (Baris Kedua & Ketiga - 3 Kolom) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($category_cards as $card): ?>
        <a href="<?php echo $card['link']; ?>" class="group p-6 rounded-3xl bg-white dark:bg-[#161616] border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md hover:-translate-y-1 hover:border-orange-500 transition-all duration-300 block">
            <div class="flex items-start gap-4">
                <div class="p-3 rounded-2xl bg-orange-100/50 dark:bg-orange-900/20 text-orange-600 dark:text-orange-500">
                    <?php echo $card['icon']; ?>
                </div>
                <div class="flex-1">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white"><?php echo $card['title']; ?></h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mt-3"><?php echo $card['description']; ?></p>
                </div>
            </div>
            <span class="text-xs text-gray-500 dark:text-gray-500 mt-5 block text-right"><?php echo $card['count']; ?></span>
        </a>
        <?php endforeach; ?>
    </div>

    <!-- ====== SECTION BARU: STILL NEED A HAND ====== -->
    <div class="mt-24">
        <div class="bg-white dark:bg-[#161616] rounded-[2.5rem] border border-gray-100 dark:border-gray-800 shadow-sm px-6 sm:px-12 py-14 sm:py-16 text-center">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                Still need a hand?
            </h2>
            <p class="mt-6 text-lg text-gray-600 dark:text-gray-400 leading-relaxed max-w-2xl mx-auto">
                Write to us and a human answers, usually within one business day.<br>
                Your iOS version and a screenshot solve most cases on the first reply.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                <!-- Link ke Halaman Contact Us -->
                <a href="<?= site_url('Help_center/contact') ?>" class="px-8 py-4 rounded-full bg-red-500 hover:bg-red-600 text-white font-semibold text-sm transition-colors duration-300 shadow-md">
                    Contact us
                </a>
                <!-- Link ke Telegram Channel (Eksternal, buka di tab baru) -->
                <a href="https://t.me/subscrr_app" target="_blank" class="px-8 py-4 rounded-full bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 text-gray-900 dark:text-white font-semibold text-sm transition-colors duration-300">
                    Telegram channel
                </a>
            </div>
        </div>
    </div>

</section>

<!-- JAVASCRIPT UNTUK SEARCH DROPDOWN -->
<script>
    const searchInput = document.getElementById('search-input');
    const resultsBox = document.getElementById('search-results');
    let debounceTimer;

    searchInput.addEventListener('input', function() {
        clearTimeout(debounceTimer);
        const query = this.value.trim();

        if (query.length < 2) {
            resultsBox.classList.add('hidden');
            resultsBox.innerHTML = '';
            return;
        }

        debounceTimer = setTimeout(() => {
            fetch(`<?php echo base_url('Help_center/search'); ?>?q=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(data => {
                    resultsBox.innerHTML = '';
                    if (data.length === 0) {
                        resultsBox.innerHTML = '<div class="p-6 text-gray-500">No results found.</div>';
                    } else {
                        data.forEach(item => {
                            const a = document.createElement('a');
                            a.href = `<?php echo base_url('Help_center/article/'); ?>${item.slug}`;
                            a.className = 'block p-4 hover:bg-orange-50 dark:hover:bg-[#2d1f1a] transition-colors border-b border-gray-100 dark:border-gray-800 last:border-b-0';
                            
                            // Highlight kata yang dicari pada judul
                            const regex = new RegExp(`(${query})`, 'gi');
                            const highlightedTitle = item.title.replace(regex, '<mark class="bg-orange-100 dark:bg-orange-900/30 px-1 rounded">$1</mark>');
                            
                            // Highlight kata yang dicari pada deskripsi (isi teks)
                            const highlightedDesc = item.desc.replace(regex, '<mark class="bg-orange-100 dark:bg-orange-900/30 px-1 rounded">$1</mark>');

                            a.innerHTML = `
                                <span class="block text-xs font-bold text-orange-600 dark:text-orange-400 uppercase tracking-wider mb-1">${item.category}</span>
                                <span class="block text-lg font-bold text-gray-900 dark:text-white">${highlightedTitle}</span>
                                <span class="block text-sm text-gray-600 dark:text-gray-400 mt-1 truncate">${highlightedDesc}</span>
                            `;
                            resultsBox.appendChild(a);
                        });
                    }
                    resultsBox.classList.remove('hidden');
                })
                .catch(error => console.error('Error:', error));
        }, 300); // Delay 300ms agar tidak terlalu sering request
    });

    // Sembunyikan dropdown saat klik di luar search bar
    document.addEventListener('click', function(event) {
        if (!searchInput.contains(event.target) && !resultsBox.contains(event.target)) {
            resultsBox.classList.add('hidden');
        }
    });
</script>