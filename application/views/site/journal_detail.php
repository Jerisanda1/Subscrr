<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        <?= html_escape($article['title']) ?> · The Subscrr Journal
    </title>

    <!-- Tailwind -->
    <link
        rel="stylesheet"
        href="<?= base_url('assets/output.css') ?>"
    >

    <style>

        /* =====================================================
           JOURNAL DETAIL
        ====================================================== */

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            background: #f5f4ee;
            color: #201f1d;
            font-family: Arial, Helvetica, sans-serif;
        }

        html.dark body {
            background: #0a0a0a;
            color: #f5f5f5;
        }

        a {
            text-decoration: none;
        }


        /* =====================================================
           MAIN JOURNAL DETAIL CONTAINER
        ====================================================== */

        .journal-detail-page {
            width: min(720px, calc(100% - 32px));
            margin: 0 auto;
            padding-top: 147px;
            padding-bottom: 90px;
        }


        /* =====================================================
           ARTICLE HEADER
        ====================================================== */

        .journal-detail-header {
            background: #ffffff;
            border: 1px solid #e1e1df;
            border-radius: 24px;
            padding: 27px 28px 28px;
        }

        html.dark .journal-detail-header {
            background: #141414;
            border-color: #2d2d2d;
        }

        .journal-detail-meta {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 14px;
            font-size: 12px;
            line-height: 1;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .journal-detail-category {
            color: #ff2500;
            font-weight: 700;
        }

        .journal-detail-date {
            color: #817f78;
            font-weight: 500;
        }

        html.dark .journal-detail-date {
            color: #999999;
        }

        .journal-detail-title {
            margin: 0;
            color: #201f1d;
            font-size: 44px;
            line-height: 1.08;
            letter-spacing: -0.045em;
            font-weight: 500;
        }

        html.dark .journal-detail-title {
            color: #ffffff;
        }

        .journal-detail-description {
            margin: 15px 0 0;
            color: #817f78;
            font-size: 18px;
            line-height: 1.55;
        }

        html.dark .journal-detail-description {
            color: #a6a6a6;
        }


        /* =====================================================
           HERO IMAGE
        ====================================================== */

        .journal-detail-hero {
            width: 100%;
            margin-top: 16px;
            overflow: hidden;
            border-radius: 24px;
            background: #deddd8;
        }

        .journal-detail-hero img {
            display: block;
            width: 100%;
            height: auto;
            max-height: 560px;
            object-fit: cover;
        }


        /* =====================================================
           ARTICLE BODY
           SEKARANG BACKGROUND PUTIH
        ====================================================== */

        .journal-detail-body {
            margin-top: 16px;
            padding: 42px 28px 10px;
            background: #ffffff;
            border: 1px solid #e1e1df;
            border-radius: 24px;
        }

        html.dark .journal-detail-body {
            background: #141414;
            border-color: #2d2d2d;
        }

        .journal-detail-body p {
            margin: 0 0 28px;
            color: #393733;
            font-size: 17px;
            line-height: 1.82;
            letter-spacing: -0.005em;
        }

        html.dark .journal-detail-body p {
            color: #d0d0d0;
        }


        /* =====================================================
           QUICK ANSWERS
        ====================================================== */

        .quick-answers {
            margin-top: 58px;
            padding-top: 35px;
            border-top: 1px solid #d8d7d2;
        }

        html.dark .quick-answers {
            border-color: #2c2c2c;
        }

        .quick-answers h2 {
            margin: 0 0 25px;
            color: #201f1d;
            font-size: 28px;
            line-height: 1.15;
            letter-spacing: -0.04em;
            font-weight: 600;
        }

        html.dark .quick-answers h2 {
            color: #ffffff;
        }

        .answer-item {
            padding: 21px 0;
            border-bottom: 1px solid #d8d7d2;
        }

        html.dark .answer-item {
            border-color: #2c2c2c;
        }

        .answer-question {
            margin-bottom: 8px;
            color: #201f1d;
            font-size: 17px;
            line-height: 1.45;
            font-weight: 600;
        }

        html.dark .answer-question {
            color: #ffffff;
        }

        .answer-text {
            color: #817f78;
            font-size: 16px;
            line-height: 1.7;
        }

        html.dark .answer-text {
            color: #a6a6a6;
        }


        /* =====================================================
           ARTICLE STATS
        ====================================================== */

        .article-stats {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-top: -1px;
            padding: 20px 28px 24px;
            background: #ffffff;
            border-left: 1px solid #e1e1df;
            border-right: 1px solid #e1e1df;
            border-bottom: 1px solid #e1e1df;
            border-radius: 0 0 24px 24px;
            color: #9a9891;
            font-size: 13px;
        }

        html.dark .article-stats {
            background: #141414;
            border-color: #2d2d2d;
        }


        /* =====================================================
           LIKE BUTTON
        ====================================================== */

        .like-button {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 7px 12px;
            border: 1px solid #deddd8;
            border-radius: 999px;
            background: #ffffff;
            color: #817f78;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition:
                background .2s ease,
                color .2s ease,
                border-color .2s ease,
                transform .15s ease;
        }

        .like-button:hover {
            border-color: #ff2500;
            color: #ff2500;
        }

        .like-button:active {
            transform: scale(.95);
        }

        .like-button.liked {
            background: #fff1ed;
            border-color: #ff2500;
            color: #ff2500;
        }

        .like-heart {
            font-size: 13px;
            line-height: 1;
        }

        html.dark .like-button {
            background: #141414;
            border-color: #333333;
            color: #999999;
        }

        html.dark .like-button:hover {
            border-color: #ff2500;
            color: #ff2500;
        }

        html.dark .like-button.liked {
            background: rgba(255, 37, 0, .12);
            border-color: #ff2500;
            color: #ff2500;
        }


        /* =====================================================
           APP PROMO
        ====================================================== */

        .article-promo {
            margin-top: 22px;
            padding: 18px;
            background: #ffffff;
            border: 1px solid #e1e1df;
            border-radius: 24px;
            display: flex;
            align-items: center;
            gap: 22px;
        }

        html.dark .article-promo {
            background: #141414;
            border-color: #2d2d2d;
        }

        .article-promo-image {
            width: 220px;
            height: 175px;
            flex-shrink: 0;
            overflow: hidden;
            border-radius: 16px;
            background: #f1f0eb;
        }

        .article-promo-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .article-promo-content {
            flex: 1;
            min-width: 0;
        }

        .article-promo h2 {
            margin: 0 0 12px;
            color: #201f1d;
            font-size: 26px;
            line-height: 1.15;
            letter-spacing: -0.04em;
            font-weight: 600;
        }

        html.dark .article-promo h2 {
            color: #ffffff;
        }

        .article-promo p {
            margin: 0 0 20px;
            color: #817f78;
            font-size: 15px;
            line-height: 1.6;
        }

        html.dark .article-promo p {
            color: #a6a6a6;
        }

        .promo-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 11px 20px;
            border-radius: 999px;
            background: #ff2500;
            color: #ffffff;
            font-size: 14px;
            font-weight: 700;
            transition:
                transform .2s ease,
                background .2s ease;
        }

        .promo-button:hover {
            background: #e92100;
            transform: translateY(-2px);
        }


        /* =====================================================
           READ NEXT
        ====================================================== */

        .read-next {
            margin-top: 70px;
        }

        .read-next h2 {
            margin: 0 0 22px;
            color: #201f1d;
            font-size: 28px;
            line-height: 1.15;
            letter-spacing: -0.04em;
            font-weight: 600;
        }

        html.dark .read-next h2 {
            color: #ffffff;
        }

        .read-next-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 12px;
        }

        .next-card {
            overflow: hidden;
            min-width: 0;
            background: #ffffff;
            border: 1px solid #e1e1df;
            border-radius: 18px;
            transition:
                transform .2s ease,
                border-color .2s ease,
                box-shadow .2s ease;
        }

        html.dark .next-card {
            background: #141414;
            border-color: #2d2d2d;
        }

        .next-card:hover {
            transform: translateY(-3px);
            border-color: #c7c6c0;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .05);
        }

        html.dark .next-card:hover {
            border-color: #4a4a4a;
            box-shadow: none;
        }

        .next-image {
            width: 100%;
            height: 125px;
            overflow: hidden;
            background: #f0f0f0;
        }

        .next-image img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .4s ease;
        }

        .next-card:hover .next-image img {
            transform: scale(1.05);
        }

        .next-card-body {
            padding: 14px;
        }

        .next-category {
            margin-bottom: 10px;
            color: #ff2500;
            font-size: 10px;
            line-height: 1.3;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .06em;
        }

        .next-date {
            color: #817f78;
            margin-left: 4px;
            font-weight: 500;
            letter-spacing: 0;
        }

        .next-card h3 {
            margin: 0;
            color: #201f1d;
            font-size: 15px;
            line-height: 1.28;
            letter-spacing: -0.025em;
            font-weight: 600;
        }

        html.dark .next-card h3 {
            color: #ffffff;
        }


        /* =====================================================
           NEWSLETTER
           DESKTOP = HORIZONTAL
           MOBILE = VERTICAL
        ====================================================== */

        .newsletter {
            margin-top: 60px;
            padding: 30px;
            background: #ffffff;
            border: 1px solid #e1e1df;
            border-radius: 24px;
        }

        html.dark .newsletter {
            background: #141414;
            border-color: #2d2d2d;
        }

        .newsletter-inner {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .newsletter-icon {
            width: 68px;
            height: 68px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 18px;
            background: #fff0eb;
            color: #ff2500;
            font-size: 30px;
        }

        html.dark .newsletter-icon {
            background: rgba(255, 37, 0, .12);
        }

        .newsletter-info {
            flex: 1;
            min-width: 0;
        }

        .newsletter h2 {
            margin: 0 0 7px;
            color: #201f1d;
            font-size: 24px;
            line-height: 1.15;
            letter-spacing: -0.04em;
            font-weight: 600;
        }

        html.dark .newsletter h2 {
            color: #ffffff;
        }

        .newsletter > .newsletter-inner > .newsletter-info > p {
            margin: 0;
            color: #817f78;
            font-size: 13px;
            line-height: 1.55;
        }

        html.dark .newsletter > .newsletter-inner > .newsletter-info > p {
            color: #a6a6a6;
        }

        .newsletter-right {
            width: 335px;
            flex-shrink: 0;
        }

        .newsletter-form {
            display: flex;
            gap: 8px;
        }

        .newsletter-form input {
            flex: 1;
            min-width: 0;
            height: 46px;
            padding: 0 16px;
            border: 1px solid #d8d7d2;
            border-radius: 999px;
            background: #ffffff;
            color: #201f1d;
            font-size: 13px;
            outline: none;
        }

        html.dark .newsletter-form input {
            background: #141414;
            border-color: #333333;
            color: #ffffff;
        }

        .newsletter-form input:focus {
            border-color: #ff2500;
        }

        .newsletter-form button {
            height: 46px;
            padding: 0 19px;
            border: 0;
            border-radius: 999px;
            background: #ff2500;
            color: #ffffff;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            white-space: nowrap;
            transition: background .2s ease;
        }

        .newsletter-form button:hover {
            background: #e92100;
        }

        .newsletter-note {
            margin: 9px 0 0;
            color: #aaa8a0;
            font-size: 11px;
            line-height: 1.45;
        }


        /* =====================================================
           DISCLAIMER
        ====================================================== */

        .article-disclaimer {
            margin-top: 28px;
            text-align: center;
            color: #9a9891;
            font-size: 12px;
            line-height: 1.5;
        }


        /* =====================================================
           MOBILE / TABLET
        ====================================================== */

        @media (max-width: 900px) {

            .read-next-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .newsletter-inner {
                align-items: flex-start;
            }

            .newsletter-right {
                width: 320px;
            }

        }


        @media (max-width: 768px) {

            .journal-detail-page {
                width: calc(100% - 24px);
                padding-top: 105px;
                padding-bottom: 60px;
            }

            .journal-detail-header {
                padding: 22px 20px 23px;
                border-radius: 20px;
            }

            .journal-detail-title {
                font-size: 36px;
                line-height: 1.08;
            }

            .journal-detail-description {
                font-size: 16px;
                line-height: 1.55;
            }

            .journal-detail-hero {
                margin-top: 12px;
                border-radius: 20px;
            }

            .journal-detail-body {
                margin-top: 12px;
                padding: 34px 20px 8px;
                border-radius: 20px;
            }

            .journal-detail-body p {
                font-size: 16px;
                line-height: 1.78;
            }

            .quick-answers {
                margin-top: 45px;
                padding-top: 30px;
            }

            .quick-answers h2 {
                font-size: 25px;
            }

            .article-stats {
                padding: 18px 20px 22px;
                border-radius: 0 0 20px 20px;
            }

            .article-promo {
                margin-top: 18px;
                flex-direction: column;
                align-items: stretch;
                padding: 16px;
                border-radius: 20px;
            }

            .article-promo-image {
                width: 100%;
                height: 200px;
            }

            .article-promo h2 {
                font-size: 27px;
            }

            .read-next {
                margin-top: 55px;
            }

            .read-next-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .next-image {
                height: 140px;
            }

            .newsletter {
                margin-top: 55px;
                padding: 24px;
                border-radius: 20px;
            }

            .newsletter-inner {
                flex-direction: column;
                gap: 18px;
            }

            .newsletter-icon {
                width: 58px;
                height: 58px;
                border-radius: 16px;
            }

            .newsletter-right {
                width: 100%;
            }

            .newsletter-form {
                flex-direction: column;
            }

            .newsletter-form input,
            .newsletter-form button {
                width: 100%;
            }

        }


        @media (max-width: 520px) {

            .journal-detail-title {
                font-size: 32px;
            }

            .journal-detail-description {
                font-size: 15px;
            }

            .journal-detail-body {
                padding-left: 18px;
                padding-right: 18px;
            }

            .article-stats {
                padding-left: 18px;
                padding-right: 18px;
            }

            .read-next-grid {
                grid-template-columns: 1fr;
            }

            .next-image {
                height: 180px;
            }

            .next-card-body {
                padding: 16px;
            }

            .newsletter {
                padding: 20px;
            }

        }

    </style>

</head>


<body>

    <!-- =====================================================
         NAVBAR
    ====================================================== -->

    <?php $this->load->view('layout/navbar'); ?>


    <!-- =====================================================
         JOURNAL DETAIL
    ====================================================== -->

    <main class="journal-detail-page">


        <!-- =================================================
             ARTICLE HEADER
        ================================================== -->

        <header class="journal-detail-header">

            <div class="journal-detail-meta">

                <span class="journal-detail-category">
                    <?= html_escape($article['category']) ?>
                </span>

                <span class="journal-detail-date">
                    <?= html_escape($article['date']) ?>
                </span>

            </div>


            <h1 class="journal-detail-title">
                <?= html_escape($article['title']) ?>
            </h1>


            <p class="journal-detail-description">
                <?= html_escape($article['description']) ?>
            </p>

        </header>


        <!-- =================================================
             HERO IMAGE
        ================================================== -->

        <div class="journal-detail-hero">

            <img
                src="<?= base_url($article['image']) ?>"
                alt="<?= html_escape($article['title']) ?>"
            >

        </div>


        <!-- =================================================
             ARTICLE CONTENT
        ================================================== -->

        <article class="journal-detail-body">

            <?php if (!empty($article['content'])): ?>

                <?php foreach ($article['content'] as $paragraph): ?>

                    <p>
                        <?= html_escape($paragraph['paragraph']) ?>
                    </p>

                <?php endforeach; ?>

            <?php endif; ?>


            <!-- =================================================
                 QUICK ANSWERS
            ================================================== -->

            <?php if (!empty($article['answers'])): ?>

                <section class="quick-answers">

                    <h2>
                        Quick answers
                    </h2>


                    <?php foreach ($article['answers'] as $answer): ?>

                        <div class="answer-item">

                            <div class="answer-question">
                                <?= html_escape($answer['question']) ?>
                            </div>

                            <div class="answer-text">
                                <?= html_escape($answer['answer']) ?>
                            </div>

                        </div>

                    <?php endforeach; ?>

                </section>

            <?php endif; ?>

        </article>


        <!-- =================================================
             STATS
        ================================================== -->

        <div class="article-stats">

            <span
                id="article-views"
                data-base-views="<?= (int) $article['views'] ?>"
            >
                <?= (int) $article['views'] ?> views
            </span>


            <button
                type="button"
                id="like-button"
                class="like-button"
                aria-label="Like artikel"
                aria-pressed="false"
            >

                <span class="like-heart">
                    ♥
                </span>

                <span id="article-likes">
                    <?= (int) $article['likes'] ?>
                </span>

            </button>

        </div>


        <!-- =================================================
             APP PROMO
        ================================================== -->

        <section class="article-promo">

          


            <div class="article-promo-content">

                <h2>
                    Keep every subscription in one place
                </h2>


                <p>
                    Subscrr shows the honest total per day, month and year,
                    and reminds you the day before the money leaves.
                </p>


                <a
                    href="https://apps.apple.com/us/app/subscrr-subscription-tracker/id6757530448?ct=site_journal"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="promo-button"
                >
                    Get the app →
                </a>

            </div>

        </section>


        <!-- =================================================
             READ NEXT
        ================================================== -->

        <section class="read-next">

            <h2>
                Read next
            </h2>


            <div class="read-next-grid">


                <!-- =================================================
                     SUBSCRIPTION CREEP
                ================================================== -->

                <?php if ($slug !== 'subscription-creep'): ?>

                    <a
                        href="<?= site_url('journal/subscription-creep') ?>"
                        class="next-card"
                    >

                        <div class="next-image">

                            <img
                                src="<?= base_url('assets/uploads/journal/Frame-51-mtkg5joa.png') ?>"
                                alt="Subscription creep"
                                loading="lazy"
                            >

                        </div>


                        <div class="next-card-body">

                            <div class="next-category">

                                MONEY

                                <span class="next-date">
                                    17 JUNE 2026
                                </span>

                            </div>


                            <h3>
                                Subscription creep:
                                Why your money quietly disappears every month
                            </h3>

                        </div>

                    </a>

                <?php endif; ?>


                <!-- =================================================
                     FORGOT TO CANCEL
                ================================================== -->

                <?php if ($slug !== 'forgot-to-cancel-free-trial'): ?>

                    <a
                        href="<?= site_url('journal/forgot-to-cancel-free-trial') ?>"
                        class="next-card"
                    >

                        <div class="next-image">

                            <img
                                src="<?= base_url('assets/uploads/journal/PM-mtkfgyvc.png') ?>"
                                alt="Forgot to cancel a free trial"
                                loading="lazy"
                            >

                        </div>


                        <div class="next-card-body">

                            <div class="next-category">

                                HABITS

                                <span class="next-date">
                                    1 JULY 2026
                                </span>

                            </div>


                            <h3>
                                Forgot to cancel a free trial?
                                Here is how to stop paying for It
                            </h3>

                        </div>

                    </a>

                <?php endif; ?>


                <!-- =================================================
                     BEST WAY TO TRACK
                ================================================== -->

                <?php if ($slug !== 'best-way-to-track-subscriptions-on-iphone-2026'): ?>

                    <a
                        href="<?= site_url('journal/best-way-to-track-subscriptions-on-iphone-2026') ?>"
                        class="next-card"
                    >

                        <div class="next-image">

                            <img
                                src="<?= base_url('assets/uploads/journal/app-mtkgbxxa.png') ?>"
                                alt="The best way to track subscriptions on iPhone"
                                loading="lazy"
                            >

                        </div>


                        <div class="next-card-body">

                            <div class="next-category">

                                GUIDES

                                <span class="next-date">
                                    24 JUNE 2026
                                </span>

                            </div>


                            <h3>
                                The best way to track subscriptions
                                on iPhone in 2026
                            </h3>

                        </div>

                    </a>

                <?php endif; ?>


                <!-- =================================================
                     TOO LAZY TO TYPE
                ================================================== -->

                <?php if ($slug !== 'too-lazy-to-type-in-every-expense'): ?>

                    <a
                        href="<?= site_url('journal/too-lazy-to-type-in-every-expense') ?>"
                        class="next-card"
                    >

                        <div class="next-image">

                            <img
                                src="<?= base_url('assets/uploads/journal/w-4-mtkg84sf.png') ?>"
                                alt="Too lazy to type in every expense"
                                loading="lazy"
                            >

                        </div>


                        <div class="next-card-body">

                            <div class="next-category">

                                PRODUCT

                                <span class="next-date">
                                    10 JUNE 2026
                                </span>

                            </div>


                            <h3>
                                Too lazy to type in every expense?
                                Let AI read your receipts
                            </h3>

                        </div>

                    </a>

                <?php endif; ?>


            </div>

        </section>


        <!-- =================================================
             NEWSLETTER
        ================================================== -->

        <section class="newsletter">

            <div class="newsletter-inner">


                <!-- ICON -->

                <div class="newsletter-icon">

                    ✉

                </div>


                <!-- TEXT -->

                <div class="newsletter-info">

                    <h2>
                        Subscribe for updates
                    </h2>

                    <p>
                        We break down subscriptions and how much money
                        they're costing you.
                    </p>

                </div>


                <!-- FORM -->

                <div class="newsletter-right">

                    <form
                        class="newsletter-form"
                        onsubmit="return false;"
                    >

                        <input
                            type="email"
                            placeholder="you@example.com"
                        >


                        <button type="submit">
                            Subscribe
                        </button>

                    </form>


                    <p class="newsletter-note">
                        By subscribing, you agree to receive the
                        Subscrr newsletter. You can unsubscribe anytime.
                    </p>

                </div>

            </div>

        </section>


        <!-- =================================================
             DISCLAIMER
        ================================================== -->

        <div class="article-disclaimer">

            General information, not personal financial advice.

        </div>


    </main>


    <!-- =====================================================
         FOOTER
    ====================================================== -->

    <?php $this->load->view('layout/footer.php'); ?>


    <!-- =====================================================
         JAVASCRIPT
         VIEWS + LIKES
    ====================================================== -->

    <script>

        document.addEventListener('DOMContentLoaded', function () {


            /* =================================================
               DATA ARTIKEL
            ================================================= */

            const articleSlug = <?= json_encode($slug) ?>;

            const baseViews = <?= (int) $article['views'] ?>;

            const baseLikes = <?= (int) $article['likes'] ?>;


            const viewsElement =
                document.getElementById('article-views');

            const likesElement =
                document.getElementById('article-likes');

            const likeButton =
                document.getElementById('like-button');


            const VIEW_KEY =
                'subscrr_view_' + articleSlug;

            const LIKE_KEY =
                'subscrr_like_' + articleSlug;


            const VIEW_COOLDOWN =
                24 * 60 * 60 * 1000;


            /* =================================================
               VIEWS
            ================================================== */

            let viewData = null;

            try {

                viewData = localStorage.getItem(VIEW_KEY);

            } catch (error) {

                viewData = null;

            }


            let viewCount = baseViews;


            if (viewData) {

                try {

                    const parsedData =
                        JSON.parse(viewData);

                    const lastViewed =
                        Number(parsedData.timestamp);

                    const now =
                        Date.now();


                    /*
                     * Jika sudah lebih dari 24 jam,
                     * dianggap membuka artikel kembali.
                     */

                    if (
                        !lastViewed ||
                        now - lastViewed >= VIEW_COOLDOWN
                    ) {

                        viewCount =
                            baseViews + 1;


                        try {

                            localStorage.setItem(
                                VIEW_KEY,
                                JSON.stringify({
                                    timestamp: now
                                })
                            );

                        } catch (error) {

                            // localStorage tidak tersedia

                        }

                    } else {

                        /*
                         * Masih dalam 24 jam.
                         * Jangan tambah view lagi.
                         */

                        viewCount =
                            baseViews + 1;

                    }

                } catch (error) {

                    /*
                     * Jika data localStorage rusak,
                     * reset sebagai view baru.
                     */

                    viewCount =
                        baseViews + 1;


                    try {

                        localStorage.setItem(
                            VIEW_KEY,
                            JSON.stringify({
                                timestamp: Date.now()
                            })
                        );

                    } catch (error) {

                        // localStorage tidak tersedia

                    }

                }

            } else {

                /*
                 * Pertama kali membuka artikel.
                 */

                viewCount =
                    baseViews + 1;


                try {

                    localStorage.setItem(
                        VIEW_KEY,
                        JSON.stringify({
                            timestamp: Date.now()
                        })
                    );

                } catch (error) {

                    // localStorage tidak tersedia

                }

            }


            viewsElement.textContent =
                viewCount + ' views';


            /* =================================================
               LIKE
            ================================================== */

            let liked = false;


            try {

                liked =
                    localStorage.getItem(LIKE_KEY) === 'true';

            } catch (error) {

                liked = false;

            }


            let likeCount =
                baseLikes;


            /*
             * Jika sebelumnya sudah like,
             * tampilkan +1 dan status aktif.
             */

            if (liked) {

                likeCount =
                    baseLikes + 1;


                likeButton.classList.add('liked');


                likeButton.setAttribute(
                    'aria-pressed',
                    'true'
                );

            }


            likesElement.textContent =
                likeCount;


            /* =================================================
               KLIK LIKE
            ================================================== */

            likeButton.addEventListener(
                'click',
                function () {


                    /*
                     * BELUM LIKE
                     */

                    if (!liked) {

                        liked = true;


                        likeCount =
                            baseLikes + 1;


                        try {

                            localStorage.setItem(
                                LIKE_KEY,
                                'true'
                            );

                        } catch (error) {

                            // localStorage tidak tersedia

                        }


                        likeButton.classList.add(
                            'liked'
                        );


                        likeButton.setAttribute(
                            'aria-pressed',
                            'true'
                        );

                    }


                    /*
                     * SUDAH LIKE
                     * klik lagi = unlike
                     */

                    else {

                        liked = false;


                        likeCount =
                            baseLikes;


                        try {

                            localStorage.removeItem(
                                LIKE_KEY
                            );

                        } catch (error) {

                            // localStorage tidak tersedia

                        }


                        likeButton.classList.remove(
                            'liked'
                        );


                        likeButton.setAttribute(
                            'aria-pressed',
                            'false'
                        );

                    }


                    likesElement.textContent =
                        likeCount;

                }
            );

        });

    </script>


</body>

</html>