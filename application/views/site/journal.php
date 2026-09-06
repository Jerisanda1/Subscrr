<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>The Subscrr Journal</title>

    <link
        rel="stylesheet"
        href="<?= base_url('assets/output.css') ?>"
    >

    <!-- Favicon -->
    <link
        rel="icon"
        type="image/png"
        href="<?= base_url('assets/uploads/icon/icon_Subscrr.png') ?>"
    >

    <?php $this->load->view('layout/navbar'); ?>


    <?php
    /*
    =====================================================
    FILTER TOPIC JOURNAL
    =====================================================
    */

    $topic = isset($_GET['topic']) && is_string($_GET['topic'])
        ? trim($_GET['topic'])
        : '';

    $allowed_topics = [
        'all',
        'money',
        'habits',
        'guides',
        'product'
    ];

    // Jika topic tidak valid, kembali ke All
    if (!in_array($topic, $allowed_topics, true)) {
        $topic = 'all';
    }
    ?>


    <style>

        /* =====================================================
           RESET & BACKGROUND (LIGHT MODE DEFAULT)
        ====================================================== */

        body {
            background-color: #f4f3ef;
            color: #1a1a1a;
        }

        /* Dark Mode Override */
        .dark body {
            background-color: #0b0b0b;
            color: #ffffff;
        }


        /* =====================================================
           JOURNAL WRAPPER
        ====================================================== */

        .journal-wrapper {
            padding-top: 130px;
            padding-bottom: 80px;
            width: 100%;
        }


        /* =====================================================
           HEADER
        ====================================================== */

        .j-lede {
            margin-bottom: 35px;
        }

        .j-lede h2 {
            font-size: 52px;
            font-weight: 700;
            color: #1a1a1a;
            letter-spacing: -0.04em;
            line-height: 1;
        }

        .dark .j-lede h2 {
            color: #ffffff;
        }


        /* =====================================================
           LAYOUT
        ====================================================== */

        .journal-layout {
            display: flex;
            gap: 28px;
            align-items: flex-start;
        }


        /* =====================================================
           SIDEBAR
        ====================================================== */

        .journal-sidebar {
            width: 170px;
            flex-shrink: 0;
        }

        .journal-topics-title {
            font-size: 11px;
            font-weight: 700;
            color: #666666;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .dark .journal-topics-title {
            color: #666666;
        }

        .journal-topic-list {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .journal-topic-item {
            display: flex;
            align-items: center;
            padding: 10px 16px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            color: #555555;
            background: #ffffff;
            border: 1px solid #e5e5e5;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .dark .journal-topic-item {
            color: #a1a1a1;
            background: #161616;
            border: 1px solid #1f1f1f;
        }

        .journal-topic-item:hover {
            background: #e8e8e8;
            color: #000000;
        }

        .dark .journal-topic-item:hover {
            background: #222222;
            color: #ffffff;
        }

        .journal-topic-item.active {
            background: #ff331a;
            color: #ffffff;
            border-color: #ff331a;
        }

        .dark .journal-topic-item.active {
            background: #ff331a;
            color: #ffffff;
            border-color: #ff331a;
        }


        /* =====================================================
           MAIN CONTENT
        ====================================================== */

        .journal-main-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            gap: 28px;
            min-width: 0;
        }


        /* =====================================================
           PRIMARY GRID
           ARTIKEL SELALU KIRI
           GET THE APP SELALU KANAN
        ====================================================== */

        .journal-primary-grid {
            display: grid;
            grid-template-columns: minmax(0, 2fr) minmax(260px, 1fr);
            gap: 24px;
            align-items: start;
        }


        /* =====================================================
           FEATURED CARD
        ====================================================== */

        .featured-card {
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            text-decoration: none;
            border: 1px solid #e5e5e5;
            transition: transform 0.3s ease;
            min-width: 0;
        }

        .dark .featured-card {
            background: #141414;
            border: 1px solid #1f1f1f;
        }

        .featured-card:hover {
            transform: translateY(-4px);
        }

        .featured-image-wrapper {
            width: 100%;
            height: 360px;
            overflow: hidden;
        }

        .featured-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .featured-card:hover .featured-image-wrapper img {
            transform: scale(1.05);
        }

        .featured-body {
            padding: 24px;
        }

        .featured-meta {
            font-size: 12px;
            font-weight: 700;
            color: #ff331a;
            letter-spacing: 0.03em;
            margin-bottom: 12px;
        }

        .featured-meta .date {
            color: #777777;
            margin-left: 6px;
            font-weight: 500;
        }

        .dark .featured-meta .date {
            color: #777777;
        }

        .featured-title {
            font-size: 26px;
            font-weight: 700;
            line-height: 1.2;
            color: #1a1a1a;
            margin-bottom: 12px;
            letter-spacing: -0.02em;
            transition: color 0.3s ease;
        }

        .dark .featured-title {
            color: #ffffff;
        }

        .featured-card:hover .featured-title {
            color: #ff331a;
        }

        .featured-desc {
            font-size: 14px;
            line-height: 1.5;
            color: #555555;
            margin-bottom: 18px;
        }

        .dark .featured-desc {
            color: #888888;
        }

        .featured-stats {
            font-size: 12px;
            color: #999999;
        }

        .dark .featured-stats {
            color: #555555;
        }


        /* =====================================================
           PROMO CARD
           SELALU DI KANAN
        ====================================================== */

        .promo-card {
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            border: 1px solid #e5e5e5;

            /* PENTING:
               promo selalu berada di kolom kanan */
            grid-column: 2;
        }

        .dark .promo-card {
            background: #141414;
            border: 1px solid #1f1f1f;
        }

        .promo-image-wrapper {
            background: transparent;
            padding: 0;
            height: 500px;
            width: 100%;
            overflow: hidden;
        }

        .promo-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            border-radius: 0;
        }

        .promo-body {
            padding: 24px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
        }

        .promo-title {
            font-size: 18px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 8px;
        }

        .dark .promo-title {
            color: #ffffff;
        }

        .promo-desc {
            font-size: 13px;
            line-height: 1.4;
            color: #555555;
            margin-bottom: 20px;
        }

        .dark .promo-desc {
            color: #888888;
        }

        .promo-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #ff331a;
            color: #ffffff;
            font-weight: 600;
            font-size: 14px;
            padding: 10px 20px;
            border-radius: 999px;
            text-decoration: none;
            width: fit-content;
            transition: background 0.2s ease;
        }

        .promo-btn:hover {
            background: #e02b14;
        }


        /* =====================================================
           SECONDARY ARTICLES
        ====================================================== */

        .journal-secondary-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
        }

        .article-card {
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            text-decoration: none;
            border: 1px solid #e5e5e5;
            transition: transform 0.3s ease;
        }

        .dark .article-card {
            background: #141414;
            border: 1px solid #1f1f1f;
        }

        .article-card:hover {
            transform: translateY(-4px);
        }

        .article-image-wrapper {
            width: 100%;
            aspect-ratio: 1 / 0.8;
            overflow: hidden;
            background: #f0f0f0;
        }

        .dark .article-image-wrapper {
            background: #1e1e1e;
        }

        .article-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .article-card:hover .article-image-wrapper img {
            transform: scale(1.05);
        }

        .article-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .article-meta {
            font-size: 11px;
            font-weight: 700;
            color: #ff331a;
            letter-spacing: 0.03em;
            margin-bottom: 8px;
        }

        .article-meta .date {
            color: #777777;
            margin-left: 6px;
            font-weight: 500;
        }

        .dark .article-meta .date {
            color: #777777;
        }

        .article-title {
            font-size: 18px;
            font-weight: 700;
            line-height: 1.3;
            color: #1a1a1a;
            margin-bottom: 8px;
            transition: color 0.3s ease;
        }

        .dark .article-title {
            color: #ffffff;
        }

        .article-card:hover .article-title {
            color: #ff331a;
        }

        .article-desc {
            font-size: 13px;
            line-height: 1.5;
            color: #555555;
        }

        .dark .article-desc {
            color: #888888;
        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 900px) {

            .journal-layout {
                flex-direction: column;
            }

            .journal-sidebar {
                width: 100%;
            }

            .journal-topic-list {
                flex-direction: row;
                overflow-x: auto;
                padding-bottom: 5px;
            }

            .journal-topic-item {
                flex-shrink: 0;
            }

            .journal-primary-grid {
                grid-template-columns: 1fr;
            }

            .promo-card {
                grid-column: 1;
            }

            .journal-secondary-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

        }


        @media (max-width: 640px) {

            .journal-wrapper {
                padding-top: 110px;
            }

            .j-lede {
                margin-bottom: 28px;
            }

            .j-lede h2 {
                font-size: 36px;
            }

            .journal-secondary-grid {
                grid-template-columns: 1fr;
            }

            .featured-image-wrapper {
                height: 280px;
            }

            .promo-image-wrapper {
                height: 420px;
            }

            .featured-title {
                font-size: 22px;
            }

        }

    </style>

