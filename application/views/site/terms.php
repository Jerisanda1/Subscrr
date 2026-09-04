<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('assets/uploads/icon/icon_Subscrr.png') ?>">
    <title>Terms of Use - Subscrr</title>

    <link rel="stylesheet" href="<?= base_url('assets/output.css') ?>">

    <style>
        /* =====================================================
           RESPONSIVE - TERMS OF USE
        ====================================================== */

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            overflow-x: hidden;
        }


        /* =====================================================
           TABLET & LAPTOP KECIL
        ====================================================== */

        @media (max-width: 900px) {

            /* NAVBAR */
            #navbar {
                width: calc(100% - 32px);
                top: 16px;
            }

            #navbar nav {
                padding-left: 20px;
                padding-right: 20px;
            }

            #navbar .md\:gap-8 {
                gap: 18px !important;
            }

            #navbar .lg\:gap-7 {
                gap: 18px !important;
            }

            /* MAIN */
            main {
                padding-left: 24px !important;
                padding-right: 24px !important;
            }

            main > div {
                max-width: 760px;
            }

            /* HEADING */
            main h1 {
                font-size: 46px !important;
                line-height: 1.05 !important;
            }

            /* SECTION */
            main section {
                padding-top: 30px !important;
                padding-bottom: 30px !important;
            }

            /* FOOTER */
            footer {
                padding-left: 24px !important;
                padding-right: 24px !important;
            }
        }


        /* =====================================================
           TABLET
        ====================================================== */

        @media (max-width: 768px) {

            /* NAVBAR */

            #navbar {
                width: calc(100% - 24px);
                top: 12px;
            }

            #navbar nav {
                padding: 10px 16px;
            }

            /* LOGO */

            #logo-subscrr {
                gap: 8px;
            }

            #logo-subscrr span:first-child {
                width: 34px;
                height: 34px;
                font-size: 31px;
            }

            #logo-subscrr span:last-child {
                font-size: 19px;
            }

            /* NAVIGATION */

            #navbar .hidden.sm\:flex {
                display: none !important;
            }

            /* BUTTON */

            #navbar a[href*="apps.apple.com"] {
                padding-left: 18px;
                padding-right: 18px;
                padding-top: 9px;
                padding-bottom: 9px;
                font-size: 14px;
            }


            /* MAIN */

            body {
                padding-top: 90px !important;
            }

            main {
                padding: 24px 24px 70px !important;
            }

            main > div {
                width: 100%;
            }

            /* PAGE TITLE */

            main h1 {
                font-size: 42px !important;
                line-height: 1.05 !important;
            }

            /* LAST UPDATED */

            main .mb-10 {
                margin-bottom: 35px !important;
            }

            main .mb-10 > div {
                font-size: 14px !important;
            }


            /* SECTION */

            main section {
                padding-top: 28px !important;
                padding-bottom: 28px !important;
            }

            /* SECTION TITLE */

            main section h2 {
                font-size: 22px !important;
                line-height: 1.25 !important;
            }

            /* BODY TEXT */

            main section p,
            main section li {
                font-size: 16px !important;
                line-height: 1.7 !important;
            }

            /* LIST */

            main section li {
                gap: 12px !important;
            }


            /* INFO BOX */

            main section .rounded-2xl {
                padding: 16px 18px !important;
            }

            main section .rounded-2xl p {
                font-size: 15px !important;
                line-height: 1.65 !important;
            }


            /* FOOTER */

            footer {
                padding: 40px 24px !important;
            }

            footer .md\:flex-row {
                flex-direction: column !important;
                align-items: flex-start !important;
                gap: 28px !important;
            }

            footer nav {
                width: 100%;
                gap: 10px 20px !important;
            }
        }


        /* =====================================================
           MOBILE
        ====================================================== */

        @media (max-width: 640px) {

            /* BODY */

            body {
                padding-top: 78px !important;
                overflow-x: hidden;
            }


            /* NAVBAR */

            #navbar {
                width: calc(100% - 20px);
                top: 10px;
                border-radius: 999px;
            }

            #navbar nav {
                min-height: 52px;
                padding: 8px 12px;
            }


            /* LOGO */

            #logo-subscrr {
                gap: 7px;
            }

            #logo-subscrr span:first-child {
                width: 32px;
                height: 32px;
                border-radius: 10px;
                font-size: 29px;
            }

            #logo-subscrr span:last-child {
                font-size: 18px;
            }


            /* HIDE MENU */

            #navbar .hidden.sm\:flex {
                display: none !important;
            }


            /* RIGHT SIDE */

            #navbar nav > div {
                gap: 0 !important;
            }


            /* GET THE APP */

            #navbar a[href*="apps.apple.com"] {
                padding: 8px 14px;
                font-size: 13px;
            }


            /* MAIN */

            main {
                padding: 20px 20px 60px !important;
            }


            /* PAGE HEADER */

            main .mb-10 {
                margin-bottom: 30px !important;
            }

            main h1 {
                font-size: 36px !important;
                line-height: 1 !important;
                letter-spacing: -0.035em !important;
            }


            /* LAST UPDATED */

            main .mb-10 > div {
                margin-top: 12px !important;
                font-size: 13px !important;
                line-height: 1.5 !important;
            }


            /* SECTIONS */

            main section {
                padding-top: 25px !important;
                padding-bottom: 25px !important;
            }


            /* SECTION TITLE */

            main section h2 {
                font-size: 21px !important;
                line-height: 1.25 !important;
            }


            /* PARAGRAPH */

            main section > p,
            main section > div p,
            main section li {
                font-size: 15.5px !important;
                line-height: 1.7 !important;
            }


            /* LIST */

            main section ul {
                margin-top: 16px !important;
            }

            main section li {
                gap: 11px !important;
                align-items: flex-start !important;
            }

            main section li > span {
                margin-top: 9px !important;
                width: 5px !important;
                height: 5px !important;
            }

            main section li > p {
                min-width: 0;
                flex: 1;
            }


            /* INFO BOX */

            main section .rounded-2xl {
                margin-top: 20px !important;
                padding: 15px 16px !important;
                border-radius: 16px !important;
            }

            main section .rounded-2xl p {
                font-size: 14px !important;
                line-height: 1.65 !important;
            }


            /* CONTACT */

            main section:last-child p {
                font-size: 15px !important;
            }


            /* FOOTER */

            footer {
                padding: 36px 20px !important;
            }

            footer .mx-auto {
                width: 100%;
            }

            footer .md\:flex-row {
                flex-direction: column !important;
                align-items: flex-start !important;
                gap: 25px !important;
            }

            footer nav {
                display: flex;
                flex-wrap: wrap;
                gap: 12px 18px !important;
                line-height: 1.4;
            }

            footer nav a {
                font-size: 13px;
            }
        }


        /* =====================================================
           MOBILE SANGAT KECIL
        ====================================================== */

        @media (max-width: 400px) {

            /* NAVBAR */

            #navbar {
                width: calc(100% - 14px);
            }

            #navbar nav {
                padding-left: 9px;
                padding-right: 9px;
            }

            #logo-subscrr span:last-child {
                font-size: 17px;
            }

            #navbar a[href*="apps.apple.com"] {
                padding-left: 11px;
                padding-right: 11px;
                font-size: 12px;
            }


            /* MAIN */

            main {
                padding-left: 16px !important;
                padding-right: 16px !important;
            }


            /* TITLE */

            main h1 {
                font-size: 32px !important;
            }


            /* SECTION TITLE */

            main section h2 {
                font-size: 20px !important;
            }


            /* BODY */

            main section > p,
            main section > div p,
            main section li {
                font-size: 15px !important;
            }


            /* FOOTER */

            footer {
                padding-left: 16px !important;
                padding-right: 16px !important;
            }
        }


        /* =====================================================
           ACCESSIBILITY
        ====================================================== */

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                transition-duration: 0.01ms !important;
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
            }
        }
    </style>
