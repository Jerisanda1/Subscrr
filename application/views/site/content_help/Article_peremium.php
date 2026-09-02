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
            <a href="<?php echo base_url('Help_center/premium_billing'); ?>" class="hover:text-gray-700 dark:hover:text-gray-300">Premium &amp; Billing</a>
            <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="text-gray-900 dark:text-gray-100 font-medium"><?php echo $title; ?></span>
        </nav>

        <!-- Judul & Deskripsi -->
        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white mb-4"><?php echo $title; ?></h1>
        <p class="text-lg text-gray-600 dark:text-gray-400 mb-8 font-semibold"><?php echo $description; ?></p>

        <!-- Konten Artikel (manual per slug) -->
        <?php if ($slug === 'what-is-free-and-what-is-premium'): ?>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Free</h2>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>Track up to <strong class="font-semibold text-gray-900 dark:text-white">six subscriptions</strong></li>
                <li>Renewal <strong class="font-semibold text-gray-900 dark:text-white">reminders</strong></li>
                <li>The <a href="<?php echo base_url('Help_center/article/read-your-dashboard'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">dashboard</a> and category breakdown</li>
                <li>The full <a href="<?php echo base_url('Help_center/article/calculate-what-a-habit-costs'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">calculator</a>, including custom intervals and tags</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Widgets, alternative app icons</strong>, and <strong class="font-semibold text-gray-900 dark:text-white">iCloud sync</strong> across your devices</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">One AI scan</strong>, so you can judge the recognition before paying</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Premium — $7.99 per month, or $29.99 per year</h2>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">Unlimited subscriptions</strong></li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">AI Spend:</strong> unlimited receipt and screenshot scanning, automatic categorisation, scan history and spending statistics</li>
                <li>Everything in the free tier</li>
            </ul>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">There is no ad-supported tier and no data sold on the side — the subscription is the business model, which is the point.</p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">Next: <a href="<?php echo base_url('Help_center/article/subscribe-to-premium'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Subscribe to Premium</a>.</p>

        <?php elseif ($slug === 'subscribe-to-premium'): ?>

            <ol class="list-decimal pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>Open <strong class="font-semibold text-gray-900 dark:text-white">Settings</strong> in Subscrr, or tap any Premium prompt in the app.</li>
                <li>Pick the plan — <strong class="font-semibold text-gray-900 dark:text-white">monthly</strong> or <strong class="font-semibold text-gray-900 dark:text-white">yearly</strong>, the yearly one works out cheaper per month.</li>
                <li>Confirm with Face ID, Touch ID or your Apple Account password.</li>
                <li>The purchase is processed by the App Store, and unlimited subscriptions and AI scanning switch on immediately.</li>
            </ol>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Payment goes through Apple. Subscrr never sees your card details.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">After buying</h2>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>The subscription renews on its own period — monthly or yearly — until you <a href="<?php echo base_url('Help_center/article/cancel-premium'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">cancel it</a>.</li>
                <li>On a new device, tap <a href="<?php echo base_url('Help_center/article/restore-purchases'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Restore Purchases</a> rather than buying again.</li>
                <li>Nothing was unlocked? See <a href="<?php echo base_url('Help_center/article/paid-but-premium-not-active'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">I paid, but Premium is not active</a>.</li>
            </ul>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">Got a code from a giveaway or the Telegram channel? See <a href="<?php echo base_url('Help_center/article/redeem-a-promo-code'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Redeem a promo code</a>.</p>

        <?php elseif ($slug === 'restore-purchases'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Open <strong class="font-semibold text-gray-900 dark:text-white">Settings</strong> in Subscrr and tap <strong class="font-semibold text-gray-900 dark:text-white">Restore Purchases</strong>.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">You need this after:</p>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>reinstalling the app,</li>
                <li>moving to a new iPhone,</li>
                <li>erasing and setting up the device again.</li>
            </ul>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Restoring checks with the App Store for an active Subscrr subscription on the Apple Account currently signed in. Two conditions have to hold: it must be <strong class="font-semibold text-gray-900 dark:text-white">the same Apple Account</strong> that bought Premium, and the subscription must still be <strong class="font-semibold text-gray-900 dark:text-white">active</strong>.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">If restoring finds nothing, work through <a href="<?php echo base_url('Help_center/article/paid-but-premium-not-active'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">I paid, but Premium is not active</a>.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">Setting up a replacement phone from scratch? <a href="<?php echo base_url('Help_center/article/moving-to-a-new-iphone'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Moving to a new iPhone</a> covers the order to do things in.</p>

        <?php elseif ($slug === 'cancel-premium'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Subscrr cannot cancel the subscription for you, because Apple owns the billing relationship. It takes about fifteen seconds:</p>
            <ol class="list-decimal pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>Open <strong class="font-semibold text-gray-900 dark:text-white">iOS Settings</strong>.</li>
                <li>Tap <strong class="font-semibold text-gray-900 dark:text-white">your name</strong> at the top.</li>
                <li>Tap <strong class="font-semibold text-gray-900 dark:text-white">Subscriptions</strong>.</li>
                <li>Pick <strong class="font-semibold text-gray-900 dark:text-white">Subscrr</strong> and tap <strong class="font-semibold text-gray-900 dark:text-white">Cancel Subscription</strong>.</li>
            </ol>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What happens after</h2>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>You keep Premium <strong class="font-semibold text-gray-900 dark:text-white">until the end of the period you have paid for</strong>.</li>
                <li>After that, AI scanning stops and the free six-subscription limit applies again.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Nothing is deleted</strong>. Your subscriptions stay in the app; those beyond the free limit are simply not editable until you are under it again or subscribe once more.</li>
            </ul>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">If you are cancelling because something did not work, we would genuinely like to know: <a href="mailto:hi@subscrr.app" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">hi@subscrr.app</a>.</p>

        <?php elseif ($slug === 'refunds'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Purchases are processed by Apple, so refunds go through Apple rather than through us. We have no ability to issue one.</p>
            <ol class="list-decimal pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>Go to <a href="https://reportaproblem.apple.com" target="_blank" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">reportaproblem.apple.com</a> and sign in with your Apple Account.</li>
                <li>Find the Subscrr purchase.</li>
                <li>Choose <strong class="font-semibold text-gray-900 dark:text-white">Request a refund</strong> and pick a reason.</li>
            </ol>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Apple decides, usually within a few days.</p>

            <div class="bg-[#fdf1ec] dark:bg-[#2d1f1a] border-l-4 border-[#d64541] dark:border-orange-500 p-5 rounded-r-md mb-12 text-lg text-gray-800 dark:text-gray-200 leading-relaxed text-[15px]">
                If something in the app misled you into buying, write to <a href="mailto:hi@subscrr.app" class="text-orange-600 underline">hi@subscrr.app</a> as well. We cannot move Apple's decision, but we can tell you exactly what to write, and a description that misleads people is a bug worth fixing.
            </div>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">Remember to <a href="<?php echo base_url('Help_center/article/cancel-premium'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">cancel the subscription</a> too — a refund on its own does not stop the next renewal.</p>

        <?php elseif ($slug === 'redeem-a-promo-code'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Free Premium is handed out from time to time as App Store <strong class="font-semibold text-gray-900 dark:text-white">offer codes</strong> — in the <a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Telegram channel</a>, to beta testers, and to people who send in a genuinely useful bug report.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">To redeem one:</p>
            <ol class="list-decimal pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>Open the <strong class="font-semibold text-gray-900 dark:text-white">App Store</strong> app.</li>
                <li>Tap your profile picture in the top right.</li>
                <li>Tap <strong class="font-semibold text-gray-900 dark:text-white">Redeem Gift Card or Code</strong>.</li>
                <li>Enter the code.</li>
            </ol>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Open Subscrr afterwards and Premium is active. If it is not, tap <a href="<?php echo base_url('Help_center/article/restore-purchases'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Restore Purchases</a> in Settings.</p>

            <div class="bg-[#fdf1ec] dark:bg-[#2d1f1a] border-l-4 border-[#d64541] dark:border-orange-500 p-5 rounded-r-md mb-12 text-lg text-gray-800 dark:text-gray-200 leading-relaxed text-[15px]">
                Codes are tied to a region and have an expiry date. If a code is rejected, check that your Apple Account is in the region the code was issued for, and write to us if it still will not take.
            </div>

        <?php endif; ?>

        <!-- Did this answer your question -->
        <div class="border-t border-gray-200 dark:border-gray-800 pt-8 pb-16">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-6">Did this answer your question?</h3>
            <div class="flex flex-wrap gap-4">
                <button class="bg-[#e63329] hover:bg-[#d12b21] text-white font-medium py-3 px-8 rounded-full transition-colors">
                    No, I need help
                </button>
                <a href="<?php echo base_url('Help_center/premium_billing'); ?>" class="bg-white dark:bg-[#161616] hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-900 dark:text-white font-medium py-3 px-8 rounded-full border border-gray-300 dark:border-gray-700 transition-colors inline-block">
                    Back to Premium &amp; Billing
                </a>
            </div>
        </div>

        <!-- More in Premium & Billing -->
        <div>
            <h3 class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-6">More in Premium &amp; Billing</h3>
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