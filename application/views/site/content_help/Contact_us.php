<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us - Subscrr</title>
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
<body class="bg-[#FAF9F6] dark:bg-[#0a0a0a] transition-colors duration-300 text-gray-900 font-sans min-h-screen flex flex-col">
    
    <?php $this->load->view('layout/nav_help.php'); ?>
   <section class="max-w-6xl mx-auto px-6 lg:px-8 pb-24 pt-10">
    
     <nav class="flex items-center gap-1 text-sm text-gray-500 mb-8 pt-10">
            <a href="<?php echo base_url('Help_center'); ?>" class="hover:text-orange-500">Home</a>
            <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="text-gray-900 font-medium dark:text-gray-100 font-medium">Contact</span>
        </nav>
        
    <!-- Judul & Deskripsi -->
    <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white mb-4">Contact us</h1>
    <p class="text-lg text-gray-600 dark:text-gray-400 mb-12">Subscrr is built by a very small team. You will be talking to the person who writes the code.</p>

<!-- Kartu Email & Telegram -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
    <!-- Kartu Email -->
    <div class="bg-white dark:bg-[#161616] rounded-3xl p-6 border border-transparent shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-orange-500 hover:shadow-xl hover:shadow-orange-200/50">
        <p class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-widest mb-3">EMAIL</p>
        <a href="mailto:hi@subscrr.app" class="text-2xl font-bold text-orange-600 dark:text-orange-500 hover:underline mb-3 block">hi@subscrr.app</a>
        <p class="text-base text-gray-600 dark:text-gray-400 leading-relaxed">Best for bugs, billing and anything with a screenshot. Usually answered within one business day.</p>
    </div>

    <!-- Kartu Telegram -->
    <div class="bg-white dark:bg-[#161616] rounded-3xl p-6 border border-gray-200 dark:border-gray-800 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-orange-500 hover:shadow-xl hover:shadow-orange-200/50">
        <p class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-widest mb-3">TELEGRAM</p>
        <a href="https://t.me/subscrr_app" target="_blank" class="text-2xl font-bold text-orange-600 dark:text-orange-500 hover:underline mb-3 block">@subscrr_app</a>
        <p class="text-base text-gray-600 dark:text-gray-400 leading-relaxed">Release notes, metrics and what is being built next. Feature requests are read here too.</p>
    </div>
</div>

    <!-- Bagian: Before you write -->
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Before you write</h2>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-8">Four problems account for most of the mail, and each has an answer that works faster than we do:</p>
    <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-12">
        <li><a href="<?= base_url('Help_center/article/reminders-do-not-arrive') ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Reminders do not arrive</a> — almost always a Focus mode or Scheduled Summary.</li>
        <li><a href="<?= base_url('Help_center/article/subscriptions-not-on-other-device') ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Subscriptions missing on another device</a> — iCloud, not us.</li>
        <li><a href="<?= base_url('Help_center/article/paid-but-premium-not-active') ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Paid, but Premium is not active</a> — Restore Purchases fixes most cases.</li>
        <li><a href="<?= base_url('Help_center/article/app-crashes-or-freezes') ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">The app crashes or freezes</a> — three steps that fix nearly all of it.</li>
    </ul>

    <!-- Bagian: What to include -->
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What to include</h2>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-8">Three lines are enough, and they save a whole round trip:</p>
    <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-12">
        <li>Your iOS version and device (Settings — General — About).</li>
        <li>What you were doing when it went wrong, and what you expected instead.</li>
        <li>A screenshot or a screen recording, if there is anything to see.</li>
    </ul>

    <!-- Bagian: Billing and refunds -->
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Billing and refunds</h2>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-12">Premium is sold by Apple, not by us, so cancellations and refunds go through your Apple Account. See <a href="<?= base_url('Help_center/article/cancel-premium') ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Cancel Premium</a> and <a href="<?= base_url('Help_center/article/refunds') ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Refunds</a> — then write to us anyway if something in the app misled you.</p>

    <!-- Bagian: Feature requests -->
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Feature requests</h2>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-12">Genuinely welcome, and they genuinely shape the roadmap. Tell us the problem you are trying to solve rather than the button you want, it usually leads somewhere better.</p>

    <!-- Bagian: Press and partnerships -->
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Press and partnerships</h2>
    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">Same address: <a href="mailto:hi@subscrr.app" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">hi@subscrr.app</a>.</p>

</section>
    <?php $this->load->view('layout/foot_help.php'); ?>

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