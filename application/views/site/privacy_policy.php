<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - Subscrr</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('assets/uploads/icon/icon_Subscrr.png') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/output.css') ?>">

<style>
    /* =====================================================
       RESPONSIVE - PRIVACY POLICY
    ====================================================== */

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

        /* Kurangi jarak menu */
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

        /* =================================================
           NAVBAR
        ================================================== */

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


        /* =================================================
           MAIN CONTENT
        ================================================== */

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


        /* =================================================
           SECTION
        ================================================== */

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

        /* BULLET */
        main section li {
            gap: 12px !important;
        }


        /* =================================================
           WHITE INFO BOX
        ================================================== */

        main section .rounded-2xl {
            padding: 16px 18px !important;
        }

        main section .rounded-2xl p {
            font-size: 15px !important;
            line-height: 1.65 !important;
        }


        /* =================================================
           FOOTER
        ================================================== */

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

        /* =================================================
           BODY
        ================================================== */

        body {
            padding-top: 78px !important;
            overflow-x: hidden;
        }


        /* =================================================
           NAVBAR
        ================================================== */

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


        /* SEMBUNYIKAN MENU */
        #navbar .hidden.sm\:flex {
            display: none !important;
        }


        /* JARAK KANAN */
        #navbar nav > div {
            gap: 0 !important;
        }


        /* GET THE APP */
        #navbar a[href*="apps.apple.com"] {
            padding: 8px 14px;
            font-size: 13px;
        }


        /* =================================================
           MAIN
        ================================================== */

        main {
            padding: 20px 20px 60px !important;
        }


        /* =================================================
           HEADER PRIVACY
        ================================================== */

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


        /* =================================================
           PRIVACY SECTIONS
        ================================================== */

        main section {
            padding-top: 25px !important;
            padding-bottom: 25px !important;
        }


        /* SECTION TITLE */
        main section h2 {
            font-size: 21px !important;
            line-height: 1.25 !important;
        }


        /* =================================================
           PARAGRAPH
        ================================================== */

        main section > p,
        main section > div p,
        main section li {
            font-size: 15.5px !important;
            line-height: 1.7 !important;
        }


        /* =================================================
           LIST
        ================================================== */

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


        /* =================================================
           INFO BOX
        ================================================== */

        main section .rounded-2xl {
            margin-top: 20px !important;
            padding: 15px 16px !important;
            border-radius: 16px !important;
        }

        main section .rounded-2xl p {
            font-size: 14px !important;
            line-height: 1.65 !important;
        }


        /* =================================================
           CONTACT
        ================================================== */

        main section:last-child p {
            font-size: 15px !important;
        }


        /* =================================================
           FOOTER
        ================================================== */

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

