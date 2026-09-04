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
           RESET & BACKGROUND
        ====================================================== */

        body {
            background-color: #0b0b0b !important;
            color: #ffffff !important;
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
            color: #ffffff;
            letter-spacing: -0.04em;
            line-height: 1;
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
            color: #a1a1a1;
            background: #161616;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .journal-topic-item:hover {
            background: #222222;
            color: #ffffff;
        }

        .journal-topic-item.active {
            background: #ff331a;
            color: #ffffff;
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
            background: #141414;
            border-radius: 20px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            text-decoration: none;
            border: 1px solid #1f1f1f;
            transition: transform 0.3s ease;
            min-width: 0;
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

        .featured-title {
            font-size: 26px;
            font-weight: 700;
            line-height: 1.2;
            color: #ffffff;
            margin-bottom: 12px;
            letter-spacing: -0.02em;
            transition: color 0.3s ease;
        }

        .featured-card:hover .featured-title {
            color: #ff331a;
        }

        .featured-desc {
            font-size: 14px;
            line-height: 1.5;
            color: #888888;
            margin-bottom: 18px;
        }

        .featured-stats {
            font-size: 12px;
            color: #555555;
        }


        /* =====================================================
           PROMO CARD
           SELALU DI KANAN
        ====================================================== */

        .promo-card {
            background: #141414;
            border-radius: 20px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            border: 1px solid #1f1f1f;

            /* PENTING:
               promo selalu berada di kolom kanan */
            grid-column: 2;
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
            color: #ffffff;
            margin-bottom: 8px;
        }

        .promo-desc {
            font-size: 13px;
            line-height: 1.4;
            color: #888888;
            margin-bottom: 20px;
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
            background: #141414;
            border-radius: 20px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            text-decoration: none;
            border: 1px solid #1f1f1f;
            transition: transform 0.3s ease;
        }

        .article-card:hover {
            transform: translateY(-4px);
        }

        .article-image-wrapper {
            width: 100%;
            aspect-ratio: 1 / 0.8;
            overflow: hidden;
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

        .article-title {
            font-size: 18px;
            font-weight: 700;
            line-height: 1.3;
            color: #ffffff;
            margin-bottom: 8px;
            transition: color 0.3s ease;
        }

        .article-card:hover .article-title {
            color: #ff331a;
        }

        .article-desc {
            font-size: 13px;
            line-height: 1.5;
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


<body class="bg-[#0b0b0b] text-white antialiased">


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


<!-- =====================================================
     FOOTER
====================================================== -->

<?php $this->load->view('layout/footer.php'); ?>


</body>

</html>