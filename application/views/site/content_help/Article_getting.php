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

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-12">Everything in Subscrr starts with one subscription. Adding it takes about fifteen seconds.</p>

            <!-- Section: Add it -->
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Add it</h2>
            <ol class="list-decimal pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-12">
                <li>Open the <strong class="font-semibold text-gray-900 dark:text-white">Subscriptions</strong> tab and tap the plus button.</li>
                <li>Start typing the name. Subscrr suggests popular services with their logos — pick one and the icon and category are filled in for you. If your service is not in the list, keep typing and create it as a custom entry.</li>
                <li>Enter the <a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">price</a> exactly as it is charged to you, in the currency it is charged in.</li>
                <li>Choose the <a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">billing period</a>: weekly, monthly, yearly, or a <a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">custom interval</a>.</li>
                <li>Set the <a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">date of the next charge</a>. This is what reminders and all forecasts are built on, so it is worth getting right.</li>
                <li>Save.</li>
            </ol>

            <!-- Section: What happens next -->
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What happens next</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
                The subscription appears in the list with its real cost, and the dashboard total updates immediately. If reminders are on, Subscrr schedules a notification for a few days before that next charge.
            </p>

            <!-- Callout / Info Box -->
            <div class="bg-[#fdf1ec] dark:bg-[#2d1f1a] border-l-4 border-[#d64541] dark:border-orange-500 p-5 rounded-r-md mb-12 text-lg text-gray-800 dark:text-gray-200 leading-relaxed text-[15px]">
                Not sure of the exact renewal date? Open iOS Settings, tap your name, then <strong class="font-semibold">Subscriptions</strong>, and Apple shows the renewal date for anything billed through the App Store.
            </div>

            <!-- Section: Next steps -->
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Next steps</h2>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">
                <li><a href="<?php echo base_url('Help_center/article/import-subscriptions-you-already-pay-for'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Import subscriptions you already pay for</a></li>
                <li><a href="<?php echo base_url('Help_center/article/turn-on-renewal-reminders'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Turn on renewal reminders</a></li>
                <li><a href="<?php echo base_url('Help_center/article/choose-your-display-currency'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Choose your display currency</a></li>
                <li><a href="<?php echo base_url('Help_center/article/a-quick-tour-of-the-app'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">A quick tour of the app</a>, if you want the whole picture first</li>
                <li><a href="<?php echo base_url('Help_center/article/edit-or-delete-a-subscription'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Edit or delete a subscription</a>, for when a price changes</li>
            </ul>

        <?php elseif ($slug === 'import-subscriptions-you-already-pay-for'): ?>
           
    <!-- Konten untuk Import subscriptions -->
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-12">
        Most people already pay for six to twelve things. Typing them all in from memory is both slow and inaccurate — you will forget two of them, and those two are usually the expensive ones.
    </p>

    <!-- Section: Use the import helper -->
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Use the import helper</h2>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
        Settings has an import helper that walks you through your Apple subscriptions step by step, so you can copy them into Subscrr in a few taps rather than hunting for prices.
    </p>
    <ol class="list-decimal pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-12">
        <li>Open <a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Settings</a> in Subscrr and choose the import helper.</li>
        <li>Follow the steps — it takes you to the Apple subscriptions screen and back.</li>
        <li>For each service you see there, add it in Subscrr with its price and next renewal date.</li>
    </ol>

    <!-- Section: What about things Apple does not bill -->
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What about things Apple does not bill</h2>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
        Rent, a gym, a mobile plan, insurance, a service you pay by card on a website — none of these show up in Apple's list. Add them manually the same way as <a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">any other subscription</a>. They are usually the biggest lines in the whole picture, so they are worth the extra minute.
    </p>

    <!-- Callout / Info Box -->
    <div class="bg-[#fdf1ec] dark:bg-[#2d1f1a] border-l-4 border-[#d64541] dark:border-orange-500 p-5 rounded-r-md mb-12 text-lg text-gray-800 dark:text-gray-200 leading-relaxed text-[15px]">
        A bank statement is the fastest way to find the ones you have forgotten. Scan the last month and add anything that repeats.
    </div>


        <?php elseif ($slug === 'choose-your-display-currency'): ?>
            <!-- Konten untuk Choose your display currency -->
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-12">
        Subscrr separates two things: the currency a subscription is <strong class="font-semibold text-gray-900 dark:text-white">billed</strong> in, and the currency you want to <strong class="font-semibold text-gray-900 dark:text-white">read</strong> totals in.
    </p>

    <!-- Section: Set the display currency -->
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Set the display currency</h2>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-12">
        Open <a href="#" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Settings</a> and pick your display currency. Every total on every screen — the dashboard, the per-month figure, the yearly forecast — is shown in it.
    </p>

    <!-- Section: Subscriptions in another currency -->
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Subscriptions in another currency</h2>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
        A single subscription can still be entered in its own currency. Enter the price exactly as your card is charged, and Subscrr converts it into your display currency at current rates when it adds things up.
    </p>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
        That means a euro subscription stays a euro subscription: the amount you entered never drifts, only the converted total moves as rates move.
    </p>

    <!-- Callout / Info Box -->
    <div class="bg-[#fdf1ec] dark:bg-[#2d1f1a] border-l-4 border-[#d64541] dark:border-orange-500 p-5 rounded-r-md mb-12 text-lg text-gray-800 dark:text-gray-200 leading-relaxed text-[15px]">
        Rates are fetched from a public source and refreshed regularly. They are there to give you an accurate picture, not to match your bank's conversion to the cent — banks add their own spread.
    </div>

    <!-- Section: Changing it later -->
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Changing it later</h2>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
        You can change the display currency at any time. Nothing is rewritten; the same data is simply converted again and shown in the new currency.
    </p>

    <!-- See also -->
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
        See also: <a href="<?php echo base_url('Help_center/article/currency-conversion-looks-wrong'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Currency conversion looks wrong</a>.
    </p>


        <?php elseif ($slug === 'turn-on-renewal-reminders'): ?>
            <!-- Konten untuk Turn on renewal reminders -->
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-12">
        A subscription tracker that does not warn you is just a list. Reminders are the part that actually saves money, because cancelling is only easy <em class="italic">before</em> the charge.
    </p>

    <!-- Section: Allow notifications -->
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Allow notifications</h2>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-12">
        The first time you open Subscrr, iOS asks whether it may send notifications. If you said no, you can change it later: open <strong class="font-semibold text-gray-900 dark:text-white">iOS Settings → Subscrr → Notifications</strong> and allow them.
    </p>

    <!-- Section: Set your warning window -->
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Set your warning window</h2>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
        In <strong class="font-semibold text-gray-900 dark:text-white">Settings → Notifications</strong> you choose the time reminders arrive and how far ahead they fire — separately for monthly-and-shorter plans and for quarterly-and-longer ones. Yearly charges warn you a week ahead and again the day before by default, because cancelling an annual plan takes more than an evening. Tick several lead times to get more than one reminder per renewal.
    </p>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-12">
        If several reminders land on the same day, they arrive as <strong class="font-semibold text-gray-900 dark:text-white">one</strong> notification rather than a pile of them.
    </p>

    <!-- Section: Per-subscription control -->
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Per-subscription control</h2>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
        You can also turn reminders off for a single subscription without touching the rest. See <a href="<?php echo base_url('Help_center/article/reminder-settings'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Reminder settings</a>.
    </p>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">
        If reminders are not arriving, work through <a href="<?php echo base_url('Help_center/article/reminders-do-not-arrive'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Reminders do not arrive</a> — the cause is almost always a Focus mode or Scheduled Summary.
    </p>
        <?php elseif ($slug === 'a-quick-tour-of-the-app'): ?>
           
    <!-- Konten untuk A quick tour of the app -->
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-12">
        Subscrr has two halves. One tracks what repeats. The other tracks what you actually spend.
    </p>

    <!-- Section: Subscriptions -->
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Subscriptions</h2>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
        The list of everything that bills you again and again, with the next charge date on each one. A ring around each icon fills as the charge approaches, and turns orange once it is less than a week away. Above the list sits the dashboard: what all of this costs per day, per month and per year, what is already paid this month and what is still to come, plus a breakdown by category and a fund for annual plans.
    </p>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
        A search bar at the bottom of the list <a href="<?php echo base_url('Help_center/article/search-bar'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">finds anything you track</a> once scrolling stops being quick.
    </p>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-12">
        This is the half that sends <a href="<?php echo base_url('Help_center/article/reminders'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">reminders</a>. What the numbers above the list mean: <a href="<?php echo base_url('Help_center/article/read-your-dashboard'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Read your dashboard</a>.
    </p>

    <!-- Section: Calculator -->
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Calculator</h2>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-12">
        For things that are not subscriptions but behave like them — a coffee every working morning, a taxi twice a week. You enter what it costs and how often you do it, and Subscrr turns the habit into a monthly and yearly number. Usually an uncomfortable one. See <a href="<?php echo base_url('Help_center/article/calculate-what-a-habit-costs'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Calculate what a habit costs</a>.
    </p>

    <!-- Section: AI Spend -->
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">AI Spend</h2>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-12">
        Inside the calculator. Photograph a receipt or a bank screenshot and Subscrr reads the total and the line items, then sorts them into categories automatically. Over time it builds a picture of your everyday spending without connecting to any bank. See <a href="<?php echo base_url('Help_center/article/scan-a-receipt-with-ai-spend'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Scan a receipt with AI Spend</a>.
    </p>

    <!-- Section: Settings -->
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Settings</h2>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">
        Currency, language, appearance, reminders, <a href="<?php echo base_url('Help_center/article/app-icon'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">the app icon</a>, iCloud sync, Premium and data controls all live here.
    </p>
        <?php elseif ($slug === 'change-language-and-appearance'): ?>
              <!-- Konten untuk Change language and appearance -->
    
    <!-- Section: Language -->
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Language</h2>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-12">
        Subscrr speaks <strong class="font-semibold text-gray-900 dark:text-white">English</strong> and <strong class="font-semibold text-gray-900 dark:text-white">Russian</strong>. The language follows your choice in the app's Settings, independently of your system language — handy if your phone is in one language but you would rather read money in another.
    </p>

    <!-- Section: Appearance -->
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Appearance</h2>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
        There are three themes:
    </p>
    <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
        <li><strong class="font-semibold text-gray-900 dark:text-white">Light</strong> — the default warm paper look.</li>
        <li><strong class="font-semibold text-gray-900 dark:text-white">Dark</strong> — a true dark theme, not a dimmed light one.</li>
        <li><strong class="font-semibold text-gray-900 dark:text-white">Blue</strong> — a cooler alternative.</li>
    </ul>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-12">
        Pick one in <strong class="font-semibold text-gray-900 dark:text-white">Settings</strong>. The choice applies everywhere in the app, including widgets where the system allows it.
    </p>

    <!-- Callout / Info Box -->
    <div class="bg-[#fdf1ec] dark:bg-[#2d1f1a] border-l-4 border-[#d64541] dark:border-orange-500 p-5 rounded-r-md mb-16 text-lg text-gray-800 dark:text-gray-200 leading-relaxed text-[15px]">
        Subscrr uses haptics throughout. If you would rather not feel the app, turn off system haptics in <strong class="font-semibold">iOS Settings → Sounds &amp; Haptics</strong>.
    </div>
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