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
            <a href="<?php echo base_url('Help_center/faqs'); ?>" class="hover:text-gray-700 dark:hover:text-gray-300">FAQs</a>
            <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="text-gray-900 dark:text-gray-100 font-medium"><?php echo $title; ?></span>
        </nav>

        <!-- Judul & Deskripsi -->
        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white mb-4"><?php echo $title; ?></h1>
        <p class="text-lg text-gray-500 dark:text-gray-400 mb-8 font-semibold"><?php echo $description; ?></p>

        <!-- Konten Artikel (manual per slug) - KOSONGKAN DULU -->
        <?php if ($slug === 'what-is-subscrr'): ?>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Subscrr is an iPhone app that does two things.
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <strong class="font-semibold text-gray-900 dark:text-white">It tracks subscriptions.</strong> Everything that bills you again and again in one list, with what it truly costs per day, per month and per year, a breakdown by category, and a notification before each charge.
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <strong class="font-semibold text-gray-900 dark:text-white">It tracks everyday spending.</strong> A calculator turns habits into real numbers, and AI Spend reads your receipts so you can see where the money went without connecting a bank account.
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                The slogan on the website — <em class="italic">all your subscriptions, and what they really cost</em> — is the whole idea. Most people underestimate the yearly total by a factor of two.
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Subscrr is an independent app, built by a very small team, with metrics published openly in the <a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Telegram channel</a>.
            </p>

        <?php elseif ($slug === 'is-subscrr-free'): ?>
            
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Yes, with a limit.
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <strong class="font-semibold text-gray-900 dark:text-white">Free</strong> covers tracking up to <strong class="font-semibold text-gray-900 dark:text-white">six subscriptions</strong>, renewal reminders, widgets, iCloud sync and the full calculator. That is enough to genuinely use the app, not a crippled demo.
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <strong class="font-semibold text-gray-900 dark:text-white">Premium</strong> removes the subscription limit and unlocks AI receipt scanning. You get <strong class="font-semibold text-gray-900 dark:text-white">one free scan</strong> to see whether the recognition is any good before you decide.
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Full detail: <a href="<?php echo base_url('Help_center/article/what-is-free-and-what-is-premium'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">What is free and what is Premium</a>.
            </p>

        <?php elseif ($slug === 'does-it-connect-to-my-bank'): ?>

           
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                No, and this is deliberate.
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Subscrr has no bank integration, asks for no bank login, and stores no card details. Two reasons:
            </p>

            <ol class="list-decimal pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>
                    <strong class="font-semibold text-gray-900 dark:text-white">Open Banking is not available on the markets Subscrr is built for.</strong> An integration that only works in a handful of countries would be a feature most users could not use.
                </li>
                <li>
                    <strong class="font-semibold text-gray-900 dark:text-white">Handing your bank credentials to a third-party app is a bad trade.</strong> Subscrr avoids the whole category of risk by never having them.
                </li>
            </ol>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Instead you add subscriptions yourself — a one-off effort of a few minutes — and for everyday spending you <a href="<?php echo base_url('Help_center/article/scan-a-receipt-with-ai-spend'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">scan receipts or bank screenshots</a>, which gives you the same categorised picture without a connection to your account.
            </p>

        <?php elseif ($slug === 'which-devices-are-supported'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Subscrr is an Apple-platform app.
            </p>

            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">iPhone</strong> — the main app.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">iPad</strong> — the same app runs there.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Apple Watch</strong> — a companion app plus complications.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Widgets</strong> — home screen and lock screen.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Live Activity</strong> — the daily affirmation on the Lock Screen and in the Dynamic Island.</li>
            </ul>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Everything stays in step through your private iCloud. See <a href="<?php echo base_url('Help_center/article/subscrr-on-iphone-and-ipad'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Subscrr on iPhone and iPad</a> and <a href="<?php echo base_url('Help_center/article/widgets-on-the-home-and-lock-screen'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Widgets on the home and lock screen</a> for detail, and check the App Store listing for the current minimum iOS version.
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                There is <a href="<?php echo base_url('Help_center/article/is-there-an-android-version'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">no Android version</a>.
            </p>
        <?php elseif ($slug === 'do-you-see-my-data'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                No.
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Your subscriptions, calculations and totals live on your device and — if you enable sync — in <strong class="font-semibold text-gray-900 dark:text-white">your own private iCloud container</strong>, which we cannot read. There is no Subscrr account, no login, no server holding a copy of your list.
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Receipts you scan are sent for recognition and are <strong class="font-semibold text-gray-900 dark:text-white">not stored</strong> on our side; the recognition service is not given your identity, and the results come back to your phone where the history lives locally.
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                The full picture, including the small amount of analytics that is collected: <a href="<?php echo base_url('Help_center/article/where-your-data-lives'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Privacy &amp; Your Data</a>.
            </p>

        <?php elseif ($slug === 'which-currencies-are-supported'): ?>

         
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                All the major currencies are available, both as the currency a subscription is billed in and as your display currency.
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                The two are independent: a subscription billed in dollars stays a dollar amount, and Subscrr converts it into your display currency when it adds up totals, using rates refreshed regularly from a public source.
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                See <a href="<?php echo base_url('Help_center/article/choose-your-display-currency'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Choose your display currency</a>. If a converted figure looks off, read <a href="<?php echo base_url('Help_center/article/currency-conversion-looks-wrong'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Currency conversion looks wrong</a>.
            </p>

        <?php elseif ($slug === 'can-i-use-it-offline'): ?>

           <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Yes, almost entirely.
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Your subscriptions, the dashboard, the calculator, reminders and widgets all work offline, because the data is on your device rather than on a server.
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Three things need a connection:
            </p>

            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">AI receipt scanning</strong> — the image is sent for recognition.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Fresh exchange rates</strong> — the last fetched rates are used until they can be refreshed.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">iCloud sync</strong> — changes queue up and sync when both devices are online again.</li>
            </ul>

        <?php elseif ($slug === 'how-accurate-is-the-receipt-scanner'): ?>

            
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                On a flat, readable receipt in decent light, recognition of the total and the line items is reliable. On a crumpled thermal receipt photographed at an angle it is noticeably less so.
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Two things keep this honest:
            </p>

            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>
                    <strong class="font-semibold text-gray-900 dark:text-white">Nothing is saved until you accept it.</strong> The total, the items, the currency and the categories are all editable on the result screen.
                </li>
                <li>
                    <strong class="font-semibold text-gray-900 dark:text-white">Categories are a suggestion.</strong> Items are sorted automatically, the way a bank categorises transactions, and you can <a href="<?php echo base_url('Help_center/article/recategorise-a-receipt-item'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">recategorise anything</a> in a tap.
                </li>
            </ul>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                For better results, see <a href="<?php echo base_url('Help_center/article/receipt-scan-failed-or-misread'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Receipt scan failed or misread</a>.
            </p>


        <?php elseif ($slug === 'is-there-an-android-version'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                No. Subscrr is built natively for Apple platforms — the sync, the widgets, the watch app and the purchase handling all lean on Apple frameworks, so there is no quick port.
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                If you would use an Android version, say so at <a href="mailto:hi@subscrr.app" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">hi@subscrr.app</a>. Demand is tracked, and the roadmap is published in the <a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Telegram channel</a>.
            </p>

        <?php elseif ($slug === 'how-do-i-suggest-a-feature'): ?>

           <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Email <a href="mailto:hi@subscrr.app" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">hi@subscrr.app</a>, or reply in the <a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Telegram channel</a>.
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                Subscrr is developed solo, so requests are read by the person who would build the thing. That has one practical consequence worth knowing: <strong class="font-semibold text-gray-900 dark:text-white">describe the problem, not the button</strong>. "I keep losing track of annual renewals I signed up for last year" leads somewhere better than "add a filter here".
            </p>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                What is being worked on, what shipped and what the numbers look like is posted openly in the Telegram channel.
            </p>
        <?php endif; ?>

        <!-- Did this answer your question -->
        <div class="border-t border-gray-200 dark:border-gray-800 pt-8 pb-16">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-6">Did this answer your question?</h3>
            <div class="flex flex-wrap gap-4">
                <button class="bg-[#e63329] hover:bg-[#d12b21] text-white font-medium py-3 px-8 rounded-full transition-colors">
                    No, I need help
                </button>
                <a href="<?php echo base_url('Help_center/faqs'); ?>" class="bg-white dark:bg-[#161616] hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-900 dark:text-white font-medium py-3 px-8 rounded-full border border-gray-300 dark:border-gray-700 transition-colors inline-block">
                    Back to FAQs
                </a>
            </div>
        </div>

        <!-- More in FAQs -->
        <div>
            <h3 class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-6">More in FAQs</h3>
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
     <?php $this->load->view ('layout/foot_help.php');?>
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