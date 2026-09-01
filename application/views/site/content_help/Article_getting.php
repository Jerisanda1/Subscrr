<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> - Subscrr</title>
    <link rel="stylesheet" href="<?= base_url('assets/output.css') ?>">
    
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

    <!-- KONTEN ARTIKEL -->
    <section class="max-w-6xl mx-auto px-6 lg:px-8 pb-24">
        
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-1 text-sm text-gray-500 mb-8 pt-10">
            <a href="<?php echo base_url('Help_center'); ?>" class="hover:text-gray-700 dark:hover:text-gray-300">Home</a>
            <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <a href="<?php echo base_url('Help_center/getting_started'); ?>" class="hover:text-gray-700 dark:hover:text-gray-300">Getting Started</a>
            <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="text-gray-900 dark:text-gray-100 font-medium"><?php echo $title; ?></span>
        </nav>

        <!-- Judul & Deskripsi -->
        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white mb-4"><?php echo $title; ?></h1>
        <p class="text-lg text-gray-600 dark:text-gray-400 mb-6"><?php echo $description; ?></p>

        <!-- Konten Artikel (manual per slug) -->
        <?php if ($slug === 'add-your-first-subscription'): ?>

            <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-12">Everything in Subscrr starts with one subscription. Adding it takes about fifteen seconds.</p>

            <!-- Section: Add it -->
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Add it</h2>
            <ol class="list-decimal pl-5 space-y-2 text-gray-700 dark:text-gray-300 leading-relaxed mb-12">
                <li>Open the <strong class="font-semibold text-gray-900 dark:text-white">Subscriptions</strong> tab and tap the plus button.</li>
                <li>Start typing the name. Subscrr suggests popular services with their logos — pick one and the icon and category are filled in for you. If your service is not in the list, keep typing and create it as a custom entry.</li>
                <li>Enter the <a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">price</a> exactly as it is charged to you, in the currency it is charged in.</li>
                <li>Choose the <a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">billing period</a>: weekly, monthly, yearly, or a <a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">custom interval</a>.</li>
                <li>Set the <a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">date of the next charge</a>. This is what reminders and all forecasts are built on, so it is worth getting right.</li>
                <li>Save.</li>
            </ol>

            <!-- Section: What happens next -->
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What happens next</h2>
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
                The subscription appears in the list with its real cost, and the dashboard total updates immediately. If reminders are on, Subscrr schedules a notification for a few days before that next charge.
            </p>

            <!-- Callout / Info Box -->
            <div class="bg-[#fdf1ec] dark:bg-[#2d1f1a] border-l-4 border-[#d64541] dark:border-orange-500 p-5 rounded-r-md mb-12 text-gray-800 dark:text-gray-200 leading-relaxed text-[15px]">
                Not sure of the exact renewal date? Open iOS Settings, tap your name, then <strong class="font-semibold">Subscriptions</strong>, and Apple shows the renewal date for anything billed through the App Store.
            </div>

            <!-- Section: Next steps -->
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Next steps</h2>
            <ul class="list-disc pl-5 space-y-2 text-gray-700 dark:text-gray-300 leading-relaxed mb-16">
                <li><a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Import subscriptions you already pay for</a></li>
                <li><a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Turn on renewal reminders</a></li>
                <li><a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Choose your display currency</a></li>
                <li><a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">A quick tour of the app</a>, if you want the whole picture first</li>
                <li><a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Edit or delete a subscription</a>, for when a price changes</li>
            </ul>

        <?php elseif ($slug === 'import-subscriptions-you-already-pay-for'): ?>
            <!-- Konten untuk artikel import subscriptions -->
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">Konten untuk import subscriptions...</p>
        <?php elseif ($slug === 'choose-your-display-currency'): ?>
            <!-- Konten untuk choose currency -->
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">Konten untuk choose display currency...</p>
        <?php elseif ($slug === 'turn-on-renewal-reminders'): ?>
            <!-- Konten untuk turn on renewal reminders -->
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">Konten untuk turn on renewal reminders...</p>
        <?php elseif ($slug === 'a-quick-tour-of-the-app'): ?>
            <!-- Konten untuk quick tour -->
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">Konten untuk a quick tour...</p>
        <?php elseif ($slug === 'change-language-and-appearance'): ?>
            <!-- Konten untuk change language -->
            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">Konten untuk change language...</p>
        <?php endif; ?>

        <!-- Did this answer your question -->
        <div class="border-t border-gray-200 dark:border-gray-800 pt-8 pb-16">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-6">Did this answer your question?</h3>
            <div class="flex flex-wrap gap-4">
                <button class="bg-[#e63329] hover:bg-[#d12b21] text-white font-medium py-3 px-8 rounded-full transition-colors">
                    No, I need help
                </button>
                <a href="<?php echo base_url('Help_center/getting_started'); ?>" class="bg-white dark:bg-[#161616] hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-900 dark:text-white font-medium py-3 px-8 rounded-full border border-gray-300 dark:border-gray-700 transition-colors inline-block">
                    Back to Getting Started
                </a>
            </div>
        </div>

        <!-- More in Getting Started -->
        <div>
            <h3 class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-6">More in Getting Started</h3>
            <ul class="divide-y divide-gray-200 dark:divide-gray-800 border-b border-gray-200 dark:border-gray-800">
                <?php foreach ($all_articles as $article_item): ?>
                    <?php if ($article_item['slug'] !== $slug): // Jangan tampilkan artikel yang sedang dibuka ?>
                        <li>
                            <a href="<?php echo base_url('Help_center/article/' . $article_item['slug']); ?>" 
                               class="group flex justify-between items-center py-4 px-3 -mx-3 text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg transition-colors duration-200">
                                <span class="transition-transform duration-200 group-hover:translate-x-1">
                                    <?php echo $article_item['title']; ?>
                                </span>
                                <span class="text-gray-400 group-hover:text-gray-600 dark:group-hover:text-gray-300">›</span>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- Script Toggle Dark Mode -->
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