</head>


<body class="bg-[#f4f3ef] text-[#1a1a1a] antialiased dark:bg-[#0b0b0b] dark:text-white">


<main class="journal-wrapper px-5 sm:px-8 lg:px-10">

    <div class="mx-auto max-w-[1125px]">


        <!-- =================================================
             HEADER
        ================================================== -->

        <header class="j-lede">

            <h2>
                The Subscrr Journal
            </h2>

        </header>


        <!-- =================================================
             LAYOUT
        ================================================== -->

        <div class="journal-layout">


            <!-- =================================================
                 SIDEBAR TOPICS
            ================================================== -->

            <aside class="journal-sidebar">

                <h2 class="journal-topics-title">
                    TOPICS
                </h2>


                <nav class="journal-topic-list">


                    <!-- ALL -->

                    <a
                        href="<?= base_url('journal') ?>"
                        class="journal-topic-item <?= $topic === 'all' ? 'active' : '' ?>"
                    >
                        All
                    </a>


                    <!-- MONEY -->

                    <a
                        href="<?= base_url('journal?topic=money') ?>"
                        class="journal-topic-item <?= $topic === 'money' ? 'active' : '' ?>"
                    >
                        Money
                    </a>


                    <!-- HABITS -->

                    <a
                        href="<?= base_url('journal?topic=habits') ?>"
                        class="journal-topic-item <?= $topic === 'habits' ? 'active' : '' ?>"
                    >
                        Habits
                    </a>


                    <!-- GUIDES -->

                    <a
                        href="<?= base_url('journal?topic=guides') ?>"
                        class="journal-topic-item <?= $topic === 'guides' ? 'active' : '' ?>"
                    >
                        Guides
                    </a>


                    <!-- PRODUCT -->

                    <a
                        href="<?= base_url('journal?topic=product') ?>"
                        class="journal-topic-item <?= $topic === 'product' ? 'active' : '' ?>"
                    >
                        Product
                    </a>

                </nav>

            </aside>


            <!-- =================================================
                 MAIN CONTENT
            ================================================== -->

            <section class="journal-main-content">


                <!-- =================================================
                     PRIMARY GRID
                     ARTIKEL KIRI + GET APP KANAN
                ================================================== -->

                <div class="journal-primary-grid">


                    <!-- =================================================
                         ARTIKEL KIRI
                    ================================================== -->


                    <?php if ($topic === 'all' || $topic === 'money'): ?>

                        <!-- MONEY FEATURED -->

                        <a
                            href="#"
                            class="featured-card"
                        >

                            <div class="featured-image-wrapper">

                                <img
                                    src="<?= base_url('assets/uploads/journal/journal_subscrr.jpg') ?>"
                                    alt="How much do your Subscriptions really cost per year?"
                                >

                            </div>


                            <div class="featured-body">

                                <div class="featured-meta">

                                    MONEY

                                    <span class="date">
                                        8 JULY 2026
                                    </span>

                                </div>


                                <h2 class="featured-title">

                                    How much do your Subscriptions really cost per year?

                                </h2>


                                <p class="featured-desc">

                                    The average person pays for 12 subscriptions
                                    and remembers four.
                                    Here is how to find your real yearly number
                                    in five minutes, and what to do with it.

                                </p>


                                <div class="featured-stats">

                                    34 views · 5 likes

                                </div>

                            </div>

                        </a>


                    <?php elseif ($topic === 'habits'): ?>

                        <!-- HABITS -->

                        <a
                            href="#"
                            class="featured-card"
                        >

                            <div class="featured-image-wrapper">

                                <img
                                    src="<?= base_url('assets/uploads/blog/blog-free-trial.jpg') ?>"
                                    alt="Forgot to cancel a free trial?"
                                >

                            </div>


                            <div class="featured-body">

                                <div class="featured-meta">

                                    HABITS

                                    <span class="date">
                                        1 JULY 2026
                                    </span>

                                </div>


                                <h2 class="featured-title">

                                    Forgot to cancel a free trial?
                                    Here is how to stop paying for it

                                </h2>


                                <p class="featured-desc">

                                    Free trials are built to be forgotten.
                                    Here is how to cancel them on iPhone,
                                    get a refund when charged,
                                    and never let it happen again.

                                </p>


                                <div class="featured-stats">

                                    0 views · 0 likes

                                </div>

                            </div>

                        </a>


                    <?php elseif ($topic === 'guides'): ?>

                        <!-- GUIDES -->

                        <a
                            href="#"
                            class="featured-card"
                        >

                            <div class="featured-image-wrapper">

                                <img
                                    src="<?= base_url('assets/uploads/blog/blog-track-iphone-3.jpg') ?>"
                                    alt="The best way to track subscriptions on iPhone"
                                >

                            </div>


                            <div class="featured-body">

                                <div class="featured-meta">

                                    GUIDES

                                    <span class="date">
                                        24 JUNE 2026
                                    </span>

                                </div>


                                <h2 class="featured-title">

                                    The best way to track subscriptions
                                    on iPhone in 2026

                                </h2>


                                <p class="featured-desc">

                                    Spreadsheets, bank apps, iOS settings
                                    or a dedicated tracker?
                                    An honest comparison with a privacy checklist.

                                </p>


                                <div class="featured-stats">

                                    0 views · 0 likes

                                </div>

                            </div>

                        </a>


                    <?php elseif ($topic === 'product'): ?>

                        <!-- PRODUCT -->

                        <a
                            href="#"
                            class="featured-card"
                        >

                            <div class="featured-image-wrapper">

                                <img
                                    src="<?= base_url('assets/uploads/blog/blog-ai-receipts-3.jpg') ?>"
                                    alt="Too lazy to type in every expense?"
                                >

                            </div>


                            <div class="featured-body">

                                <div class="featured-meta">

                                    PRODUCT

                                    <span class="date">
                                        10 JUNE 2026
                                    </span>

                                </div>


                                <h2 class="featured-title">

                                    Too lazy to type in every expense?
                                    Let AI read your receipts

                                </h2>


                                <p class="featured-desc">

                                    Manual expense entry is why most spending
                                    trackers get abandoned.
                                    AI Spend in Subscrr reads receipts
                                    and does the math.

                                </p>


                                <div class="featured-stats">

                                    5 views · 0 likes

                                </div>

                            </div>

                        </a>


                    <?php endif; ?>


                    <!-- =================================================
                         GET THE APP
                         SELALU KANAN
                    ================================================== -->

                    <div class="promo-card">

                        <div class="promo-image-wrapper">

                            <img
                                src="<?= base_url('assets/uploads/journal/app-promo-2.webp') ?>"
                                alt="Subscrr for iPhone"
                            >

                        </div>


                        <div class="promo-body">

                            <div>

                                <h3 class="promo-title">
                                    Subscrr for iPhone
                                </h3>


                                <p class="promo-desc">

                                    Every subscription in one place,
                                    the honest total per day, month and year.

                                </p>

                            </div>


                            <a
                                href="#"
                                class="promo-btn"
                            >
                                Get the app
                            </a>

                        </div>

                    </div>


                </div>


                <!-- =================================================
                     SECONDARY ARTICLES
                ================================================== -->

                <div class="journal-secondary-grid">


                    <!-- =================================================
                         MONEY ARTICLE 2
                    ================================================== -->

                    <?php if ($topic === 'all' || $topic === 'money'): ?>

                        <a
                            href="#"
                            class="article-card"
                        >

                            <div class="article-image-wrapper">

                                <img
                                    src="<?= base_url('assets/uploads/blog/blog-subscription-creep.jpg') ?>"
                                    alt="Subscription creep"
                                >

                            </div>


                            <div class="article-body">

                                <div class="article-meta">

                                    MONEY

                                    <span class="date">
                                        17 JUNE 2026
                                    </span>

                                </div>


                                <h3 class="article-title">

                                    Subscription creep:
                                    Why your money quietly disappears

                                </h3>


                                <p class="article-desc">

                                    Subscription creep is the slow stacking
                                    of small recurring charges plus silent
                                    price increases. Here is how to beat it.

                                </p>

                            </div>

                        </a>

                    <?php endif; ?>


                    <!-- =================================================
                         HABITS
                         HANYA TAMPIL DI ALL
                    ================================================== -->

                    <?php if ($topic === 'all'): ?>

                        <a
                            href="#"
                            class="article-card"
                        >

                            <div class="article-image-wrapper">

                                <img
                                    src="<?= base_url('assets/uploads/blog/blog-free-trial.jpg') ?>"
                                    alt="Forgot to cancel a free trial?"
                                >

                            </div>


                            <div class="article-body">

                                <div class="article-meta">

                                    HABITS

                                    <span class="date">
                                        1 JULY 2026
                                    </span>

                                </div>


                                <h3 class="article-title">

                                    Forgot to cancel a free trial?
                                    Here is how to stop paying for it

                                </h3>


                                <p class="article-desc">

                                    Free trials are built to be forgotten.
                                    Here is how to cancel them on iPhone,
                                    get a refund when charged,
                                    and never let it happen again.

                                </p>

                            </div>

                        </a>


                        <!-- =================================================
                             GUIDES
                        ================================================== -->

                        <a
                            href="#"
                            class="article-card"
                        >

                            <div class="article-image-wrapper">

                                <img
                                    src="<?= base_url('assets/uploads/blog/blog-track-iphone-3.jpg') ?>"
                                    alt="The best way to track subscriptions on iPhone"
                                >

                            </div>


                            <div class="article-body">

                                <div class="article-meta">

                                    GUIDES

                                    <span class="date">
                                        24 JUNE 2026
                                    </span>

                                </div>


                                <h3 class="article-title">

                                    The best way to track subscriptions
                                    on iPhone in 2026

                                </h3>


                                <p class="article-desc">

                                    Spreadsheets, bank apps, iOS settings
                                    or a dedicated tracker?
                                    An honest comparison with a privacy checklist.

                                </p>

                            </div>

                        </a>


                        <!-- =================================================
                             PRODUCT
                        ================================================== -->

                        <a
                            href="#"
                            class="article-card"
                        >

                            <div class="article-image-wrapper">

                                <img
                                    src="<?= base_url('assets/uploads/blog/blog-ai-receipts-3.jpg') ?>"
                                    alt="Too lazy to type in every expense?"
                                >

                            </div>


                            <div class="article-body">

                                <div class="article-meta">

                                    PRODUCT

                                    <span class="date">
                                        10 JUNE 2026
                                    </span>

                                </div>


                                <h3 class="article-title">

                                    Too lazy to type in every expense?
                                    Let AI read your receipts

                                </h3>


                                <p class="article-desc">

                                    Manual expense entry is why most spending
                                    trackers get abandoned.
                                    AI Spend in Subscrr reads receipts
                                    and does the math.

                                </p>

                            </div>

                        </a>

                    <?php endif; ?>


                </div>


            </section>

        </div>

    </div>

