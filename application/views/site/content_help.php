<section class="max-w-6xl mx-auto px-6 lg:px-8 pb-24">
    
    <!-- HERO SECTION -->
    <div class="text-center pt-20 pb-16">
        <span class="text-orange-600 dark:text-orange-500 font-bold text-xs tracking-[0.2em] uppercase">Subscrr Help Center</span>
        <h1 class="mt-4 text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-gray-900 dark:text-white">How can we help?</h1>
        <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">Search the guides, or pick a category below.</p>

        <!-- Search Bar -->
        <div class="relative mt-10 max-w-2xl mx-auto">
            <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </div>
            <input type="text" class="block w-full pl-13 pr-14 py-4 border border-gray-200 dark:border-gray-700 rounded-2xl bg-white dark:bg-[#161616] text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500/50 shadow-md" placeholder="How can we help?">
            <div class="absolute inset-y-0 right-0 pr-5 flex items-center pointer-events-none">
                <span class="text-gray-400 border border-gray-300 dark:border-gray-600 rounded px-1.5 py-0.5 text-xs">/</span>
            </div>
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
</section>