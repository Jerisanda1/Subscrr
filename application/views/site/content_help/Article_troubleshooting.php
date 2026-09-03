<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> - Subscrr</title>
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

    <!-- KONTEN ARTIKEL -->
    <section class="max-w-6xl mx-auto px-6 lg:px-8 pb-24">
        
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-1 text-sm text-gray-500 mb-8 pt-10">
            <a href="<?php echo base_url('Help_center'); ?>" class="hover:text-gray-700 dark:hover:text-gray-300">Home</a>
            <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <a href="<?php echo base_url('Help_center/troubleshooting'); ?>" class="hover:text-gray-700 dark:hover:text-gray-300">Troubleshooting</a>
            <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="text-gray-900 dark:text-gray-100 font-medium"><?php echo $title; ?></span>
        </nav>

        <!-- Judul & Deskripsi -->
        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white mb-4"><?php echo $title; ?></h1>
        <p class="text-lg text-gray-600 dark:text-gray-400 mb-8 font-semibold"><?php echo $description; ?></p>

        <!-- Konten Artikel (manual per slug) -->
        <?php if ($slug === 'reminders-do-not-arrive'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Go through these in order. The cause is almost never the app itself.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">1. Notifications are allowed</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Open <strong class="font-semibold text-gray-900 dark:text-white">iOS Settings → Subscrr → Notifications</strong> and make sure notifications are allowed, with <strong class="font-semibold text-gray-900 dark:text-white">Lock Screen</strong>, <strong class="font-semibold text-gray-900 dark:text-white">Notification Centre</strong> and <strong class="font-semibold text-gray-900 dark:text-white">Banners</strong> all switched on.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">2. Reminders are on inside the app</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Subscrr has its own switch for renewal reminders in <strong class="font-semibold text-gray-900 dark:text-white">Settings → Notifications</strong>, plus a <strong class="font-semibold text-gray-900 dark:text-white">Remind about this subscription</strong> toggle on each subscription's page. Check both — see <a href="<?php echo base_url('Help_center/article/reminder-settings'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Reminder settings</a>.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">While you are there, open the two lead-time groups (<strong class="font-semibold text-gray-900 dark:text-white">Monthly and more often</strong>, <strong class="font-semibold text-gray-900 dark:text-white">Quarterly and less often</strong>). If every lead time in a group is unticked, that group sends nothing — that is the setting working as asked, not a bug.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">3. Scheduled Summary is holding them</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">If <strong class="font-semibold text-gray-900 dark:text-white">Notification Summary</strong> is on for Subscrr, iOS collects notifications and delivers them at set times, which can be hours late. Turn it off for Subscrr in <strong class="font-semibold text-gray-900 dark:text-white">iOS Settings → Notifications → Scheduled Summary</strong>.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">4. A Focus mode is filtering them</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Work, Sleep and custom Focus modes silence apps that are not explicitly allowed. Add Subscrr to the allowed apps of any Focus you use, or check whether one is on all day without you noticing.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">5. The date is right</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">A reminder fires relative to the <strong class="font-semibold text-gray-900 dark:text-white">next charge date</strong>. If that date has passed or was entered wrong, no notification is due. Open the subscription and check.</p>

            <div class="bg-[#fdf1ec] dark:bg-[#2d1f1a] border-l-4 border-[#d64541] dark:border-orange-500 p-5 rounded-r-md mb-12 text-lg text-gray-800 dark:text-gray-200 leading-relaxed text-[15px]">
                Still nothing after all five? Write to <a href="mailto:hi@subscrr.app" class="text-orange-600 underline">hi@subscrr.app</a> with your iOS version and a screenshot of iOS Settings → Subscrr → Notifications.
            </div>

        <?php elseif ($slug === 'subscriptions-not-on-other-device'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Subscrr syncs through <strong class="font-semibold text-gray-900 dark:text-white">your</strong> iCloud, not through our servers. That means there is nothing on our side to reset — the fix is always in the iCloud setup.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Check both devices</h2>
            <ol class="list-decimal pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">Same Apple Account.</strong> Open iOS Settings, tap your name at the top and confirm both devices show the same account.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">iCloud Drive is on.</strong> iOS Settings → your name → iCloud.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Subscrr is allowed to use iCloud.</strong> In the same iCloud screen, find Subscrr in the app list and make sure it is enabled.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Both devices are online.</strong> Sync needs a connection on both sides, not just the one you are looking at.</li>
            </ol>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Give it a minute</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">The first sync after installing on a new device is the slowest — it can take a minute or two, and it will not finish while the app is in the background on a locked phone. Leave Subscrr open and on screen for a moment on both devices.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Still nothing</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Force-quit and reopen Subscrr on both devices. If one device has the complete list and the other is empty, make changes on the <strong class="font-semibold text-gray-900 dark:text-white">full</strong> one; adding data is safer than trusting a half-synced copy.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">See also: <a href="<?php echo base_url('Help_center/article/icloud-sync-explained'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">iCloud sync explained</a>.</p>

        <?php elseif ($slug === 'receipt-scan-failed-or-misread'): ?>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Make the photo easier to read</h2>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">Flatten the receipt.</strong> Creases across the total are the single biggest cause of misreads.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Shoot straight on</strong>, not at an angle.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Fill the frame</strong> with the receipt, but keep all four edges inside it.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Even light</strong>, no hard shadow and no flash glare on thermal paper.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">A bank screenshot</strong> is often better than paper. Screenshots are crisp, and AI Spend reads them fine.</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">If it comes back wrong anyway</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Nothing is saved until you accept it. On the result screen you can fix the total, correct a price, delete a line, and <a href="<?php echo base_url('Help_center/article/recategorise-a-receipt-item'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">recategorise items</a>. A half-right scan you correct in ten seconds is still faster than typing the whole thing.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">If it fails outright</h2>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>Check your <strong class="font-semibold text-gray-900 dark:text-white">connection</strong> — recognition needs one.</li>
                <li>Try again in a moment. There is a rate limit to stop abuse; a burst of scans in quick succession can hit it briefly.</li>
                <li>If you are out of free scans, scanning needs <a href="<?php echo base_url('Help_center/article/what-is-free-and-what-is-premium'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Premium</a>.</li>
            </ul>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">If the scan went through but the numbers do not add up, that is a different problem: <a href="<?php echo base_url('Help_center/article/scan-wrong-total-or-missing-items'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">a scan has the wrong total or missing items</a>.</p>

            <div class="bg-[#fdf1ec] dark:bg-[#2d1f1a] border-l-4 border-[#d64541] dark:border-orange-500 p-5 rounded-r-md mb-12 text-lg text-gray-800 dark:text-gray-200 leading-relaxed text-[15px]">
                Very faded thermal receipts sometimes cannot be read by anyone, including humans. Enter those manually in the calculator.
            </div>

        <?php elseif ($slug === 'scan-wrong-total-or-missing-items'): ?>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Fix it before saving</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">The result screen is fully editable: tap the total to correct it, tap an item to change its price or category, and remove lines that should not be counted.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">When the difference is not an error</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">A few gaps are expected rather than wrong:</p>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">Discounts and loyalty deductions</strong> appear as their own lines on many receipts. If the scanner reads them as items, the sum of items will not match the total.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Deposits, tips and service charges</strong> are on the total but are not products.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Weighted goods</strong> print as a price per kilo plus a total, and only one of the two is the money you paid.</li>
            </ul>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">If the <strong class="font-semibold text-gray-900 dark:text-white">total</strong> is right, your statistics are right. The item breakdown is there to tell you <em>what kind</em> of spending it was; a missing line changes the category split slightly, not the amount.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">If it is consistently wrong</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">Send an example to <a href="mailto:hi@subscrr.app" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">hi@subscrr.app</a> — a photo of a receipt that reads badly is genuinely useful, and receipts from your country's shops are how recognition gets better for you.</p>

        <?php elseif ($slug === 'paid-but-premium-not-active'): ?>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Restore purchases</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Open <strong class="font-semibold text-gray-900 dark:text-white">Settings</strong> in Subscrr and tap <strong class="font-semibold text-gray-900 dark:text-white">Restore Purchases</strong>. This is the expected step after reinstalling the app or moving to a new iPhone, and it resolves most cases immediately.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Check the Apple Account</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Purchases belong to the Apple Account that made them. If your phone is signed into a different account — a family member's, or an old one — restoring will find nothing. Check in <strong class="font-semibold text-gray-900 dark:text-white">iOS Settings → your name → Media & Purchases</strong>.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Check the subscription is still active</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4"><strong class="font-semibold text-gray-900 dark:text-white">iOS Settings → your name → Subscriptions</strong> shows whether Subscrr Premium is active or expired. An expired or cancelled subscription cannot be restored; it needs to be started again.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">A payment that is still pending</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Bank confirmation can delay a purchase, and Apple sometimes needs a few minutes. If the App Store shows the purchase as pending, wait and restore again.</p>

            <div class="bg-[#fdf1ec] dark:bg-[#2d1f1a] border-l-4 border-[#d64541] dark:border-orange-500 p-5 rounded-r-md mb-12 text-lg text-gray-800 dark:text-gray-200 leading-relaxed text-[15px]">
                Still stuck? Write to <a href="mailto:hi@subscrr.app" class="text-orange-600 underline">hi@subscrr.app</a> with the date of the purchase. We cannot see your Apple receipts, but we can tell you exactly what to send to Apple.
            </div>

        <?php elseif ($slug === 'currency-conversion-looks-wrong'): ?>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Two different numbers, both correct</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Subscrr converts using <strong class="font-semibold text-gray-900 dark:text-white">market exchange rates</strong>, refreshed regularly. Your bank converts using <strong class="font-semibold text-gray-900 dark:text-white">its own rate</strong>, which includes a spread, and often a fee on top. A few percent of difference between the two is normal and is not a bug in either.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Subscrr's job is to give you a comparable picture across currencies, not to predict your statement to the cent.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Check the basics first</h2>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">The subscription's own currency.</strong> Open it and confirm the price is stored in the currency you are actually billed in — a euro price saved as dollars will be wrong by exactly the exchange rate.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Your display currency.</strong> <a href="<?php echo base_url('Help_center/article/choose-your-display-currency'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Settings</a> controls what totals are shown in.</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Rates that look stale</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Rates need a connection to refresh. If you have been offline, the last fetched rates are used until Subscrr can update them. Open the app on a connection and give it a moment.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">If a rate is off by far more than a bank spread, tell us at <a href="mailto:hi@subscrr.app" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">hi@subscrr.app</a> with the currency pair.</p>

        <?php elseif ($slug === 'widgets-not-updating'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Widgets do not update continuously. iOS decides when to refresh them, budgeting by how often you actually look at the widget and how much battery is left.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Things that help:</p>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">Turn off Low Power Mode.</strong> It aggressively delays widget refreshes.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Allow Background App Refresh</strong> for Subscrr in iOS Settings → General → Background App Refresh.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Open the app.</strong> Opening Subscrr pushes fresh data to its widgets right away.</li>
            </ul>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">If a widget still shows nothing at all, remove it and add it again — see <a href="<?php echo base_url('Help_center/article/add-widgets-home-lock-screen'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Add widgets</a>. A widget added before the app finished its first iCloud sync can end up empty until it is re-added.</p>

        <?php elseif ($slug === 'app-crashes-or-freezes'): ?>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Try these first</h2>
            <ol class="list-decimal pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">Force-quit and reopen.</strong> Swipe up from the bottom of the screen, pause, and swipe Subscrr away.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Restart the iPhone.</strong> Unglamorous, and it works more often than it should.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Update Subscrr and iOS.</strong> Check the App Store for an update — a crash you are hitting has often already been fixed.</li>
            </ol>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Reinstalling</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Reinstalling is safe <strong class="font-semibold text-gray-900 dark:text-white">if iCloud sync is on</strong>: your subscriptions are in your iCloud container and come back after you sign in and give the first sync a minute.</p>

            <div class="bg-[#fdf1ec] dark:bg-[#2d1f1a] border-l-4 border-[#d64541] dark:border-orange-500 p-5 rounded-r-md mb-12 text-lg text-gray-800 dark:text-gray-200 leading-relaxed text-[15px]">
                If sync is off, your data lives only on the device, and deleting the app deletes it. Turn sync on and let it finish before you reinstall anything.
            </div>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Calculator history and scan history are local, and are not restored by reinstalling.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">If it keeps happening</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Write to <a href="mailto:hi@subscrr.app" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">hi@subscrr.app</a> with:</p>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>your <strong class="font-semibold text-gray-900 dark:text-white">iOS version</strong> and iPhone model,</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">what you were doing</strong> in the seconds before the crash,</li>
                <li>a <strong class="font-semibold text-gray-900 dark:text-white">screen recording</strong>, if you can reproduce it.</li>
            </ul>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">That is usually enough to find it without any access to your data.</p>

        <?php endif; ?>

        <!-- Did this answer your question -->
        <div class="border-t border-gray-200 dark:border-gray-800 pt-8 pb-16">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-6">Did this answer your question?</h3>
             <div class="flex flex-wrap gap-4">
                <a href="<?php echo base_url('Help_center/contact'); ?>" class="bg-[#e63329] hover:bg-[#d12b21] text-white font-medium py-3 px-8 rounded-full transition-colors inline-block">
                    No, I need help
                </a>
                <a href="<?php echo base_url('Help_center/troubleshooting'); ?>" class="bg-white dark:bg-[#161616] hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-900 dark:text-white font-medium py-3 px-8 rounded-full border border-gray-300 dark:border-gray-700 transition-colors inline-block">
                    Back to Troubleshooting
                </a>
            </div>
        </div>

        <!-- More in Troubleshooting -->
        <div>
            <h3 class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-6">More in Troubleshooting</h3>
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