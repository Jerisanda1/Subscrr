<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Subscrr Help Center'; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/output.css') ?>">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('assets/uploads/icon/icon_Subscrr.png') ?>">
    <!-- Anti-Flicker Script -->
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>
<body class="bg-[#FAF9F6] dark:bg-[#0a0a0a] transition-colors duration-300 text-gray-900 font-sans min-h-screen">
    
    <?php $this->load->view('layout/nav_help.php'); ?>

    <section class="max-w-6xl mx-auto px-6 lg:px-8 pb-24">
        
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-1 text-sm text-gray-500 mb-8 pt-10">
            <a href="<?php echo base_url('Help_center'); ?>" class="hover:text-orange-500">Home</a>
            <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="text-gray-900 font-medium dark:text-gray-100 font-medium"><?php echo $title; ?></span>
        </nav>

        <!-- Header -->
        <div class="flex items-start gap-4 mb-10">
            <div class="bg-orange-100 dark:bg-orange-900/30 rounded-xl p-4 flex-shrink-0 text-orange-600 dark:text-orange-400">
                <!-- Icon langsung dari controller (sudah berupa SVG lengkap) -->
                <?php echo $icon; ?>
            </div>
            <div>
                <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white"><?php echo $title; ?></h1>
                <p class="text-gray-500 dark:text-gray-400 mt-2"><?php echo $description; ?></p>
                <p class="text-gray-400 dark:text-gray-500 text-sm mt-2"><?php echo $count; ?></p>
            </div>
        </div>

        <!-- Search Bar (Dengan AJAX Dropdown & Fallback ke halaman hasil) -->
        <form action="<?= base_url('Help_center/search_results') ?>" method="get" class="relative max-w-3xl mb-10">
            <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="text" id="search-input" name="q" class="block w-full pl-12 pr-12 py-4 rounded-full border border-gray-200 dark:border-gray-700 bg-white dark:bg-[#161616] shadow-sm text-gray-700 dark:text-gray-200 placeholder-gray-400 dark:placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-200 dark:focus:ring-orange-900 focus:border-orange-300" placeholder="How can we help?">
            <div class="absolute inset-y-0 right-0 pr-5 flex items-center">
                <button type="submit" class="text-gray-400 text-sm border border-gray-200 dark:border-gray-700 rounded px-2 py-1 hover:bg-gray-100 dark:hover:bg-gray-800">/</button>
            </div>

            <!-- Dropdown Hasil Pencarian AJAX -->
            <div id="search-results" class="hidden absolute top-full left-0 right-0 mt-2 bg-white dark:bg-[#161616] border border-gray-200 dark:border-gray-800 rounded-3xl shadow-xl overflow-hidden z-50 max-h-96 overflow-y-auto"></div>
        </form>

        <!-- Daftar Artikel -->
        <div class="divide-y divide-gray-200 dark:divide-gray-800 border-t border-gray-200 dark:border-gray-800">
            <?php foreach ($items as $item): ?>
            <a href="<?php echo base_url('Help_center/article/' . $item['slug']); ?>" 
               class="group py-6 flex items-center justify-between gap-4 hover:bg-gray-100 dark:hover:bg-gray-800/50 transition-colors duration-200 rounded-lg px-4 -mx-4">
                <div class="flex-1 transform transition-transform duration-200 group-hover:translate-x-2">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-gray-100 group-hover:text-black dark:group-hover:text-white"><?php echo $item['title']; ?></h3>
                    <p class="text-gray-500 dark:text-gray-400 mt-1"><?php echo $item['desc']; ?></p>
                </div>
                <svg class="w-5 h-5 text-gray-400 group-hover:text-gray-600 dark:group-hover:text-gray-300 flex-shrink-0 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
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
        <!-- ====== END SECTION ====== -->
    </section>
    
    <?php $this->load->view('layout/foot_help.php');?>

    <!-- Script Search AJAX untuk Halaman Kategori -->
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
            }, 300);
        });

        // Sembunyikan dropdown saat klik di luar search bar
        document.addEventListener('click', function(event) {
            if (!searchInput.contains(event.target) && !resultsBox.contains(event.target)) {
                resultsBox.classList.add('hidden');
            }
        });
    </script>

    <script>
        const themeToggleBtn = document.getElementById('theme-toggle');
        if (themeToggleBtn) {
            themeToggleBtn.addEventListener('click', function() {
                document.documentElement.classList.toggle('dark');
                if (document.documentElement.classList.contains('dark')) {
                    localStorage.setItem('theme', 'dark');
                } else {
                    localStorage.setItem('theme', 'light');
                }
            });
        }
    </script>
</body>
</html>