</head>


<body class="bg-[#f4f3ef] text-[#1a1a1a] antialiased selection:bg-[#ff3218] selection:text-white pt-24 dark:bg-[#0a0a0a] dark:text-[#f3f4f6]">


    <!-- =====================================================
         HEADER / NAVBAR
    ====================================================== -->

    <?php $this->load->view('layout/navbar'); ?>


    <!-- =====================================================
         MAIN CONTENT
    ====================================================== -->

    <main class="px-5 pb-24 pt-6 sm:px-8 sm:pt-10 lg:px-10">

        <div class="mx-auto max-w-[760px]">


            <!-- PAGE HEADER -->
<div class="mb-10">

    <h1 class="text-[36px] font-bold tracking-[-0.03em] text-[#111827] sm:text-[46px] lg:text-[52px] dark:text-white">
        Terms of Use
    </h1>

    <div class="mt-3 flex flex-wrap items-center gap-1.5 text-[15px] text-[#707070] dark:text-gray-400">

        <span>
            Last updated: July 8, 2026
        </span>

        <span class="px-1">
            •
        </span>

        <a href="<?= base_url('privacy-policy') ?>"
            class="font-medium text-[#ff3218] transition hover:underline">
            Privacy Policy
        </a>

    </div>

</div>


<!-- INTRODUCTION -->
<section class="border-t border-[#e2dfd7] py-8 dark:border-[#27272a]">

    <div class="space-y-4 text-[16px] leading-relaxed text-[#555555] dark:text-gray-400">

        <p>
            Subscrr is operated by an independent developer (“we”, “us”).
            By using Subscrr you agree to these Terms and to our
            <a href="<?= base_url('privacy-policy') ?>"
                class="font-medium text-[#111827] underline underline-offset-4 hover:text-[#ff3218] dark:text-white dark:hover:text-[#ff3218]">
                Privacy Policy
            </a>.
            The app license is governed by
            <a href="https://www.apple.com/legal/internet-services/itunes/dev/stdeula/"
                target="_blank"
                rel="noopener noreferrer"
                class="font-medium text-[#111827] underline underline-offset-4 hover:text-[#ff3218] dark:text-white dark:hover:text-[#ff3218]">
                Apple’s standard End User License Agreement (EULA)
            </a>.
        </p>

    </div>

