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
            <a href="<?php echo base_url('Help_center/privacy'); ?>" class="hover:text-gray-700 dark:hover:text-gray-300">Privacy &amp; Your Data</a>
            <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="text-gray-900 dark:text-gray-100 font-medium"><?php echo $title; ?></span>
        </nav>

        <!-- Judul & Deskripsi -->
        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white mb-4"><?php echo $title; ?></h1>
        <p class="text-lg text-gray-600 dark:text-gray-400 mb-8 font-semibold"><?php echo $description; ?></p>

        <!-- Konten Artikel (manual per slug) -->
        <?php if ($slug === 'where-your-data-lives'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Subscrr stores your data in two places, both of which belong to you:</p>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">On your device.</strong> Subscriptions, calculator entries and scan history are stored locally.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">In your private iCloud container</strong>, if sync is enabled. This is the Apple mechanism where the data is tied to your Apple Account and the developer cannot read it.</li>
            </ul>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">There is <strong class="font-semibold text-gray-900 dark:text-white">no Subscrr server holding your subscriptions</strong>. There is no database of users with lists of what they pay for, because there is no account system at all — see <a href="<?php echo base_url('Help_center/article/there-is-no-account-to-create'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">No account needed</a>.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What does leave the device</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Two things, both narrow:</p>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">Receipt images you choose to scan</strong>, sent for recognition only and not stored. See <a href="<?php echo base_url('Help_center/article/what-happens-to-scanned-receipts'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">What happens to scanned receipts</a>.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Anonymous product analytics and advertising measurement.</strong> See <a href="<?php echo base_url('Help_center/article/analytics-and-advertising'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Analytics and advertising</a>.</li>
            </ul>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Want it all gone? <a href="<?php echo base_url('Help_center/article/delete-everything'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Delete everything</a> covers the local copy, the iCloud copy and the histories.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">The formal version of all this is the <a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Privacy Policy</a>.</p>

        <?php elseif ($slug === 'what-happens-to-scanned-receipts'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">When you scan a receipt, the image is sent to a recognition service through our own proxy, which returns the total, the line items and the suggested categories.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">What that means in practice:</p>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">The image is not stored on our servers.</strong> It is processed and discarded.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">The proxy does not log the contents</strong> of what you scanned.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Your identity is not attached.</strong> There is no account, so there is nothing to attach it to.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Receipts are never used for advertising</strong>, profiling or resale.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">The result comes back to your phone</strong>, where the scan and its screenshot live locally for <strong class="font-semibold text-gray-900 dark:text-white">30 days</strong> before rolling off. See <a href="<?php echo base_url('Help_center/article/browse-your-scan-history'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Browse your scan history</a>.</li>
            </ul>

            <div class="bg-[#fdf1ec] dark:bg-[#2d1f1a] border-l-4 border-[#d64541] dark:border-orange-500 p-5 rounded-r-md mb-12 text-lg text-gray-800 dark:text-gray-200 leading-relaxed text-[15px]">
                If a receipt contains something you would rather not send anywhere at all, do not scan it. Enter the amount manually in the calculator instead — the same number, nothing transmitted.
            </div>

        <?php elseif ($slug === 'analytics-and-advertising'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Two things are measured, and neither of them involves your subscriptions.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4"><strong class="font-semibold text-gray-900 dark:text-white">Product analytics.</strong> Anonymous events about how the app is used — which screens are opened, whether a flow was completed. This is how a solo developer finds out that a screen confuses people. It does not include the names, prices or contents of what you track.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4"><strong class="font-semibold text-gray-900 dark:text-white">Advertising measurement.</strong> Whether an install came from an ad. This is what iOS asks you about with the "Allow app to track" prompt.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Turning it off</h2>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>Answer <strong class="font-semibold text-gray-900 dark:text-white">Ask App Not to Track</strong> at the prompt, or change it later in <strong class="font-semibold text-gray-900 dark:text-white">iOS Settings → Privacy &amp; Security → Tracking</strong>.</li>
                <li>Turning it off does not limit any feature of the app.</li>
            </ul>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">The exact list of what is collected is in the <a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Privacy Policy</a>.</p>

        <?php elseif ($slug === 'delete-everything'): ?>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">The local copy</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Deleting the app removes everything stored on that device.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">The iCloud copy</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Deleting the app does <strong class="font-semibold text-gray-900 dark:text-white">not</strong> delete the iCloud copy — that is the point of sync. To remove it:</p>
            <ol class="list-decimal pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">iOS Settings → your name → iCloud</strong></li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Manage Account Storage</strong> (or Manage Storage)</li>
                <li>Find <strong class="font-semibold text-gray-900 dark:text-white">Subscrr</strong> and delete its data.</li>
            </ol>

            <div class="bg-[#fdf1ec] dark:bg-[#2d1f1a] border-l-4 border-[#d64541] dark:border-orange-500 p-5 rounded-r-md mb-12 text-lg text-gray-800 dark:text-gray-200 leading-relaxed text-[15px]">
                Do this on a device that is signed into the Apple Account that holds the data, and do it after deleting the app if you want everything gone. Deleting iCloud data while the app is still installed on another device can let that device sync it back.
            </div>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Just the histories</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Subscrr's own <strong class="font-semibold text-gray-900 dark:text-white">Settings</strong> can clear calculator history separately, without touching your subscriptions. Scan history rolls off by itself after 30 days.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What there is nothing to delete from</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">We hold no server copy of your subscriptions and no account, so there is no deletion request to send us. Questions: <a href="mailto:hi@subscrr.app" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">hi@subscrr.app</a>.</p>

        <?php elseif ($slug === 'there-is-no-account-to-create'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Subscrr has no account system. You never create one, never confirm an email address, and never reset a password.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">This is a design decision with consequences in both directions.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4"><strong class="font-semibold text-gray-900 dark:text-white">What you get:</strong> nothing to leak. There is no user database with your name against a list of what you pay for, because there is no user database.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4"><strong class="font-semibold text-gray-900 dark:text-white">What you give up:</strong> there is no server-side backup we can restore for you. Your safety net is <strong class="font-semibold text-gray-900 dark:text-white">iCloud sync</strong> — turn it on and your data survives a lost or replaced phone. Turn it off and the only copy is the one on your device.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">See <a href="<?php echo base_url('Help_center/article/icloud-sync-explained'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">iCloud sync explained</a>, <a href="<?php echo base_url('Help_center/article/where-your-data-lives'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Where your data lives</a> and, before you change phones, <a href="<?php echo base_url('Help_center/article/moving-to-a-new-iphone'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Moving to a new iPhone</a>.</p>

        <?php endif; ?>

        <!-- Did this answer your question -->
        <div class="border-t border-gray-200 dark:border-gray-800 pt-8 pb-16">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-6">Did this answer your question?</h3>
            <div class="flex flex-wrap gap-4">
                <button class="bg-[#e63329] hover:bg-[#d12b21] text-white font-medium py-3 px-8 rounded-full transition-colors">
                    No, I need help
                </button>
                <a href="<?php echo base_url('Help_center/privacy'); ?>" class="bg-white dark:bg-[#161616] hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-900 dark:text-white font-medium py-3 px-8 rounded-full border border-gray-300 dark:border-gray-700 transition-colors inline-block">
                    Back to Privacy &amp; Your Data
                </a>
            </div>
        </div>

        <!-- More in Privacy & Your Data -->
        <div>
            <h3 class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-6">More in Privacy &amp; Your Data</h3>
            <ul class="divide-y divide-gray-200 dark:divide-gray-800 border-b border-gray-200 dark:border-gray-800">
                <?php foreach ($all_articles as $article_item): ?>
                    <?php if ($article_item['slug'] !== $slug): // Jangan tampilkan artikel yang sedang dibuka ?>
                        <li>
                            <a href="<?php echo base_url('Help_center/article/' . $article_item['slug']); ?>" 
                               class="group flex justify-between items-center py-4 px-3 -mx-3 text-lg text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg transition-colors duration-200">
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