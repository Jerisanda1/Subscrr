<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - Subscrr</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?= base_url('assets/output.css') ?>">
</head>

<body class="bg-[#f4f3ef] text-[#1a1a1a] antialiased selection:bg-[#ff3218] selection:text-white pt-24">

    <!-- =====================================================
         HEADER / NAVBAR (EXACT REPLICA DESIGN)
    ====================================================== -->
    <header id="navbar"
        class="fixed top-5 inset-x-0 z-50 mx-auto w-[calc(100%-48px)] max-w-[1240px] bg-white shadow-[0_4px_25px_rgba(0,0,0,0.06)] border border-gray-100/80 rounded-full transition-all">
        <nav class="flex items-center justify-between px-6 py-3.5">

            <!-- LOGO (KIRI) -->
            <a href="<?= site_url('home') ?>" id="logo-subscrr" class="flex items-center gap-3 shrink-0">
                <span class="flex items-center justify-center h-9 w-9 rounded-xl bg-[#c6d7ff] text-[#ff3218] text-[39px] font-black leading-none shrink-0 shadow-sm">
                    S
                </span>
                <span class="text-[22px] font-extrabold tracking-tight text-[#171717]">
                    Subscrr
                </span>
            </a>

            <!-- MENU + BUTTON (KANAN) -->
            <div class="flex items-center gap-6 md:gap-8">
                
                <!-- NAVIGATION LINKS -->
                <div class="hidden sm:flex items-center gap-6 lg:gap-7">
                    <a href="<?= site_url('home') ?>#overview" class="text-[15px] font-semibold text-[#6b7280] transition hover:text-[#111827]">
                        Overview
                    </a>
                    <a href="<?= site_url('home') ?>#ai_spend" class="text-[15px] font-semibold text-[#6b7280] transition hover:text-[#111827]">
                        AI Spend
                    </a>
                    <a href="<?= base_url('privacy-policy') ?>" class="text-[15px] font-semibold text-[#6b7280] transition hover:text-[#111827]">
                        Privacy
                    </a>
                    <a href="<?= site_url('home') ?>#pricing" class="text-[15px] font-semibold text-[#6b7280] transition hover:text-[#111827]">
                        Pricing
                    </a>
                    <a href="<?= base_url('blog') ?>" class="text-[15px] font-semibold text-[#6b7280] transition hover:text-[#111827]">
                        Blog
                    </a>
                </div>

                <!-- BUTTON GET THE APP -->
                <a href="https://apps.apple.com/us/app/subscrr-take-back-control/id6757530448" target="_blank" rel="noopener noreferrer"
                    class="shrink-0 rounded-full bg-[#ff3218] px-6 py-2.5 text-[15px] font-bold text-white whitespace-nowrap shadow-sm transition duration-200 hover:bg-[#e02b14] active:scale-[0.98]">
                    Get the app
                </a>

            </div>

        </nav>
    </header>

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
    <footer class="border-t border-black/10 bg-[#121214] px-5 py-12 text-white sm:px-8 lg:px-10">
        <div class="mx-auto max-w-[1100px]">
            <div class="flex flex-col gap-8 md:flex-row md:items-end md:justify-between">
                
                <!-- LEFT -->
                <div>
                    <a href="<?= base_url() ?>" class="text-[20px] font-black tracking-tight">
                        Subscrr
                    </a>
                    <p class="mt-2 text-[13px] text-gray-400">
                        © 2026 Subscrr. All rights reserved.
                    </p>
                </div>

                <!-- RIGHT -->
                <nav class="flex flex-wrap gap-x-6 gap-y-3 text-[13px] text-gray-400">
                    <a href="#" class="transition hover:text-white">Help Center</a>
                    <a href="#" class="transition hover:text-white">Contact us</a>
                    <a href="<?= base_url('privacy-policy') ?>" class="font-medium text-white">Privacy Policy</a>
                    <a href="<?= base_url('terms') ?>" class="transition hover:text-white">Terms of Use</a>
                </nav>
            </div>
        </div>
    </footer>

</body>
</html> 