</section>


<!-- 1. ELIGIBILITY -->
<section class="border-t border-[#e2dfd7] py-8 dark:border-[#27272a]">

    <h2 class="text-[22px] font-bold text-[#111827] sm:text-[24px] dark:text-white">
        1. Eligibility
    </h2>

    <div class="mt-4 space-y-4 text-[16px] leading-relaxed text-[#555555] dark:text-gray-400">

        <p>
            You must be at least 13 years old (or the age of digital consent
            in your country) and able to enter into a binding agreement.
            Subscrr is intended for personal, non-commercial use.
        </p>

    </div>

</section>


<!-- 2. SUBSCRIPTION -->
<section class="border-t border-[#e2dfd7] py-8 dark:border-[#27272a]">

    <h2 class="text-[22px] font-bold text-[#111827] sm:text-[24px] dark:text-white">
        2. Subscription (Subscrr Premium)
    </h2>

    <div class="mt-4 space-y-4 text-[16px] leading-relaxed text-[#555555] dark:text-gray-400">

        <p>
            Subscrr is free to use and tracks up to six subscriptions
            with full breakdowns, reminders and iCloud sync.
            Subscrr Premium is an optional auto-renewable subscription
            (monthly or yearly) that removes the limit (unlimited subscriptions)
            and unlocks the AI Spend receipt scanner.
            Current prices are shown in the app before purchase.
        </p>

    </div>

    <ul class="mt-4 space-y-4 text-[16px] leading-relaxed text-[#555555] dark:text-gray-400">

        <li class="flex items-start gap-3">
            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070] dark:bg-gray-400"></span>

            <p>
                Payment is charged to your Apple ID account at confirmation
                of purchase.
            </p>
        </li>

        <li class="flex items-start gap-3">
            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070] dark:bg-gray-400"></span>

            <p>
                The subscription renews automatically unless cancelled
                at least 24 hours before the end of the current period;
                renewal is charged within 24 hours prior to the end of
                the period.
            </p>
        </li>

        <li class="flex items-start gap-3">
            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070] dark:bg-gray-400"></span>

            <p>
                Manage or cancel anytime in your App Store account settings
                (Settings → Apple ID → Subscriptions).
            </p>
        </li>

        <li class="flex items-start gap-3">
            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070] dark:bg-gray-400"></span>

            <p>
                Billing, confirmations, and refunds are handled by Apple.
                To request a refund, use
                <a href="https://reportaproblem.apple.com/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="font-medium text-[#111827] underline underline-offset-4 hover:text-[#ff3218] dark:text-white dark:hover:text-[#ff3218]">
                    reportaproblem.apple.com
                </a>.
            </p>
        </li>

    </ul>

    <div class="mt-6 rounded-2xl bg-white px-5 py-4 border border-black/5 dark:bg-[#1a1a1a] dark:border-white/10">

        <p class="text-[15px] leading-relaxed text-[#555555] dark:text-gray-400">
            Nothing here limits mandatory consumer rights under applicable law.
        </p>

    </div>

</section>


<!-- 3. AI FEATURES -->
<section class="border-t border-[#e2dfd7] py-8 dark:border-[#27272a]">

    <h2 class="text-[22px] font-bold text-[#111827] sm:text-[24px] dark:text-white">
        3. AI Features
    </h2>

    <div class="mt-4 space-y-4 text-[16px] leading-relaxed text-[#555555] dark:text-gray-400">

        <p>
            AI Spend uses third-party AI services to analyze receipts and
            bank screenshots. AI output can be wrong: totals, line items,
            currencies, merchants, and dates may be misread, incomplete,
            or missing.
        </p>

        <p>
            All AI results are estimates for your convenience.
            You are responsible for verifying extracted data before saving
            or relying on it. Subscrr’s outputs are not financial, tax,
            accounting, or budgeting advice.
        </p>

    </div>

</section>


<!-- 4. RECEIPT SCANNING -->
<section class="border-t border-[#e2dfd7] py-8 dark:border-[#27272a]">

    <h2 class="text-[22px] font-bold text-[#111827] sm:text-[24px] dark:text-white">
        4. Receipt Scanning
    </h2>

    <div class="mt-4 space-y-4 text-[16px] leading-relaxed text-[#555555] dark:text-gray-400">

        <p>
            Only scan documents you have the right to use.
            Do not submit documents containing other people’s personal data
            or sensitive information you do not want processed by an AI service.
            Images are processed solely to extract values; thumbnails are kept
            on your device as described in the Privacy Policy.
        </p>

    </div>

</section>


<!-- 5. INTELLECTUAL PROPERTY -->
<section class="border-t border-[#e2dfd7] py-8 dark:border-[#27272a]">

    <h2 class="text-[22px] font-bold text-[#111827] sm:text-[24px] dark:text-white">
        5. Intellectual Property
    </h2>

    <div class="mt-4 space-y-4 text-[16px] leading-relaxed text-[#555555] dark:text-gray-400">

        <p>
            The app, its design, code, and content (excluding third-party
            brand assets) belong to us. Your license to use the app is the
            limited personal license granted under Apple’s standard EULA.
            You may not copy, redistribute, reverse engineer, or attempt to
            extract the source code of Subscrr.
        </p>

    </div>

</section>


<!-- 6. TRADEMARKS -->
<section class="border-t border-[#e2dfd7] py-8 dark:border-[#27272a]">

    <h2 class="text-[22px] font-bold text-[#111827] sm:text-[24px] dark:text-white">
        6. Trademarks
    </h2>

    <div class="mt-4 space-y-4 text-[16px] leading-relaxed text-[#555555] dark:text-gray-400">

        <p>
            Subscrr displays names and logos of third-party subscription
            services for identification purposes only. We are not affiliated
            with, endorsed by, or sponsored by any of these companies.
            All trademarks and brand assets belong to their respective owners.
        </p>

    </div>

</section>


<!-- 7. DISCLAIMER -->
<section class="border-t border-[#e2dfd7] py-8 dark:border-[#27272a]">

    <h2 class="text-[22px] font-bold text-[#111827] sm:text-[24px] dark:text-white">
        7. Disclaimer
    </h2>

    <div class="mt-4 space-y-4 text-[16px] leading-relaxed text-[#555555] dark:text-gray-400">

        <p>
            Subscrr is provided “as is” and “as available”, without warranties
            of any kind.
        </p>

    </div>

    <ul class="mt-4 space-y-4 text-[16px] leading-relaxed text-[#555555] dark:text-gray-400">

        <li class="flex items-start gap-3">
            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070] dark:bg-gray-400"></span>

            <p>
                Subscrr is a tracker, not a cancellation service:
                it does not cancel, pause, or modify your real subscriptions.
                To cancel a subscription, contact the relevant provider directly;
                marking it in Subscrr only changes your tracking data.
            </p>
        </li>

        <li class="flex items-start gap-3">
            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070] dark:bg-gray-400"></span>

            <p>
                Reminders depend on your device and notification settings
                and may not always be delivered.
            </p>
        </li>

        <li class="flex items-start gap-3">
            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070] dark:bg-gray-400"></span>

            <p>
                Exchange rates are provided for convenience and may not reflect
                real-time market rates; converted amounts and projections
                are estimates only.
            </p>
        </li>

        <li class="flex items-start gap-3">
            <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070] dark:bg-gray-400"></span>

            <p>
                We do not guarantee that the app or any feature will be accurate,
                uninterrupted, error-free, or available forever, and we may
                change or discontinue features at any time.
            </p>
        </li>

    </ul>

