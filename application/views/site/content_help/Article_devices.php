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
            <a href="<?php echo base_url('Help_center/devices'); ?>" class="hover:text-gray-700 dark:hover:text-gray-300">Subscrr Across Devices</a>
            <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="text-gray-900 dark:text-gray-100 font-medium"><?php echo $title; ?></span>
        </nav>

        <!-- Judul & Deskripsi -->
        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white mb-4"><?php echo $title; ?></h1>
        <p class="text-lg text-gray-600 dark:text-gray-400 mb-8 font-semibold"><?php echo $description; ?></p>

        <!-- Konten Artikel (manual per slug) -->
        <?php if ($slug === 'subscrr-on-iphone-and-ipad'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Subscrr is built for iPhone first — that is where reminders land and where receipts get scanned. The same app also runs on <strong class="font-semibold text-gray-900 dark:text-white">iPad</strong>, with the same data.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">There is nothing to buy twice and nothing to set up separately: install it on the second device, sign into the same Apple Account, and your subscriptions appear once <a href="<?php echo base_url('Help_center/article/icloud-sync-explained'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">iCloud sync</a> has run.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4"><strong class="font-semibold text-gray-900 dark:text-white">Premium</strong> follows the Apple Account, not the device, so a subscription bought on iPhone is active on iPad. If it is not, tap <a href="<?php echo base_url('Help_center/article/restore-purchases'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Restore Purchases</a>.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">Check the App Store listing for the current minimum iOS version.</p>

        <?php elseif ($slug === 'subscrr-on-apple-watch'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">There is a companion <strong class="font-semibold text-gray-900 dark:text-white">Apple Watch</strong> app, plus complications you can put on a watch face.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">It is deliberately small in scope: a glance at what is coming and what things cost, rather than the whole app on a small screen. Adding subscriptions and scanning receipts stay on the iPhone.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Install it</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">The watch app installs with the iPhone app. If it is not on the watch, open the <strong class="font-semibold text-gray-900 dark:text-white">Watch</strong> app on iPhone, scroll to Subscrr and install it there.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">The complications</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">All of them work in the rectangular, circular, inline and corner slots, so they fit any face:</p>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">Next payment</strong> — your next subscription charge.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Next payment · glance</strong> — the same thing, stripped down to the number.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Next three</strong> — the three charges coming up, for a busier week.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Monthly spend</strong> — what your subscriptions cost per month.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Subscriptions</strong> — how many you are tracking.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Daily affirmation</strong> — a calm thought about money, new every day.</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Add one</h2>
            <ol class="list-decimal pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>Touch and hold the watch face, tap <strong class="font-semibold text-gray-900 dark:text-white">Edit</strong>, and swipe to the complications screen.</li>
                <li>Tap a complication slot and choose <strong class="font-semibold text-gray-900 dark:text-white">Subscrr</strong>.</li>
                <li>Pick the complication you want from the list.</li>
            </ol>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">If the watch shows nothing, open Subscrr on the iPhone once with both devices nearby — the watch app takes its data from the phone.</p>

        <?php elseif ($slug === 'widgets-on-the-home-and-lock-screen'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Widgets are the point at which a tracker becomes useful, because they remove the step where you have to remember to open anything.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Subscrr offers <strong class="font-semibold text-gray-900 dark:text-white">home screen</strong> widgets in several sizes and <strong class="font-semibold text-gray-900 dark:text-white">lock screen</strong> widgets:</p>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">Next payment</strong> — what is coming up and what your subscriptions cost.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Daily affirmation</strong> — the day's calm thought about money, refreshed at midnight. Until you have opened it in the app the widget keeps the spoiler, showing particles and "Tap to reveal". Its theme and font are set in <strong class="font-semibold text-gray-900 dark:text-white">Settings → Live Activity</strong>, and the same affirmation can also <a href="<?php echo base_url('Help_center/article/put-affirmation-on-lock-screen'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">go live on the Lock Screen</a>.</li>
            </ul>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Adding them: <a href="<?php echo base_url('Help_center/article/add-widgets-home-lock-screen'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Add widgets to your home and lock screen</a>.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Refresh</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">iOS controls widget refresh, and it is conservative — especially on Low Power Mode. Opening the app pushes fresh data immediately. If a widget looks frozen, see <a href="<?php echo base_url('Help_center/article/widgets-not-updating'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Widgets are not updating</a>.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Appearance</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">Widgets follow your system light or dark appearance. The <a href="<?php echo base_url('Help_center/article/change-language-and-appearance'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">theme you pick inside the app</a> applies where iOS allows it.</p>

        <?php elseif ($slug === 'icloud-sync-explained'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Sync runs through <strong class="font-semibold text-gray-900 dark:text-white">your</strong> private iCloud container, tied to your Apple Account. We cannot read it, and there is no Subscrr login involved — see <a href="<?php echo base_url('Help_center/article/there-is-no-account-to-create'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">There is no account to create</a>.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What syncs</h2>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>Subscriptions, with all their fields</li>
                <li>Categories and settings that belong to your data</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What does not</h2>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">Scan history</strong> and its screenshots — local to the device, kept 30 days</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Calculator history</strong> — local</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Turning it on</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">iCloud Drive must be on for your Apple Account, and Subscrr must be allowed to use iCloud (<strong class="font-semibold text-gray-900 dark:text-white">iOS Settings → your name → iCloud</strong>). The first sync on a new device can take a minute and needs both devices online.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Turning it off</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">The app keeps working with the copy on your device. Nothing is deleted — it simply stops syncing to your other devices. But that copy becomes your only copy, so it is worth understanding before switching it off.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">Trouble: <a href="<?php echo base_url('Help_center/article/subscriptions-not-on-other-device'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">My subscriptions are not on my other device</a>.</p>

        <?php elseif ($slug === 'moving-to-a-new-iphone'): ?>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">If iCloud sync is on</h2>
            <ol class="list-decimal pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>Install Subscrr on the new iPhone.</li>
                <li>Sign into the <strong class="font-semibold text-gray-900 dark:text-white">same Apple Account</strong>.</li>
                <li>Open the app and leave it on screen for a minute while the first sync runs.</li>
                <li>Tap <strong class="font-semibold text-gray-900 dark:text-white">Restore Purchases</strong> in Settings if you have Premium.</li>
            </ol>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">That is it. Your subscriptions come back from your own iCloud container.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">If iCloud sync is off</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Turn it <strong class="font-semibold text-gray-900 dark:text-white">on</strong> on the old phone first, and let it finish, before you wipe or hand over the device. Without sync there is no backup on our side to recover from — see <a href="<?php echo base_url('Help_center/article/there-is-no-account-to-create'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">There is no account to create</a>.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">An iPhone-to-iPhone transfer or an encrypted iPhone backup also carries the app's local data across, including calculator history.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What does not come across</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16"><strong class="font-semibold text-gray-900 dark:text-white">Scan history</strong> is local to a device and is not synced or transferred. It rolls off after 30 days anyway, so there is rarely anything to move.</p>

        <?php endif; ?>

        <!-- Did this answer your question -->
        <div class="border-t border-gray-200 dark:border-gray-800 pt-8 pb-16">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-6">Did this answer your question?</h3>
            <div class="flex flex-wrap gap-4">
                <button class="bg-[#e63329] hover:bg-[#d12b21] text-white font-medium py-3 px-8 rounded-full transition-colors">
                    No, I need help
                </button>
                <a href="<?php echo base_url('Help_center/devices'); ?>" class="bg-white dark:bg-[#161616] hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-900 dark:text-white font-medium py-3 px-8 rounded-full border border-gray-300 dark:border-gray-700 transition-colors inline-block">
                    Back to Subscrr Across Devices
                </a>
            </div>
        </div>

        <!-- More in Subscrr Across Devices -->
        <div>
            <h3 class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-6">More in Subscrr Across Devices</h3>
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