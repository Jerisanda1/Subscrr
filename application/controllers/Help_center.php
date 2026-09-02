<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help_center extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    // ==================== DATA GETTING STARTED ====================
    private function _get_Getting_started_data() {
        $items = [
            ['slug' => 'add-your-first-subscription', 'title' => 'Add your first subscription', 'desc' => 'Create a subscription in a few taps, with the right price, period and next charge date.', 'content' => 'Create a subscription in a few taps, with the right price, period and next charge date.'],
            ['slug' => 'import-subscriptions-you-already-pay-for', 'title' => 'Import subscriptions you already pay for', 'desc' => 'Copy over what Apple already bills you for, instead of typing everything by hand.', 'content' => 'Copy over what Apple already bills you for, instead of typing everything by hand.'],
            ['slug' => 'choose-your-display-currency', 'title' => 'Choose your display currency', 'desc' => 'Keep one currency on every screen, even when your subscriptions are billed in several.', 'content' => 'Keep one currency on every screen, even when your subscriptions are billed in several.'],
            ['slug' => 'turn-on-renewal-reminders', 'title' => 'Turn on renewal reminders', 'desc' => 'Get told before the money leaves, not after — and choose how many days of warning you want.', 'content' => 'Get told before the money leaves, not after — and choose how many days of warning you want.'],
            ['slug' => 'a-quick-tour-of-the-app', 'title' => 'A quick tour of the app', 'desc' => 'What each tab is for, so you know where to look for what.', 'content' => 'What each tab is for, so you know where to look for what.'],
            ['slug' => 'change-language-and-appearance', 'title' => 'Change language and appearance', 'desc' => 'English or Russian, and a warm light, dark or blue theme.', 'content' => 'English or Russian, and a warm light, dark or blue theme.'],
        ];

        return [
            'title' => 'Getting Started',
            'description' => 'Everything you need for your first ten minutes with Subscrr.',
            'count' => count($items) . ' articles',
            'items' => $items,
            'icon'  => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"/></svg>'
        ];
    }

    // ==================== DATA FAQs ====================
    private function _get_faq_data() {
        $items = [
            ['slug' => 'what-is-subscrr', 'title' => 'What is Subscrr?', 'desc' => 'An iPhone app for the two questions money actually raises: what repeats, and where the rest goes.', 'content' => 'Subscrr is an iPhone app that does two things. It tracks subscriptions and everyday spending.'],
            ['slug' => 'is-subscrr-free', 'title' => 'Is Subscrr free?', 'desc' => 'Free for up to six subscriptions and the whole calculator. Premium removes the limit and unlocks the AI scanner.', 'content' => 'Yes, with a limit. Free covers tracking up to six subscriptions, renewal reminders, widgets, iCloud sync and the full calculator.'],
            ['slug' => 'does-it-connect-to-my-bank', 'title' => 'Does it connect to my bank?', 'desc' => 'No. Subscrr never asks for bank credentials — you add subscriptions yourself and scan receipts instead.', 'content' => 'No, and this is deliberate. Subscrr has no bank integration, asks for no bank login, and stores no card details.'],
            ['slug' => 'which-devices-are-supported', 'title' => 'Which devices are supported?', 'desc' => 'iPhone first, with iPad, an Apple Watch companion, and home and lock screen widgets.', 'content' => 'Subscrr is an Apple-platform app. iPhone, iPad, Apple Watch, Widgets, and Live Activity.'],
            ['slug' => 'do-you-see-my-data', 'title' => 'Do you see my data?', 'desc' => 'No. Your subscriptions live on your device and in your own iCloud, and there is no account to sign into.', 'content' => 'No. Your subscriptions, calculations and totals live on your device and — if you enable sync — in your own private iCloud container.'],
            ['slug' => 'which-currencies-are-supported', 'title' => 'Which currencies are supported?', 'desc' => 'Enter each subscription in the currency it is billed in, and read every total in the one you choose.', 'content' => 'All the major currencies are available, both as the currency a subscription is billed in and as your display currency.'],
            ['slug' => 'can-i-use-it-offline', 'title' => 'Can I use it offline?', 'desc' => 'Everything except receipt scanning and fresh exchange rates works with no connection at all.', 'content' => 'Yes, almost entirely. Your subscriptions, the dashboard, the calculator, reminders and widgets all work offline.'],
            ['slug' => 'how-accurate-is-the-receipt-scanner', 'title' => 'How accurate is the receipt scanner?', 'desc' => 'Good on clear receipts, imperfect on crumpled ones — and every field is editable before you save.', 'content' => 'On a flat, readable receipt in decent light, recognition of the total and the line items is reliable.'],
            ['slug' => 'is-there-an-android-version', 'title' => 'Is there an Android version?', 'desc' => 'Not today. Subscrr is an iPhone app built on Apple-only foundations.', 'content' => 'No. Subscrr is built natively for Apple platforms — the sync, the widgets, the watch app and the purchase handling all lean on Apple frameworks.'],
            ['slug' => 'how-do-i-suggest-a-feature', 'title' => 'How do I suggest a feature?', 'desc' => 'Write to us — feature requests genuinely shape what gets built next.', 'content' => 'Email hi@subscrr.app, or reply in the Telegram channel. Subscrr is developed solo, so requests are read by the person who would build the thing.'],
        ];

        return [
            'title'       => 'FAQs',
            'description' => 'Find quick answers to frequently asked questions.',
            'count'       => count($items) . ' articles',
            'items'       => $items,
            'icon'        => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z"/></svg>'
        ];
    }

    // ==================== DATA HOW TOS ====================
    private function _get_how_tos_data() {
        $items = [
            ['slug' => 'edit-or-delete-a-subscription', 'title' => 'Edit or delete a subscription', 'desc' => 'Change a price after a hike, correct a date, or remove something you have cancelled.', 'content' => 'Tap the subscription in the list to open it, then edit any field: name, price, currency, billing period, next charge date, category or icon.'],
            ['slug' => 'use-a-custom-billing-interval', 'title' => 'Use a custom billing interval', 'desc' => 'For anything that does not fit weekly, monthly or yearly — every 3 months, every 10 days, every 2 years.', 'content' => 'Besides the usual presets, Subscrr supports a custom interval: every N days, weeks, months or years.'],
            ['slug' => 'organise-with-categories-and-tags', 'title' => 'Organise with categories and tags', 'desc' => 'Categories drive the breakdown charts; tags let you slice spending your own way.', 'content' => 'Every subscription and every scanned item belongs to a category — food, cafe, transport, entertainment and so on.'],
            ['slug' => 'read-your-dashboard', 'title' => 'Read your dashboard', 'desc' => 'What the big number means, and what the breakdown chart is telling you.', 'content' => 'The dashboard sits above your subscription list and answers one question: what does all of this cost?'],
            ['slug' => 'cost-per-day-month-year', 'title' => 'Cost per day, month and year', 'desc' => 'Why the same subscription is shown four different ways, and why the numbers always agree.', 'content' => 'Subscrr shows every recurring cost across four horizons: per day, per week, per month and per year.'],
            ['slug' => 'calculate-what-a-habit-costs', 'title' => 'Calculate what a habit costs', 'desc' => 'Turn "a coffee every working morning" into a monthly and yearly number.', 'content' => 'The calculator is for money that is not a subscription but behaves like one.'],
            ['slug' => 'scan-a-receipt-with-ai-spend', 'title' => 'Scan a receipt with AI Spend', 'desc' => 'Photograph a receipt or a bank screenshot and get the total, the items and the categories filled in.', 'content' => 'AI Spend is the fastest way to know where the money actually went, and it needs no bank connection.'],
            ['slug' => 'recategorise-a-receipt-item', 'title' => 'Recategorise a receipt item', 'desc' => 'When the scanner puts the dog food under groceries, move it in a tap.', 'content' => 'Automatic categorisation is right most of the time and confidently wrong some of the time.'],
            ['slug' => 'browse-your-scan-history', 'title' => 'Browse your scan history', 'desc' => 'Every scan grouped by day, with the original screenshot and the items it contained.', 'content' => 'Scans are kept in a history so a scan is not a one-time answer but a record.'],
            ['slug' => 'read-the-spending-statistics', 'title' => 'Read the spending statistics', 'desc' => 'A bar chart of the last 30 days and a donut of where the money concentrated.', 'content' => 'Once you have scanned a few receipts, statistics start to answer the question that the individual scans cannot: what do I actually spend on?'],
            ['slug' => 'add-widgets-home-lock-screen', 'title' => 'Add widgets to your home and lock screen', 'desc' => 'Put the next charge, or today\'s affirmation, where you will actually see it.', 'content' => 'A subscription total you have to open an app to see is a total you will not look at.'],
            ['slug' => 'reminder-settings', 'title' => 'Reminder settings', 'desc' => 'Choose how many days of warning you get, and mute a single subscription without touching the rest.', 'content' => 'Everything below lives in Settings → Notifications.'],
            ['slug' => 'put-affirmation-on-lock-screen', 'title' => 'Put the affirmation on your Lock Screen', 'desc' => 'Go live with the daily affirmation — Lock Screen, Dynamic Island and a home screen widget.', 'content' => 'The daily affirmation lives on the Overview tab, but a calm thought helps most in the moments between things.'],
            ['slug' => 'search-your-subscriptions', 'title' => 'Search your subscriptions', 'desc' => 'The search bar at the bottom of the list finds anything you track, by name or category.', 'content' => 'Once the list grows past a dozen entries, scrolling stops being a way to find things. Search is.'],
            ['slug' => 'split-a-subscriptions-cost', 'title' => 'Split a subscription\'s cost', 'desc' => 'Sharing a family plan? Tell Subscrr how many people chip in, and your totals count only your share.', 'content' => 'A family Netflix plan paid from your card is not really your expense — most of it comes back from the people you share it with.'],
            ['slug' => 'mark-a-payment-as-paid', 'title' => 'Mark a payment as paid', 'desc' => 'Tick off what you have already covered, and the "left this month" figure tells the truth.', 'content' => 'Not every payment leaves your card by itself. Rent, a tutor, your share of a family plan — the date arrives, but whether the money moved is something only you know.'],
            ['slug' => 'set-a-duration-or-a-one-off-payment', 'title' => 'Set a duration or a one-off payment', 'desc' => 'Not everything runs forever — give a subscription an end date, or record a single payment.', 'content' => 'A prepaid year of a course, a gym membership that ends in June, a single large purchase: none of these repeat forever.'],
            ['slug' => 'set-aside-for-annual-plans', 'title' => 'Set aside for annual plans', 'desc' => 'What a yearly renewal costs per month, and how much should already be waiting for it.', 'content' => 'Annual plans are the ones that hurt: eleven quiet months, then a single large charge.'],
            ['slug' => 'change-the-app-icon', 'title' => 'Change the app icon', 'desc' => 'Six looks for the Home Screen, all free.', 'content' => 'Open Settings and scroll to App icon. Six options: Classic, Midnight, Cream, Sunset, Sand and Blush.'],
        ];

        return [
            'title'       => 'How Tos',
            'description' => 'Learn how to master every aspect in Subscrr.',
            'count'       => count($items) . ' articles',
            'items'       => $items,
            'icon'        => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" /></svg>'
        ];
    }

    // ==================== DATA TROUBLESHOOTING ====================
    private function _get_troubleshooting_data() {
        $items = [
            ['slug' => 'reminders-do-not-arrive', 'title' => 'Reminders do not arrive', 'desc' => 'Work through permissions, Focus and Scheduled Summary — one of these is nearly always the cause.', 'content' => 'Go through these in order. The cause is almost never the app itself.'],
            ['slug' => 'subscriptions-not-on-other-device', 'title' => 'My subscriptions are not on my other device', 'desc' => 'Sync runs through your private iCloud — both devices need the same Apple Account and iCloud switched on.', 'content' => 'Subscrr syncs through your iCloud, not through our servers. That means there is nothing on our side to reset.'],
            ['slug' => 'receipt-scan-failed-or-misread', 'title' => 'Receipt scan failed or misread', 'desc' => 'What to change about the photo, and what to do when the recognition is simply wrong.', 'content' => 'Flatten the receipt. Creases across the total are the single biggest cause of misreads.'],
            ['slug' => 'scan-wrong-total-or-missing-items', 'title' => 'A scan has the wrong total or missing items', 'desc' => 'Fix it on the result screen before saving — and know which discrepancies are actually correct.', 'content' => 'The result screen is fully editable: tap the total to correct it, tap an item to change its price or category.'],
            ['slug' => 'paid-but-premium-not-active', 'title' => 'I paid, but Premium is not active', 'desc' => 'Restore purchases first — this is the normal step after a reinstall or a new phone.', 'content' => 'Open Settings in Subscrr and tap Restore Purchases. This is the expected step after reinstalling the app.'],
            ['slug' => 'currency-conversion-looks-wrong', 'title' => 'Currency conversion looks wrong', 'desc' => 'Subscrr uses market rates; your bank uses its own, and the gap is the bank\'s spread.', 'content' => 'Two different numbers, both correct. Subscrr converts using market exchange rates, refreshed regularly.'],
            ['slug' => 'widgets-not-updating', 'title' => 'Widgets are not updating', 'desc' => 'iOS controls widget refresh — Low Power Mode and Background App Refresh are the usual suspects.', 'content' => 'Widgets do not update continuously. iOS decides when to refresh them, budgeting by how often you actually look at the widget.'],
            ['slug' => 'app-crashes-or-freezes', 'title' => 'The app crashes or freezes', 'desc' => 'Three quick steps that fix nearly all of it, and what to send if they do not.', 'content' => 'Try these first: Force-quit and reopen. Restart the iPhone. Update Subscrr and iOS.'],
        ];

        return [
            'title'       => 'Troubleshooting',
            'description' => 'Explore solutions to common issues and get a smoother experience.',
            'count'       => count($items) . ' articles',
            'items'       => $items,
            'icon'        => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a9.004 9.004 0 0 1 8.716 6.747M12 3a9.004 9.004 0 0 0-8.716 6.747" /></svg>'
        ];
    }

    // ==================== DATA PREMIUM & BILLING ====================
    private function _get_premium_billing_data() {
        $items = [
            ['slug' => 'what-is-free-and-what-is-premium', 'title' => 'What is free and what is Premium', 'desc' => 'Six subscriptions and the whole calculator are free; Premium removes the limit and unlocks AI scanning.', 'content' => 'Free: Track up to six subscriptions. Renewal reminders. The dashboard and category breakdown. The full calculator. Premium: Unlimited subscriptions. AI Spend.'],
            ['slug' => 'subscribe-to-premium', 'title' => 'Subscribe to Premium', 'desc' => 'Buy through the App Store in a couple of taps, on the Apple Account already on your phone.', 'content' => 'Open Settings in Subscrr, or tap any Premium prompt in the app. Pick the plan — monthly or yearly.'],
            ['slug' => 'restore-purchases', 'title' => 'Restore purchases', 'desc' => 'The one-tap step after reinstalling the app or switching to a new iPhone.', 'content' => 'Open Settings in Subscrr and tap Restore Purchases. You need this after reinstalling the app, moving to a new iPhone, or erasing and setting up the device again.'],
            ['slug' => 'cancel-premium', 'title' => 'Cancel Premium', 'desc' => 'Cancelling happens in iOS Settings, not in the app — and you keep access until the period ends.', 'content' => 'Subscrr cannot cancel the subscription for you, because Apple owns the billing relationship. It takes about fifteen seconds: Open iOS Settings. Tap your name. Tap Subscriptions. Pick Subscrr and tap Cancel Subscription.'],
            ['slug' => 'refunds', 'title' => 'Refunds', 'desc' => 'Refunds are handled by Apple at reportaproblem.apple.com — but write to us too.', 'content' => 'Purchases are processed by Apple, so refunds go through Apple rather than through us. We have no ability to issue one.'],
            ['slug' => 'redeem-a-promo-code', 'title' => 'Redeem a promo code', 'desc' => 'How to use an offer code from a giveaway, a review or the Telegram channel.', 'content' => 'Free Premium is handed out from time to time as App Store offer codes. To redeem one: Open the App Store app. Tap your profile picture in the top right. Tap Redeem Gift Card or Code. Enter the code.'],
        ];

        return [
            'title'       => 'Premium & Billing',
            'description' => 'What is free, what Premium unlocks, and how purchases work.',
            'count'       => count($items) . ' articles',
            'items'       => $items,
            'icon'        => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" /></svg>'
        ];
    }

    // ==================== DATA PRIVACY & YOUR DATA ====================
    private function _get_privacy_data() {
        $items = [
            ['slug' => 'where-your-data-lives', 'title' => 'Where your data lives', 'desc' => 'On your iPhone, and in your own private iCloud container. Not on our servers.', 'content' => 'Subscrr stores your data in two places, both of which belong to you: On your device. In your private iCloud container. There is no Subscrr server holding your subscriptions.'],
            ['slug' => 'what-happens-to-scanned-receipts', 'title' => 'What happens to scanned receipts', 'desc' => 'Sent for recognition, not stored, never used for advertising — and the history stays local for 30 days.', 'content' => 'When you scan a receipt, the image is sent to a recognition service through our own proxy, which returns the total, the line items and the suggested categories. The image is not stored on our servers.'],
            ['slug' => 'analytics-and-advertising', 'title' => 'Analytics and advertising', 'desc' => 'A small amount of product analytics and ad measurement, and how to turn tracking off.', 'content' => 'Two things are measured, and neither of them involves your subscriptions. Product analytics. Advertising measurement.'],
            ['slug' => 'delete-everything', 'title' => 'Delete everything', 'desc' => 'Remove the local copy, the iCloud copy, and the calculator and scan history.', 'content' => 'Deleting the app removes everything stored on that device. Deleting the app does not delete the iCloud copy — that is the point of sync.'],
            ['slug' => 'there-is-no-account-to-create', 'title' => 'There is no account to create', 'desc' => 'No email, no password, no sign-in. Install and start.', 'content' => 'Subscrr has no account system. You never create one, never confirm an email address, and never reset a password.'],
        ];

        return [
            'title'       => 'Privacy & Your Data',
            'description' => 'Where your data lives, what leaves the device, and how to delete it.',
            'count'       => count($items) . ' articles',
            'items'       => $items,
            'icon'        => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" /></svg>'
        ];
    }

    // ==================== DATA SUBSCRR ACROSS DEVICES ====================
    private function _get_devices_data() {
        $items = [
            ['slug' => 'subscrr-on-iphone-and-ipad', 'title' => 'Subscrr on iPhone and iPad', 'desc' => 'The same app on both, with the same data, kept in step through iCloud.', 'content' => 'Subscrr is built for iPhone first — that is where reminders land and where receipts get scanned. The same app also runs on iPad, with the same data.'],
            ['slug' => 'subscrr-on-apple-watch', 'title' => 'Subscrr on Apple Watch', 'desc' => 'A companion app and six complications, so the next charge is on your wrist.', 'content' => 'There is a companion Apple Watch app, plus complications you can put on a watch face.'],
            ['slug' => 'widgets-on-the-home-and-lock-screen', 'title' => 'Widgets on the home and lock screen', 'desc' => 'Sizes available, what each one shows, and how often they refresh.', 'content' => 'Widgets are the point at which a tracker becomes useful, because they remove the step where you have to remember to open anything.'],
            ['slug' => 'icloud-sync-explained', 'title' => 'iCloud sync explained', 'desc' => 'What syncs, what does not, and why there is no account to sign into.', 'content' => 'Sync runs through your private iCloud container, tied to your Apple Account. We cannot read it, and there is no Subscrr login involved.'],
            ['slug' => 'moving-to-a-new-iphone', 'title' => 'Moving to a new iPhone', 'desc' => 'With sync on, it is install, sign in, wait a minute. With sync off, do this first.', 'content' => 'If iCloud sync is on: Install Subscrr on the new iPhone. Sign into the same Apple Account. Open the app and leave it on screen for a minute while the first sync runs.'],
        ];

        return [
            'title'       => 'Subscrr Across Devices',
            'description' => 'Using Subscrr on iPhone, iPad, Apple Watch and your home screen.',
            'count'       => count($items) . ' articles',
            'items'       => $items,
            'icon'        => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" /></svg>'
        ];
    }

    // ==================== DATA KARTU HALAMAN UTAMA ====================
    private function _get_help_categories() {
        $gs      = $this->_get_Getting_started_data();
        $fq      = $this->_get_faq_data();
        $howtos  = $this->_get_how_tos_data();
        $trouble = $this->_get_troubleshooting_data();
        $premium = $this->_get_premium_billing_data();
        $privacy = $this->_get_privacy_data();
        $devices = $this->_get_devices_data();

        return [
            'main_cards' => [
                ['title' => $gs['title'], 'description' => $gs['description'], 'count' => $gs['count'], 'link' => base_url('Help_center/getting_started'), 'icon' => $gs['icon']],
                ['title' => $fq['title'], 'description' => $fq['description'], 'count' => $fq['count'], 'link' => base_url('Help_center/faqs'), 'icon' => $fq['icon']]
            ],
            'category_cards' => [
                ['title' => $howtos['title'], 'description' => $howtos['description'], 'count' => $howtos['count'], 'link' => base_url('Help_center/how_tos'), 'icon' => $howtos['icon']],
                ['title' => $trouble['title'], 'description' => $trouble['description'], 'count' => $trouble['count'], 'link' => base_url('Help_center/troubleshooting'), 'icon' => $trouble['icon']],
                ['title' => $premium['title'], 'description' => $premium['description'], 'count' => $premium['count'], 'link' => base_url('Help_center/premium_billing'), 'icon' => $premium['icon']],
                ['title' => $privacy['title'], 'description' => $privacy['description'], 'count' => $privacy['count'], 'link' => base_url('Help_center/privacy'), 'icon' => $privacy['icon']],
                ['title' => $devices['title'], 'description' => $devices['description'], 'count' => $devices['count'], 'link' => base_url('Help_center/devices'), 'icon' => $devices['icon']]
            ]
        ];
    }

    // ==================== GABUNGKAN SEMUA ARTIKEL UNTUK PENCARIAN ====================
    private function _get_all_searchable_items() {
        $all_items = [];
        $categories = [
            'Getting Started'        => $this->_get_Getting_started_data()['items'],
            'FAQs'                   => $this->_get_faq_data()['items'],
            'How Tos'                => $this->_get_how_tos_data()['items'],
            'Troubleshooting'        => $this->_get_troubleshooting_data()['items'],
            'Premium & Billing'      => $this->_get_premium_billing_data()['items'],
            'Privacy & Your Data'    => $this->_get_privacy_data()['items'],
            'Subscrr Across Devices' => $this->_get_devices_data()['items'],
        ];

        foreach ($categories as $category => $items) {
            foreach ($items as $item) {
                $item['category'] = $category;
                if (!isset($item['content'])) {
                    $item['content'] = ''; 
                }
                $all_items[] = $item;
            }
        }
        return $all_items;
    }

    // ==================== METHOD HALAMAN ====================

    // Halaman Contact
    public function contact() {
        $this->load->view('site/content_help/Contact_us');
    }

    // Halaman utama
    public function index() {
        $data = $this->_get_help_categories();
        $this->load->view('Help_center', $data);
    }

    // Daftar artikel Getting Started
    public function getting_started() {
        $data = $this->_get_Getting_started_data();
        $this->load->view('site/content_help/Category_help', $data);
    }

    // Daftar FAQ
    public function faqs() {
        $data = $this->_get_faq_data();
        $this->load->view('site/content_help/Category_help', $data);
    }

    // Daftar How Tos
    public function how_tos() {
        $data = $this->_get_how_tos_data();
        $this->load->view('site/content_help/Category_help', $data);
    }

    // Daftar Troubleshooting
    public function troubleshooting() {
        $data = $this->_get_troubleshooting_data();
        $this->load->view('site/content_help/Category_help', $data);
    }

    // Daftar Premium & Billing
    public function premium_billing() {
        $data = $this->_get_premium_billing_data();
        $this->load->view('site/content_help/Category_help', $data);
    }

    // Daftar Privacy & Your Data
    public function privacy() {
        $data = $this->_get_privacy_data();
        $this->load->view('site/content_help/Category_help', $data);
    }

    // Daftar Subscrr Across Devices
    public function devices() {
        $data = $this->_get_devices_data();
        $this->load->view('site/content_help/Category_help', $data);
    }

    // Detail artikel berdasarkan slug
    public function article($slug = '') {
        // Getting Started
        $getting_started_items = $this->_get_Getting_started_data()['items'];
        foreach ($getting_started_items as $item) {
            if ($item['slug'] === $slug) {
                $data['title']          = $item['title'];
                $data['description']    = $item['desc'];
                $data['slug']           = $slug;
                $data['all_articles']   = $getting_started_items;
                $this->load->view('site/content_help/Article_getting', $data);
                return;
            }
        }

        // FAQ
        $faq_items = $this->_get_faq_data()['items'];
        foreach ($faq_items as $item) {
            if ($item['slug'] === $slug) {
                $data['title']          = $item['title'];
                $data['description']    = $item['desc'];
                $data['slug']           = $slug;
                $data['all_articles']   = $faq_items;
                $this->load->view('site/content_help/Article_faq', $data);
                return;
            }
        }

        // How Tos
        $how_tos_items = $this->_get_how_tos_data()['items'];
        foreach ($how_tos_items as $item) {
            if ($item['slug'] === $slug) {
                $data['title']          = $item['title'];
                $data['description']    = $item['desc'];
                $data['slug']           = $slug;
                $data['all_articles']   = $how_tos_items;
                $this->load->view('site/content_help/Article_tos', $data);
                return;
            }
        }

        // Troubleshooting
        $troubleshooting_items = $this->_get_troubleshooting_data()['items'];
        foreach ($troubleshooting_items as $item) {
            if ($item['slug'] === $slug) {
                $data['title']          = $item['title'];
                $data['description']    = $item['desc'];
                $data['slug']           = $slug;
                $data['all_articles']   = $troubleshooting_items;
                $this->load->view('site/content_help/Article_Troubleshooting', $data);
                return;
            }
        }

        // Premium & Billing
        $premium_items = $this->_get_premium_billing_data()['items'];
        foreach ($premium_items as $item) {
            if ($item['slug'] === $slug) {
                $data['title']          = $item['title'];
                $data['description']    = $item['desc'];
                $data['slug']           = $slug;
                $data['all_articles']   = $premium_items;
                $this->load->view('site/content_help/Article_peremium', $data);
                return;
            }
        }

        // Privacy & Your Data
        $privacy_items = $this->_get_privacy_data()['items'];
        foreach ($privacy_items as $item) {
            if ($item['slug'] === $slug) {
                $data['title']          = $item['title'];
                $data['description']    = $item['desc'];
                $data['slug']           = $slug;
                $data['all_articles']   = $privacy_items;
                $this->load->view('site/content_help/Article_privacy', $data);
                return;
            }
        }

        // Subscrr Across Devices
        $devices_items = $this->_get_devices_data()['items'];
        foreach ($devices_items as $item) {
            if ($item['slug'] === $slug) {
                $data['title']          = $item['title'];
                $data['description']    = $item['desc'];
                $data['slug']           = $slug;
                $data['all_articles']   = $devices_items;
                $this->load->view('site/content_help/Article_devices', $data);
                return;
            }
        }

        show_404();
    }

    // ==================== FITUR PENCARIAN ====================

    // SEARCH AJAX (Dropdown real-time)
    public function search() {
        $q = $this->input->get('q');
        if (!$q) {
            echo json_encode([]);
            return;
        }

        $q = strtolower(trim($q));
        $results = [];

        foreach ($this->_get_all_searchable_items() as $item) {
            $title   = strtolower($item['title']);
            $desc    = strtolower($item['desc']);
            $content = strtolower($item['content']);

            if (strpos($title, $q) !== false || strpos($desc, $q) !== false || strpos($content, $q) !== false) {
                $results[] = [
                    'category' => $item['category'],
                    'title'    => $item['title'],
                    'desc'     => $item['desc'],
                    'slug'     => $item['slug']
                ];
            }
        }

        echo json_encode($results);
    }

    // HALAMAN HASIL PENCARIAN (Non-AJAX)
    public function search_results() {
        $q = $this->input->get('q');
        $data['query'] = $q;
        $data['results'] = [];

        if ($q) {
            $q_lower = strtolower(trim($q));
            foreach ($this->_get_all_searchable_items() as $item) {
                $title   = strtolower($item['title']);
                $desc    = strtolower($item['desc']);
                $content = strtolower($item['content']);

                if (strpos($title, $q_lower) !== false || strpos($desc, $q_lower) !== false || strpos($content, $q_lower) !== false) {
                    $data['results'][] = [
                        'category' => $item['category'],
                        'title'    => $item['title'],
                        'desc'     => $item['desc'],
                        'slug'     => $item['slug']
                    ];
                }
            }
        }

        $data['content_view'] = 'site/content_help/Search_results';
        $this->load->view('Help_center', $data);
    }
}