<body class="bg-[#f4f3ef] text-[#1a1a1a] antialiased selection:bg-[#ff3218] selection:text-white pt-24">

    <!-- =====================================================
         HEADER / NAVBAR (EXACT REPLICA DESIGN)
    ====================================================== -->
    <?php $this->load->view('layout/navbar'); ?>


    <!-- =====================================================
         MAIN CONTENT
    ====================================================== -->
    <main class="px-5 pb-24 pt-6 sm:px-8 sm:pt-10 lg:px-10">
        <div class="mx-auto max-w-[760px]">

            <!-- HEADER PAGE -->
            <div class="mb-10">
                <h1 class="text-[36px] font-bold tracking-[-0.03em] text-[#111827] sm:text-[46px] lg:text-[52px]">
                    Privacy Policy
                </h1>

                <div class="mt-3 flex flex-wrap items-center gap-1.5 text-[15px] text-[#707070]">
                    <span>Last updated: August 11, 2026</span>
                    <span class="px-1">•</span>
                    <a href="<?= base_url('terms') ?>" class="font-medium text-[#ff3218] transition hover:underline">
                        Terms of Use
                    </a>
                </div>
            </div>

            <!-- WHO WE ARE -->
            <section class="border-t border-[#e2dfd7] py-8">
                <h2 class="text-[22px] font-bold text-[#111827] sm:text-[24px]">
                    Who We Are
                </h2>

                <div class="mt-4 space-y-4 text-[16px] leading-relaxed text-[#555555]">
                    <p>
                        Subscrr is an iOS app for tracking subscriptions, operated by an independent developer. Subscrr has no user accounts and shows no ads inside the app. Your subscription data stays on your device and in your private iCloud.
                    </p>
                    <p>
                        We do use a small amount of product analytics and advertising measurement, described below, to understand how the app is used and how people discover it.
                    </p>
                    <p>
                        If you have any question about this policy, contact 
                        <a href="mailto:hi@subscrr.app" class="font-medium text-[#111827] underline underline-offset-4 hover:text-[#ff3218]">
                            hi@subscrr.app
                        </a>.
                    </p>
                </div>
            </section>

            <!-- WHAT WE COLLECT -->
            <section class="border-t border-[#e2dfd7] py-8">
                <h2 class="text-[22px] font-bold text-[#111827] sm:text-[24px]">
                    What We Collect
                </h2>

                <ul class="mt-4 space-y-4 text-[16px] leading-relaxed text-[#555555]">
                    <li class="flex items-start gap-3">
                        <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070]"></span>
                        <p>
                            <strong class="font-semibold text-[#111827]">Content you create in the app:</strong> 
                            subscription details (name, price, renewal period, dates, category, icons, colors) and personal calculation entries. This content stays on your device and, if you enable iCloud sync, in your private iCloud database.
                        </p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070]"></span>
                        <p>
                            <strong class="font-semibold text-[#111827]">Usage &amp; diagnostic data:</strong> 
                            anonymous product analytics about how the app is used — events such as completing onboarding, adding a subscription (its billing period, not its name or price), opening the paywall, or purchasing Premium — together with basic device and app information (device model, OS version, app version) and a random analytics identifier. This never includes the names, prices, or notes of your subscriptions.
                        </p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070]"></span>
                        <p>
                            <strong class="font-semibold text-[#111827]">Advertising measurement:</strong> 
                            if you install Subscrr from one of our ads, limited app events (such as install and app open) are shared with Meta to measure whether our advertising works, and Apple’s SKAdNetwork provides aggregated, anonymous attribution. The device advertising identifier is used only if you allow tracking when asked.
                        </p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070]"></span>
                        <p>
                            We still do not collect your name, email, contacts, or precise location, we never sell your data, and we do not share it with data brokers.
                        </p>
                    </li>
                </ul>
            </section>

            <!-- AI PROCESSING -->
            <section class="border-t border-[#e2dfd7] py-8">
                <h2 class="text-[22px] font-bold text-[#111827] sm:text-[24px]">
                    AI Processing (AI Spend)
                </h2>

                <p class="mt-4 text-[16px] leading-relaxed text-[#555555]">
                    AI Spend is an optional Premium feature. When you choose to scan a receipt or bank screenshot:
                </p>

                <ul class="mt-4 space-y-4 text-[16px] leading-relaxed text-[#555555]">
                    <li class="flex items-start gap-3">
                        <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070]"></span>
                        <p>the image is transmitted over HTTPS through our secure proxy (hosted on Cloudflare) to Google Gemini, solely to extract the total, line items, merchant, and date;</p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070]"></span>
                        <p>we do not store your images on any server;</p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070]"></span>
                        <p>the app keeps a small thumbnail and the extracted values in an on-device history until you delete them or they are automatically removed after a retention period;</p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070]"></span>
                        <p>please do not scan documents you would not want processed by an AI service.</p>
                    </li>
                </ul>
            </section>

            <!-- ANALYTICS & ADVERTISING -->
            <section class="border-t border-[#e2dfd7] py-8">
                <h2 class="text-[22px] font-bold text-[#111827] sm:text-[24px]">
                    Analytics &amp; Advertising
                </h2>

                <ul class="mt-4 space-y-4 text-[16px] leading-relaxed text-[#555555]">
                    <li class="flex items-start gap-3">
                        <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070]"></span>
                        <p>
                            <strong class="font-semibold text-[#111827]">PostHog</strong> 
                            — product analytics that helps us see which features are used and where people get stuck, so we can improve the app. It receives the usage events and device information described above, tied to a random identifier, and stores them on PostHog’s cloud in the United States. It does not receive your subscription content.
                        </p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070]"></span>
                        <p>
                            <strong class="font-semibold text-[#111827]">Meta (Facebook) SDK</strong> 
                            — advertising measurement. When you arrive from one of our ads, it reports basic app events to Meta so we can tell whether a campaign worked, and it supports Apple’s privacy-preserving SKAdNetwork. It uses the advertising identifier for cross-app measurement only if you grant permission in the “Allow Tracking” prompt; if you decline, measurement falls back to aggregated, anonymous data.
                        </p>
                    </li>
                </ul>

                <div class="mt-6 rounded-2xl bg-white px-5 py-4 shadow-sm border border-black/5">
                    <p class="text-[15px] leading-relaxed text-[#555555]">
                        You can turn tracking off at any time in 
                        <strong class="font-semibold text-[#111827]">iOS Settings → Privacy &amp; Security → Tracking.</strong> 
                        Declining does not limit any app feature.
                    </p>
                </div>
            </section>

            <!-- THIRD-PARTY SERVICES -->
            <section class="border-t border-[#e2dfd7] py-8">
                <h2 class="text-[22px] font-bold text-[#111827] sm:text-[24px]">
                    Third-Party Services
                </h2>

                <ul class="mt-4 space-y-4 text-[16px] leading-relaxed text-[#555555]">
                    <li class="flex items-start gap-3">
                        <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070]"></span>
                        <p>
                            <strong class="font-semibold text-[#111827]">Apple iCloud / CloudKit</strong> 
                            — optional private sync through your Apple account. We cannot access your private iCloud data.
                        </p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070]"></span>
                        <p>
                            <strong class="font-semibold text-[#111827]">Google Gemini</strong> 
                            (via our Cloudflare-hosted proxy) — receipt recognition for AI Spend, only when you submit an image.
                        </p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070]"></span>
                        <p>
                            <strong class="font-semibold text-[#111827]">Brandfetch</strong> 
                            (with Simple Icons as a fallback) — brand search and logos. These services receive only the text you type into brand search or the public domain name of a service (for example, netflix.com).
                        </p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070]"></span>
                        <p>
                            <strong class="font-semibold text-[#111827]">PostHog</strong> 
                            — product analytics (usage events and device info, no subscription content). See Analytics &amp; Advertising above.
                        </p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070]"></span>
                        <p>
                            <strong class="font-semibold text-[#111827]">Meta Platforms</strong> 
                            — advertising measurement for our ads. See Analytics &amp; Advertising above.
                        </p>
                    </li>
                </ul>

                <p class="mt-6 text-[16px] font-medium text-[#111827]">
                    No third party receives your subscription list, prices, notes, or any personal identifiers from us.
                </p>
            </section>

            <!-- WEBSITE ANALYTICS -->
            <section class="border-t border-[#e2dfd7] py-8">
                <h2 class="text-[22px] font-bold text-[#111827] sm:text-[24px]">
                    Website Analytics
                </h2>

                <div class="mt-4 space-y-4 text-[16px] leading-relaxed text-[#555555]">
                    <p>
                        Our website (subscrr.app) uses <strong class="font-semibold text-[#111827]">PostHog</strong> to understand which pages people read and whether they go on to the App Store, so we can improve the site. It records page views, the page you came from, a coarse location derived from your IP address, your browser and device type, and clicks on links such as the App Store button.
                    </p>
                    <p>
                        It sets <strong class="font-semibold text-[#111827]">no cookies</strong>: a random visit identifier is stored in your browser’s local storage, and nothing links it to your name or to your subscription data, which never leaves your device and iCloud.
                    </p>
                    <p>
                        We do not record your screen, and if your browser sends a “Do Not Track” signal we collect nothing at all.
                    </p>
                    <p>
                        To opt out completely, enable Do Not Track in your browser settings or block <strong class="font-semibold text-[#111827]">us.i.posthog.com</strong>. For analytics and advertising measurement inside the app, see the “Analytics &amp; Advertising” section above.
                    </p>
                </div>
            </section>

            <!-- PURCHASES -->
            <section class="border-t border-[#e2dfd7] py-8">
                <h2 class="text-[22px] font-bold text-[#111827] sm:text-[24px]">
                    Purchases
                </h2>

                <div class="mt-4 space-y-4 text-[16px] leading-relaxed text-[#555555]">
                    <p>
                        Subscrr Premium is purchased through Apple’s App Store. Apple processes all payments; we never see or store your payment details.
                    </p>
                    <p>
                        The app only receives a signed confirmation from Apple that a purchase is active, validated on your device.
                    </p>
                </div>
            </section>

            <!-- DATA STORAGE & DELETION -->
            <section class="border-t border-[#e2dfd7] py-8">
                <h2 class="text-[22px] font-bold text-[#111827] sm:text-[24px]">
                    Data Storage &amp; Deletion
                </h2>

                <ul class="mt-4 space-y-4 text-[16px] leading-relaxed text-[#555555]">
                    <li class="flex items-start gap-3">
                        <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070]"></span>
                        <p>
                            Your data is stored locally on your device and, if iCloud sync is enabled, in your private iCloud database linked to your Apple ID. Sync can be turned off in Settings → iCloud &amp; Data.
                        </p>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#707070]"></span>
                        <p>
                            You can delete any subscription, calculation, or AI scan at any time, use <strong class="font-semibold text-[#111827]">“Delete All Data”</strong> in Settings → iCloud &amp; Data (removes local and synced data), or delete the app. iCloud data can also be managed from your Apple ID settings.
                        </p>
                    </li>
                </ul>
            </section>

            <!-- YOUR RIGHTS -->
            <section class="border-t border-[#e2dfd7] py-8">
                <h2 class="text-[22px] font-bold text-[#111827] sm:text-[24px]">
                    Your Rights
                </h2>

                <div class="mt-4 space-y-4 text-[16px] leading-relaxed text-[#555555]">
                    <p>
                        Depending on where you live (including the EEA and the UK), you may have rights to access, correct, delete, restrict, or object to processing of your personal data.
                    </p>
                    <p>
                        Because your data lives on your device and in your private iCloud, you can exercise these rights directly in the app — edit or delete any entry, or use “Delete All Data”. For anything else, email us.
                    </p>
                    <p>
                        Subscrr is not intended for children under 13, and we do not knowingly collect data from children.
                    </p>
                    <p>
                        We may update this policy occasionally; changes will be posted on this page with an updated date.
                    </p>
                </div>
            </section>

            <!-- CONTACT -->
            <section class="border-t border-[#e2dfd7] py-8">
                <h2 class="text-[22px] font-bold text-[#111827] sm:text-[24px]">
                    Contact
                </h2>

                <p class="mt-4">
                    <a href="mailto:hi@subscrr.app" class="text-[16px] font-semibold text-[#111827] underline underline-offset-4 transition hover:text-[#ff3218]">
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