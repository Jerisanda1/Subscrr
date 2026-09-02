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
            <a href="<?php echo base_url('Help_center/how_tos'); ?>" class="hover:text-gray-700 dark:hover:text-gray-300">How Tos</a>
            <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="text-gray-900 dark:text-gray-100 font-medium"><?php echo $title; ?></span>
        </nav>

        <!-- Judul & Deskripsi -->
        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white mb-4"><?php echo $title; ?></h1>
        <p class="text-lg text-gray-600 dark:text-gray-400 mb-8 font-semibold"><?php echo $description; ?></p>

        <!-- Konten Artikel (manual per slug) -->
        <?php if ($slug === 'edit-or-delete-a-subscription'): ?>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Edit</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Tap the subscription in the list to open it, then edit any field: name, price, currency, billing period, next charge date, category or icon. Save and every total recalculates immediately.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">The field worth revisiting is <strong class="font-semibold text-gray-900 dark:text-white">price</strong>. Services raise prices quietly, and a tracker with last year's number tells you a comforting lie.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Delete</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Open the subscription and choose delete, or swipe it in the list. Deleting removes it from every total and cancels its scheduled reminder.</p>

            <div class="bg-[#fdf1ec] dark:bg-[#2d1f1a] border-l-4 border-[#d64541] dark:border-orange-500 p-5 rounded-r-md mb-12 text-lg text-gray-800 dark:text-gray-200 leading-relaxed text-[15px]">
                Deleting a subscription in Subscrr does <strong class="font-semibold">not</strong> cancel it with the provider. Cancel it where you bought it first — for anything billed by Apple, that is iOS Settings → your name → Subscriptions.
            </div>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Cancelled but still running</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">If you have cancelled a service that is paid until the end of the period, it is usually cleanest to leave it in Subscrr until the last day, so the forecast stays truthful, and delete it after.</p>

        <?php elseif ($slug === 'use-a-custom-billing-interval'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Besides the usual presets, Subscrr supports a <strong class="font-semibold text-gray-900 dark:text-white">custom interval</strong>: every <em>N</em> days, weeks, months or years.</p>
            <ol class="list-decimal pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>Open the subscription (or create one) and tap the billing period.</li>
                <li>Choose the custom option.</li>
                <li>Set the number and the unit — for example every <strong class="font-semibold text-gray-900 dark:text-white">3 months</strong> for quarterly hosting, or every <strong class="font-semibold text-gray-900 dark:text-white">10 days</strong> for something genuinely odd.</li>
            </ol>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Custom intervals work in the calculator too, which is where they earn their keep: a haircut every five weeks is not a subscription, but it costs like one.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">How totals are calculated</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Whatever interval you pick, Subscrr converts it to a yearly figure and derives the per-day, per-week and per-month numbers from that. This is why the numbers on different screens always agree with each other — they all come from the same annual base. See <a href="<?php echo base_url('Help_center/article/cost-per-day-month-year'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Cost per day, month and year</a>.</p>

        <?php elseif ($slug === 'organise-with-categories-and-tags'): ?>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Categories</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Every subscription and every scanned item belongs to a <strong class="font-semibold text-gray-900 dark:text-white">category</strong> — food, cafe, transport, entertainment and so on. Categories are a fixed list on purpose: they are what the pie chart on the dashboard and the donut in statistics are built from, and a list that everyone invents themselves produces charts nobody can read.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Set a category when you create a subscription, or change it later by opening it. Scanned receipt items are categorised automatically and can be <a href="<?php echo base_url('Help_center/article/recategorise-a-receipt-item'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">corrected in a tap</a>.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Tags</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Tags are yours to invent, and they live in the calculator. Use them to group expenses by whatever question you are actually asking — <code class="text-sm bg-gray-100 dark:bg-gray-800 px-1.5 py-0.5 rounded">work</code>, <code class="text-sm bg-gray-100 dark:bg-gray-800 px-1.5 py-0.5 rounded">kids</code>, <code class="text-sm bg-gray-100 dark:bg-gray-800 px-1.5 py-0.5 rounded">car</code>, <code class="text-sm bg-gray-100 dark:bg-gray-800 px-1.5 py-0.5 rounded">guilt</code>.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">An expense can carry several tags, and the AI scanner suggests tags from what it read on the receipt. Accept the ones that fit, ignore the rest.</p>

        <?php elseif ($slug === 'read-your-dashboard'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">The dashboard sits above your subscription list and answers one question: what does all of this cost?</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">The totals</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">The headline figure is your total for the selected period, in your display currency. Tap any subscription in the list below to <a href="<?php echo base_url('Help_center/article/edit-or-delete-a-subscription'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">edit or delete it</a>. Switch between per day, per month and per year — the per-year number is the one that changes minds.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Anything billed in another currency is converted at current rates before it is added in.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">The last two lines are different from the others: <strong class="font-semibold text-gray-900 dark:text-white">Paid this month</strong> is what has already gone, and <strong class="font-semibold text-gray-900 dark:text-white">Left this month</strong>: not an average but a forecast, the charges still due before the month ends, at their full prices. Ticking a charge off as <a href="<?php echo base_url('Help_center/article/mark-a-payment-as-paid'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">paid</a> moves it from one line to the other. If your money runs from payday to payday rather than from the 1st, set <strong class="font-semibold text-gray-900 dark:text-white">Month starts on</strong> in Settings and this line counts up to the next such day instead.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">The breakdown</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">The chart splits the same total by <strong class="font-semibold text-gray-900 dark:text-white">category</strong>. It is there to show concentration rather than detail: most people find that two categories account for most of the money, and they are rarely the two they would have guessed.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Below the numbers</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Further down the Overview tab sits the <strong class="font-semibold text-gray-900 dark:text-white">Daily Affirmation</strong> — a calm thought about money, new every day. It starts closed; tap <strong class="font-semibold text-gray-900 dark:text-white">Reveal</strong> to open it, and from there you can share it or send it to your Lock Screen. See <a href="<?php echo base_url('Help_center/article/put-affirmation-on-lock-screen'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Put the affirmation on your Lock Screen</a>.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What is not in it</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">The dashboard counts <strong class="font-semibold text-gray-900 dark:text-white">subscriptions only</strong>. Habits you entered in the calculator and receipts you scanned are counted separately, because they answer a different question. See <a href="<?php echo base_url('Help_center/article/read-the-spending-statistics'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Read the spending statistics</a>.</p>

        <?php elseif ($slug === 'cost-per-day-month-year'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Subscrr shows every recurring cost across four horizons: per day, per week, per month and per year. The same four appear on <a href="<?php echo base_url('Help_center/article/read-your-dashboard'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">your dashboard</a>, for everything at once.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">This is not decoration. A price only becomes meaningful in comparison, and different intervals are persuasive about different things:</p>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">Per day</strong> makes small, frequent costs visible — the €4 coffee is €1,000 a year.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Per month</strong> is how most people budget.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Per year</strong> is how you decide whether something is worth keeping.</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">How it is calculated</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Every cost — whatever its billing period, <a href="<?php echo base_url('Help_center/article/use-a-custom-billing-interval'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">including custom intervals</a> — is first converted to an annual amount. Every other figure is derived from that annual number.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">The practical consequence: the numbers on different screens can never disagree with each other, and a yearly subscription and a monthly one can be compared directly.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">If a subscription is <a href="<?php echo base_url('Help_center/article/split-a-subscriptions-cost'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">shared with other people</a>, all of these figures count only your share of it.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">A <strong class="font-semibold text-gray-900 dark:text-white">one-time payment</strong> is left out of these figures as well: it is a single charge, not a rate. A subscription can also sit outside the totals entirely: switch on <strong class="font-semibold text-gray-900 dark:text-white">Exclude from totals</strong> when editing it. It stays in the list and keeps reminding you, but no figure counts it. That is the right setting for things someone pays back, like a work subscription. A small crossed-out eye marks it in the list, so a total that looks smaller than the list always has a visible reason.</p>

            <div class="bg-[#fdf1ec] dark:bg-[#2d1f1a] border-l-4 border-[#d64541] dark:border-orange-500 p-5 rounded-r-md mb-12 text-lg text-gray-800 dark:text-gray-200 leading-relaxed text-[15px]">
                A month is treated as one twelfth of a year, not as 30 days. Over a full year that is the accurate way round; it is why the per-month figure for a weekly cost is not exactly four times the weekly one.
            </div>

        <?php elseif ($slug === 'calculate-what-a-habit-costs'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">The calculator is for money that is not a subscription but behaves like one.</p>
            <ol class="list-decimal pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>Open the <strong class="font-semibold text-gray-900 dark:text-white">Calculator</strong> tab and create an expense.</li>
                <li>Enter what it costs <strong class="font-semibold text-gray-900 dark:text-white">once</strong> — one coffee, one taxi, one lunch.</li>
                <li>Set <strong class="font-semibold text-gray-900 dark:text-white">how often</strong>: daily, weekly, monthly, or a <a href="<?php echo base_url('Help_center/article/use-a-custom-billing-interval'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">custom interval</a>.</li>
                <li>If it only happens on certain days, pick the <strong class="font-semibold text-gray-900 dark:text-white">days of the week</strong>. Weekday-only coffee is a very different number from seven-day coffee.</li>
                <li>Add <a href="<?php echo base_url('Help_center/article/organise-with-categories-and-tags'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">tags</a> if you want to group it later.</li>
            </ol>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Subscrr shows the same habit per day, per week, per month and per year.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">One-off purchases</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Not everything repeats. When you add an expense from a <a href="<?php echo base_url('Help_center/article/scan-a-receipt-with-ai-spend'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">scanned receipt</a> it is saved as a <strong class="font-semibold text-gray-900 dark:text-white">one-off</strong> by default, so a single large purchase does not inflate your monthly picture. If it really does repeat, change the frequency in one tap.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">History</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">Your calculations are kept so you can come back to them, compare, and watch a number change after you change a habit.</p>

        <?php elseif ($slug === 'scan-a-receipt-with-ai-spend'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">AI Spend is the fastest way to know where the money actually went, and it needs no bank connection.</p>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Scan</h2>
            <ol class="list-decimal pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>Open the <strong class="font-semibold text-gray-900 dark:text-white">Calculator</strong> tab and choose the AI scan.</li>
                <li>Point the camera at a receipt, or pick a screenshot from your photo library — a bank app's transaction screen works as well as paper.</li>
                <li>Wait a moment while it is recognised.</li>
            </ol>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Straight from the app icon</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Touch and hold the Subscrr icon on the Home Screen and choose <strong class="font-semibold text-gray-900 dark:text-white">Scan receipt</strong>. The app opens with the camera already up, so a paper receipt goes in without passing through the dashboard. The shortcut is there on iPhone and iPad, wherever there is a camera to scan with.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What you get back</h2>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">The total</strong>, and the currency it was in.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">The line items</strong>, each with its own price.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Categories</strong>, assigned automatically item by item — the way a bank categorises transactions.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Suggested tags</strong>, and the merchant and date where they are legible.</li>
            </ul>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Everything is editable before you save. Fix a misread price, <a href="<?php echo base_url('Help_center/article/recategorise-a-receipt-item'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">move an item to another category</a>, drop a line you do not want counted.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">When a line looks like a subscription</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">If the scan finds a recurring charge — a streaming service in a bank statement, say — it appears in a <strong class="font-semibold text-gray-900 dark:text-white">Looks like a subscription</strong> block on the results screen. Nothing is added by itself. Tap the line and decide:</p>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">Add</strong> — confirm the amount, the billing period and the first payment date, and it joins your subscription list.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Not a subscription</strong> — Subscrr remembers that merchant and stops suggesting it in future scans.</li>
            </ul>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Subscriptions already on your list are never suggested again.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Cost</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">AI scanning is a Premium feature, with <strong class="font-semibold text-gray-900 dark:text-white">one free scan</strong> so you can judge the quality yourself. See <a href="<?php echo base_url('Help_center/article/what-is-free-and-what-is-premium'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">What is free and what is Premium</a>.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Getting good results</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Flat receipt, even light, whole receipt in frame, no fingers over the total. If a scan comes back wrong, see <a href="<?php echo base_url('Help_center/article/receipt-scan-failed-or-misread'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Receipt scan failed or misread</a>.</p>
            
            <div class="bg-[#fdf1ec] dark:bg-[#2d1f1a] border-l-4 border-[#d64541] dark:border-orange-500 p-5 rounded-r-md mb-12 text-lg text-gray-800 dark:text-gray-200 leading-relaxed text-[15px]">
                Receipts are processed for recognition only. They are not stored on our servers and are never used for advertising. See <a href="<?php echo base_url('Help_center/article/what-happens-to-scanned-receipts'); ?>" class="text-orange-600 underline">What happens to scanned receipts</a>.
            </div>

        <?php elseif ($slug === 'recategorise-a-receipt-item'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Automatic categorisation is right most of the time and confidently wrong some of the time — a receipt line says <code class="text-sm bg-gray-100 dark:bg-gray-800 px-1.5 py-0.5 rounded">LATTE GRD 2X</code>, and no amount of intelligence knows whether that was a treat or a work expense.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">On the scan result screen, tap the item and choose a different category. The breakdown on that screen updates immediately, and the corrected category is what gets saved into your <a href="<?php echo base_url('Help_center/article/browse-your-scan-history'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">history</a> and <a href="<?php echo base_url('Help_center/article/read-the-spending-statistics'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">statistics</a>.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Numbers not adding up rather than sitting in the wrong bucket? See <a href="<?php echo base_url('Help_center/article/scan-wrong-total-or-missing-items'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">a scan has the wrong total or missing items</a>.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">You can also:</p>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">Edit a price</strong> the scanner misread.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Remove a line</strong> entirely, so it is not counted at all.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Change the total</strong>, if the receipt total itself was not legible.</li>
            </ul>

            <div class="bg-[#fdf1ec] dark:bg-[#2d1f1a] border-l-4 border-[#d64541] dark:border-orange-500 p-5 rounded-r-md mb-12 text-lg text-gray-800 dark:text-gray-200 leading-relaxed text-[15px]">
                Correct it before you save. The result screen is the moment where a scan becomes data — it is much easier to fix it there than to work out later why a category looks strange.
            </div>

        <?php elseif ($slug === 'browse-your-scan-history'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Scans are kept in a history so a scan is not a one-time answer but a record.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">The history is grouped <strong class="font-semibold text-gray-900 dark:text-white">by day</strong>. Open a day and you see each scan with:</p>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>the <strong class="font-semibold text-gray-900 dark:text-white">screenshot</strong> of the original receipt,</li>
                <li>the <strong class="font-semibold text-gray-900 dark:text-white">total</strong>,</li>
                <li>the <strong class="font-semibold text-gray-900 dark:text-white">items</strong> it contained, with their categories.</li>
            </ul>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">That combination is what makes it useful weeks later — the number alone tells you nothing, the picture reminds you what it was.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">How long it is kept</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Scan history lives <strong class="font-semibold text-gray-900 dark:text-white">on your device for 30 days</strong>, then rolls off. It is not on a server, so nothing to delete remotely. See <a href="<?php echo base_url('Help_center/article/what-happens-to-scanned-receipts'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">What happens to scanned receipts</a>.</p>

            <div class="bg-[#fdf1ec] dark:bg-[#2d1f1a] border-l-4 border-[#d64541] dark:border-orange-500 p-5 rounded-r-md mb-12 text-lg text-gray-800 dark:text-gray-200 leading-relaxed text-[15px]">
                A scan you want to keep as a permanent record belongs in the calculator as a saved expense, or in your photo library. The 30-day window is for spotting patterns, not for archiving.
            </div>

        <?php elseif ($slug === 'read-the-spending-statistics'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Once you have scanned a few receipts, statistics start to answer the question that the individual scans cannot: <strong class="font-semibold text-gray-900 dark:text-white">what do I actually spend on?</strong></p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">By day</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">A bar chart of the last 30 days. Each bar is a day's scanned spending. What you are looking for is not the average but the shape: the spikes, and whether they cluster on particular days of the week.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">By category</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">A donut chart of the same 30 days, split by <a href="<?php echo base_url('Help_center/article/organise-with-categories-and-tags'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">category</a>. This is the screen that changes behaviour, because the categories that dominate are usually not the ones people expect.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Why it does not match the calculator</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">They answer different questions:</p>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>The <strong class="font-semibold text-gray-900 dark:text-white">calculator</strong> shows what your regular habits <em>would</em> cost per month, as a forecast.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Statistics</strong> show what you <em>did</em> spend on scanned receipts over the last 30 days.</li>
            </ul>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">Scan on the days you spend and the two converge. Scan sporadically and statistics will show less than reality — they can only count what you gave them.</p>

        <?php elseif ($slug === 'add-widgets-home-lock-screen'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">A subscription total you have to open an app to see is a total you will not look at.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What you can add</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Subscrr has two widgets, and both come in every size iOS offers — small, medium and large on the home screen, plus the small lock screen shapes (inline above the clock, circular, rectangular).</p>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">Next payment</strong> — your upcoming subscription charges at a glance. The one worth adding first.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Daily affirmation</strong> — a calm thought about money, new every day. See <a href="<?php echo base_url('Help_center/article/put-affirmation-on-lock-screen'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Put the affirmation on your Lock Screen</a>.</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Home screen</h2>
            <ol class="list-decimal pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>Touch and hold an empty area of the home screen until the icons jiggle.</li>
                <li>Tap the plus button in the corner.</li>
                <li>Search for <strong class="font-semibold text-gray-900 dark:text-white">Subscrr</strong>, then swipe between <strong class="font-semibold text-gray-900 dark:text-white">Next payment</strong> and <strong class="font-semibold text-gray-900 dark:text-white">Daily affirmation</strong> and pick a size.</li>
                <li>Add it, then place it where you look most often.</li>
            </ol>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Lock screen</h2>
            <ol class="list-decimal pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>Touch and hold the lock screen and tap <strong class="font-semibold text-gray-900 dark:text-white">Customise</strong>.</li>
                <li>Tap the widget area under the clock, or the thin strip above it.</li>
                <li>Choose Subscrr and pick the widget you want.</li>
            </ol>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">What each widget shows and how often it refreshes: <a href="<?php echo base_url('Help_center/article/widgets-on-the-home-and-lock-screen'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Widgets on the home and lock screen</a>.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Apple Watch</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">The same information is available as watch complications — see <a href="<?php echo base_url('Help_center/article/subscrr-on-apple-watch'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Subscrr on Apple Watch</a>.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">If a widget shows stale numbers</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">iOS decides when widgets refresh, and it is stingy about it on Low Power Mode. See <a href="<?php echo base_url('Help_center/article/widgets-not-updating'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Widgets are not updating</a>.</p>

        <?php elseif ($slug === 'reminder-settings'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Everything below lives in <strong class="font-semibold text-gray-900 dark:text-white">Settings → Notifications</strong>.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Pick the time</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Reminders arrive at 10:00 by default. Change <strong class="font-semibold text-gray-900 dark:text-white">Time</strong> if your mornings are meetings and your money decisions happen in the evening — a reminder you swipe away unread might as well not exist.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">How far ahead, by billing cycle</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Subscriptions fall into two groups, and each has its own warning schedule:</p>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">Monthly and more often</strong> — weekly and monthly plans. Out of the box: a day before.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Quarterly and less often</strong> — quarterly, semi-annual and yearly plans. Out of the box: a week before, then again a day before. Big charges deserve more runway, and cancelling an annual plan usually takes more than an evening.</li>
            </ul>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Open a group and tick as many lead times as you want, from the day itself to a month ahead. Every tick is a separate reminder for every renewal in that group. Untick everything and that group simply stops reminding.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Several charges, one notification</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">When a few reminders land on the same day, they arrive as <strong class="font-semibold text-gray-900 dark:text-white">one</strong> notification with the count and, if the currencies match, the total. Three separate pings before a busy morning teach you to swipe them away; one quiet summary does not.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Mute one subscription</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Open the subscription and switch off <strong class="font-semibold text-gray-900 dark:text-white">Remind about this subscription</strong>. Everything else keeps notifying you as before. This is the right move for things you have deliberately decided to keep — you do not need an annual nudge about a service you would never cancel.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What a reminder is built on</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Reminders are scheduled from the <strong class="font-semibold text-gray-900 dark:text-white">next charge date</strong> on the subscription. If a date is wrong, the reminder will be wrong too, so correcting the date is the fix, not reinstalling the app.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">Not receiving them at all? <a href="<?php echo base_url('Help_center/article/reminders-do-not-arrive'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Reminders do not arrive</a>.</p>

        <?php elseif ($slug === 'put-affirmation-on-lock-screen'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">The daily affirmation lives on the Overview tab, but a calm thought helps most in the moments between things — which is exactly when you are looking at the Lock Screen, not at an app.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Go Live</h2>
            <ol class="list-decimal pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>Open <strong class="font-semibold text-gray-900 dark:text-white">Overview</strong> and find the Daily Affirmation card.</li>
                <li>Tap the <strong class="font-semibold text-gray-900 dark:text-white">play</strong> button.</li>
                <li>The affirmation appears on the <strong class="font-semibold text-gray-900 dark:text-white">Lock Screen</strong> and in the <strong class="font-semibold text-gray-900 dark:text-white">Dynamic Island</strong> on supported iPhones.</li>
            </ol>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">You do not have to reveal the phrase first — going live works with the card still closed. It stays there for up to <strong class="font-semibold text-gray-900 dark:text-white">8 hours</strong>, showing how much time is left, and the line reads "In focus". Stop it earlier with the same button, or by swiping the card away on the Lock Screen.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">The spoiler travels with you</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Until you have opened today's affirmation in the app, the widget and the live card do not give it away: they show a cloud of particles and "Tap to reveal". Tapping either one opens the app and reveals the phrase, and the text appears everywhere at once.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Changed your mind? The <strong class="font-semibold text-gray-900 dark:text-white">eye</strong> button on the card hides the phrase again — the spoiler comes back on the widget and in the Dynamic Island until you reveal it next time. At midnight the phrase changes and the spoiler returns by itself.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Tap the trail</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">In the expanded Dynamic Island the particle trail responds to a tap: the frames advance and a short wave runs along it. This is deliberate, not decorative — the Dynamic Island cannot run a continuous animation for a third-party app, so movement happens when you ask for it.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">The widget</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">There is also a <strong class="font-semibold text-gray-900 dark:text-white">Daily affirmation</strong> home screen widget, with lock screen sizes too. It changes at midnight along with the app and needs nothing to keep running. Adding widgets: <a href="<?php echo base_url('Help_center/article/add-widgets-home-lock-screen'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">Add widgets to your home and lock screen</a>.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Make it yours</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">In <strong class="font-semibold text-gray-900 dark:text-white">Settings → Live Activity</strong> you choose how the affirmation looks everywhere at once — the live card and the widget share one appearance:</p>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">Theme</strong> — Gradient (the signature orange), Dark or Paper.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Font</strong> — System, Serif, Rounded or Mono.</li>
            </ul>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Changes apply immediately, including to a live card that is already running.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">If Go Live does nothing</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">Live Activities can be switched off per app. Check <strong class="font-semibold text-gray-900 dark:text-white">iOS Settings → Subscrr → Live Activities</strong>.</p>

        <?php elseif ($slug === 'search-your-subscriptions'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Once the list grows past a dozen entries, scrolling stops being a way to find things. Search is.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Where it is</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Open the <strong class="font-semibold text-gray-900 dark:text-white">Subscriptions</strong> tab. At the bottom of the list, above the tab bar, sits a search bar. Tap it and start typing.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What it matches</h2>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>The subscription's <strong class="font-semibold text-gray-900 dark:text-white">name</strong> — a few letters are enough, case does not matter.</li>
                <li>The <strong class="font-semibold text-gray-900 dark:text-white">category</strong> name — type "entertainment" and everything filed there comes up.</li>
            </ul>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Tap a result to open the subscription, exactly as from the list. Before you type anything the sheet shows the whole list, so it doubles as a quick flat view when your list is grouped by category.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What it does not search</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">The catalog of services you pick from when adding a subscription has its own search inside the add screen. The bar on the Subscriptions tab looks only through what you already track.</p>

        <?php elseif ($slug === 'split-a-subscriptions-cost'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">A family Netflix plan paid from your card is not really <em>your</em> expense — most of it comes back from the people you share it with. Without telling the app that, every total it shows you is inflated.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Set it up</h2>
            <ol class="list-decimal pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li>Open the subscription and tap edit, or set it while adding one.</li>
                <li>In <strong class="font-semibold text-gray-900 dark:text-white">Details</strong>, find <strong class="font-semibold text-gray-900 dark:text-white">Shared with others</strong> and step the count up to how many people share the cost, yourself included. "Just me" means no split.</li>
                <li>Save.</li>
            </ol>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What changes</h2>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">Your totals</strong> — the dashboard, statistics and widgets count only your share: the price divided by the number of people.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">The subscription's page</strong> — shows the full price at the top (that is what leaves the card) with your share underneath, and the per-day, per-month and per-year breakdown is computed from your share. "Spent so far" is your share too.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">The list</strong> — a small <code class="text-sm bg-gray-100 dark:bg-gray-800 px-1.5 py-0.5 rounded">1/3</code>-style badge marks split subscriptions.</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What does not change</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4"><strong class="font-semibold text-gray-900 dark:text-white">Reminders still show the full charge.</strong> The card gets billed for the whole amount, and the reminder's job is to match what the bank is about to take — collecting from your friends is between you and them.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">The split is an even one. If your group shares unevenly, set the count that best approximates your part, or track your exact share as a custom price.</p>

        <?php elseif ($slug === 'mark-a-payment-as-paid'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Not every payment leaves your card by itself. Rent, a tutor, your share of a family plan — the date arrives, but whether the money moved is something only you know. And sometimes you pay ahead.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Tick it off</h2>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">From the list</strong>: swipe a subscription to the right and tap <strong class="font-semibold text-gray-900 dark:text-white">Mark as paid</strong>. A green <strong class="font-semibold text-gray-900 dark:text-white">Paid</strong> badge appears and the ring around its icon turns green.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">From the subscription</strong>: open it and switch on the charge under <strong class="font-semibold text-gray-900 dark:text-white">This month</strong>.</li>
            </ul>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Swiping again, or switching the toggle back, undoes it.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What it changes</h2>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">Left this month</strong> on the Overview drops by that amount, and <strong class="font-semibold text-gray-900 dark:text-white">Paid this month</strong> rises by it. Together they answer "how much has gone, how much is still coming".</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">The reminder for that charge does not fire.</strong> You have already dealt with it; being nudged again is noise.</li>
            </ul>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Charges whose date has already passed count as paid automatically — an automatic renewal happens on its own, and asking you to confirm every past month would be busywork. Those cannot be un-ticked.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What it does not change</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">Monthly and yearly totals stay put. They answer what a subscription costs over time, and one payment being settled early does not change that.</p>

        <?php elseif ($slug === 'set-a-duration-or-a-one-off-payment'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">A prepaid year of a course, a gym membership that ends in June, a single large purchase: none of these repeat forever, and treating them as endless inflates every total.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">The three options</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">When adding or editing a subscription, open <strong class="font-semibold text-gray-900 dark:text-white">Duration</strong>:</p>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">Ongoing</strong> — the default. Bills until you delete it.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">Until a date</strong> — pick the last day it can bill. Keeps repeating until then.</li>
                <li><strong class="font-semibold text-gray-900 dark:text-white">One-time payment</strong> — a single charge on the start date.</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What happens after the end date</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">The subscription stops producing charges, drops out of monthly and yearly totals, and stops reminding you. It stays in the list, marked <strong class="font-semibold text-gray-900 dark:text-white">Ended</strong>, so the history of what you paid is not lost. Delete it whenever you want it gone.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">How a one-off is counted</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">A one-time payment is not a rate, so it is left out of the per-month and per-year figures. It appears where it belongs: in <strong class="font-semibold text-gray-900 dark:text-white">Left this month</strong> until it is paid, and in the list of upcoming charges. It is labelled <strong class="font-semibold text-gray-900 dark:text-white">One-time</strong> instead of a billing period.</p>

        <?php elseif ($slug === 'set-aside-for-annual-plans'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Annual plans are the ones that hurt: eleven quiet months, then a single large charge. Spread out, the same amount is unremarkable — the card on the Overview tab does that arithmetic.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What the card shows</h2>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                <li><strong class="font-semibold text-gray-900 dark:text-white">Put away X a month</strong> — the total of every quarterly-and-longer plan, converted to a monthly figure.</li>
                <li>Under it, each plan with <strong class="font-semibold text-gray-900 dark:text-white">how much should already be set aside by now</strong>, based on how far into its billing cycle it is, and a bar showing that progress.</li>
            </ul>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Only long cycles appear here. Monthly plans do not need a fund; they are already a monthly expense.</p>

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">What it is not</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">There is no envelope to move money into and nothing to tick off. Subscrr does not touch your accounts — this is a figure to act on in your own bank, not a balance it keeps. It pairs with the reminder that arrives <a href="<?php echo base_url('Help_center/article/turn-on-renewal-reminders'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">a week before a yearly charge</a>: by then the money should already be there.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">Subscriptions you have <a href="<?php echo base_url('Help_center/article/cost-per-day-month-year'); ?>" class="text-orange-600 dark:text-orange-400 underline decoration-orange-200 dark:decoration-orange-800 hover:decoration-orange-500">excluded from totals</a>, and one-off payments, are left out of this card too.</p>

        <?php elseif ($slug === 'change-the-app-icon'): ?>

            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Open <strong class="font-semibold text-gray-900 dark:text-white">Settings</strong> and scroll to <strong class="font-semibold text-gray-900 dark:text-white">App icon</strong>. Six options: <strong class="font-semibold text-gray-900 dark:text-white">Classic, Midnight, Cream, Sunset, Sand</strong> and <strong class="font-semibold text-gray-900 dark:text-white">Blush</strong>. Swipe the row to see them all, tap one and the Home Screen changes immediately; iOS shows its own confirmation the first time.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-4">All six are free.</p>
            <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-16">If the icon does not appear to change, leave the app and return to the Home Screen — iOS sometimes redraws it a moment later.</p>

        <?php endif; ?>

        <!-- Did this answer your question -->
        <div class="border-t border-gray-200 dark:border-gray-800 pt-8 pb-16">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-6">Did this answer your question?</h3>
            <div class="flex flex-wrap gap-4">
                <a href="<?php echo base_url('Help_center/contact'); ?>" class="bg-[#e63329] hover:bg-[#d12b21] text-white font-medium py-3 px-8 rounded-full transition-colors inline-block">
                    No, I need help
                </a>
                <a href="<?php echo base_url('Help_center/how_tos'); ?>" class="bg-white dark:bg-[#161616] hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-900 dark:text-white font-medium py-3 px-8 rounded-full border border-gray-300 dark:border-gray-700 transition-colors inline-block">
                    Back to How Tos
                </a>
            </div>
        </div>

        <!-- More in How Tos -->
        <div>
            <h3 class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-6">More in How Tos</h3>
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