</main>

<!-- ================= THREADS PROMO BLOCK ================= -->
<section class="bg-[#f5f4ee] px-6 pb-24 lg:pb-32 dark:bg-[#0a0a0a]">
  
  <div class="max-w-5xl mx-auto">
    
    <!-- Bagian Banner Gambar -->
    <div 
      data-animate="zoom-in"
      style="transition-delay: 0.1s"
      class="relative overflow-hidden rounded-[2rem] shadow-lg border border-gray-100 bg-white group dark:bg-gray-900 dark:border-gray-700"
    >
      <!-- Link ke Threads -->
      <a href="https://www.threads.com/@subscrr" target="_blank" rel="noopener noreferrer" class="absolute inset-0 z-0"></a>

      <!-- Gambar Background -->
      <img
        src="assets/uploads/pricing/journal-block.png"
        alt="Threads @subscrr"
        class="w-full h-auto object-cover block select-none transition-transform duration-500 ease-in-out group-hover:scale-105"
      />

      <!-- Konten Kiri (Teks dan Tombol Panah) -->
      <!-- PERUBAHAN: gunakan top-10 untuk mobile, dan bottom-10 untuk desktop -->
      <div class="absolute top-10 left-10 md:top-auto md:bottom-10 z-10 flex flex-col items-start max-w-xl p-4 md:p-0">
    <!-- Judul: Bisa diklik, mengarah ke blog, dan tambahkan cursor-pointer -->
    <h1 
        class="text-white text-2xl md:text-7xl font-bold leading-tight tracking-tight drop-shadow-lg cursor-pointer"
    >
        Open<br />
        the Subscrr<br />
        Journal
    </h1>
    
    <!-- Paragraf: Hanya muncul di desktop (md ke atas) -->
    <p class="text-white text-base md:text-xl font-light opacity-90 mt-4 md:mt-6 mb-6 md:mb-10 leading-relaxed drop-shadow-md hidden md:block">
        We break down subscriptions and how much money they're costing you.
    </p>

    <!-- Tombol Panah Merah: Ukuran diperkecil di mobile (w-12 h-12) -->
    <div class="relative group/btn" onclick="window.location.href='<?= site_url('blog') ?>'; event.stopPropagation();">
        <!-- Ring / Lingkaran luar transparan saat hover -->
        <div class="absolute inset-0 rounded-full bg-red-500 opacity-0 scale-100 group-hover/btn:opacity-40 group-hover/btn:scale-125 transition-all duration-500 pointer-events-none"></div>
    </div>
 </div>
      <!-- Card Subscribe KHUSUS DESKTOP -->
      <div 
        class="hidden md:block absolute right-10 top-1/2 -translate-y-1/2 z-10 w-[450px] bg-white dark:bg-[#1a1a1a]/95 backdrop-blur-sm p-8 rounded-[2rem] shadow-2xl border border-gray-200 dark:border-white/10" 
        onclick="event.stopPropagation()"
      >
          <h2 class="text-gray-900 dark:text-white text-2xl font-semibold mb-6">Subscribe for updates</h2>
          <form class="flex items-center gap-3">
              <input 
                  type="email" 
                  placeholder="you@example.com" 
                  class="flex-1 bg-gray-100 border-gray-300 text-gray-900 placeholder-gray-500 dark:bg-[#2a2a2a] dark:border-transparent dark:text-white dark:placeholder-gray-400 rounded-full px-6 py-4 outline-none focus:ring-2 focus:ring-red-500 border transition-colors"
              />
              <button type="submit" class="bg-[#ff4d00] hover:bg-[#e64400] text-white font-bold rounded-full px-8 py-4 transition-colors whitespace-nowrap">
                  Subscribe
              </button>
          </form>
          <p class="text-gray-500 dark:text-gray-400 text-sm mt-5 leading-relaxed">
              By subscribing, you agree to receive the Subscrr newsletter. You can unsubscribe anytime.
          </p>
      </div>
    </div>

    <!-- Card Subscribe KHUSUS MOBILE -->
    <div 
      class="md:hidden mt-6 bg-white dark:bg-[#1a1a1a]/95 backdrop-blur-sm p-8 rounded-[2rem] shadow-2xl border border-gray-200 dark:border-white/10" 
      onclick="event.stopPropagation()"
    >
        <h2 class="text-gray-900 dark:text-white text-2xl font-semibold mb-6">Subscribe for updates</h2>
        <form class="flex flex-col gap-3">
            <input 
                type="email" 
                placeholder="you@example.com" 
                class="w-full bg-gray-100 border-gray-300 text-gray-900 placeholder-gray-500 dark:bg-[#2a2a2a] dark:border-transparent dark:text-white dark:placeholder-gray-400 rounded-full px-6 py-4 outline-none focus:ring-2 focus:ring-red-500 border transition-colors"
            />
            <button type="submit" class="w-full bg-[#ff4d00] hover:bg-[#e64400] text-white font-bold rounded-full px-8 py-4 transition-colors whitespace-nowrap">
                Subscribe
            </button>
        </form>
        <p class="text-gray-500 dark:text-gray-400 text-sm mt-5 leading-relaxed">
            By subscribing, you agree to receive the Subscrr newsletter. You can unsubscribe anytime.
        </p>
    </div>

  </div>
</section>
<!-- =====================================================
     FOOTER
====================================================== -->

<?php $this->load->view('layout/footer.php'); ?>


</body>

</html>