</section>


<!-- 8. LIMITATION OF LIABILITY -->
<section class="border-t border-[#e2dfd7] py-8 dark:border-[#27272a]">

    <h2 class="text-[22px] font-bold text-[#111827] sm:text-[24px] dark:text-white">
        8. Limitation of Liability
    </h2>

    <div class="mt-4 space-y-4 text-[16px] leading-relaxed text-[#555555] dark:text-gray-400">

        <p>
            To the maximum extent permitted by law, we are not liable for
            indirect, incidental, consequential, special, exemplary, or
            punitive damages, or for loss of data, profits, revenue, or
            expected savings arising from your use of (or inability to use)
            Subscrr — including decisions made on the basis of AI Spend results,
            reminders, or currency estimates.
        </p>

        <p>
            Nothing in these Terms excludes liability where it would be
            unlawful to do so, including mandatory consumer rights that
            cannot be waived.
        </p>

    </div>

</section>


<!-- 9. TERMINATION -->
<section class="border-t border-[#e2dfd7] py-8 dark:border-[#27272a]">

    <h2 class="text-[22px] font-bold text-[#111827] sm:text-[24px] dark:text-white">
        9. Termination
    </h2>

    <div class="mt-4 space-y-4 text-[16px] leading-relaxed text-[#555555] dark:text-gray-400">

        <p>
            You may stop using Subscrr at any time by deleting the app.
            We may suspend or discontinue the app or any feature.
            Sections that by their nature should survive termination
            (including 5–8) survive.
        </p>

    </div>

</section>


<!-- CONTACT -->
<section class="border-t border-[#e2dfd7] py-8 dark:border-[#27272a]">

    <h2 class="text-[22px] font-bold text-[#111827] sm:text-[24px] dark:text-white">
        Contact
    </h2>

    <p class="mt-4">

        <a href="mailto:hi@subscrr.app"
            class="text-[16px] font-semibold text-[#111827] underline underline-offset-4 transition hover:text-[#ff3218] dark:text-white dark:hover:text-[#ff3218]">
            hi@subscrr.app
        </a>

    </p>

</section>

        </div>

    </main>


    <!-- =====================================================
         FOOTER
    ====================================================== -->
    <?php $this->load->view('layout/footer.php'); ?>


</body>

</html>