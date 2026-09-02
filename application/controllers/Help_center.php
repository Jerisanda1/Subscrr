<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help_center extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    // Data Getting Started
    private function _get_Getting_started_data() {
        $items = [
            ['slug' => 'add-your-first-subscription', 'title' => 'Add your first subscription', 'desc' => 'Create a subscription in a few taps, with the right price, period and next charge date.'],
            ['slug' => 'import-subscriptions-you-already-pay-for', 'title' => 'Import subscriptions you already pay for', 'desc' => 'Copy over what Apple already bills you for, instead of typing everything by hand.'],
            ['slug' => 'choose-your-display-currency', 'title' => 'Choose your display currency', 'desc' => 'Keep one currency on every screen, even when your subscriptions are billed in several.'],
            ['slug' => 'turn-on-renewal-reminders', 'title' => 'Turn on renewal reminders', 'desc' => 'Get told before the money leaves, not after — and choose how many days of warning you want.'],
            ['slug' => 'a-quick-tour-of-the-app', 'title' => 'A quick tour of the app', 'desc' => 'What each tab is for, so you know where to look for what.'],
            ['slug' => 'change-language-and-appearance', 'title' => 'Change language and appearance', 'desc' => 'English or Russian, and a warm light, dark or blue theme.'],
        ];

        return [
            'title' => 'Getting Started',
            'description' => 'Everything you need for your first ten minutes with Subscrr.',
            'count' => count($items) . ' articles',
            'items' => $items,
            'icon'  => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z"/></svg>'
        ];
    }

    // Data FAQs
    private function _get_faq_data() {
        $items = [
            ['slug' => 'what-is-subscrr', 'title' => 'What is Subscrr?', 'desc' => 'An iPhone app for the two questions money actually raises: what repeats, and where the rest goes.'],
            ['slug' => 'is-subscrr-free', 'title' => 'Is Subscrr free?', 'desc' => 'Free for up to six subscriptions and the whole calculator. Premium removes the limit and unlocks the AI scanner.'],
            ['slug' => 'does-it-connect-to-my-bank', 'title' => 'Does it connect to my bank?', 'desc' => 'No. Subscrr never asks for bank credentials — you add subscriptions yourself and scan receipts instead.'],
            ['slug' => 'which-devices-are-supported', 'title' => 'Which devices are supported?', 'desc' => 'iPhone first, with iPad, an Apple Watch companion, and home and lock screen widgets.'],
            ['slug' => 'do-you-see-my-data', 'title' => 'Do you see my data?', 'desc' => 'No. Your subscriptions live on your device and in your own iCloud, and there is no account to sign into.'],
            ['slug' => 'which-currencies-are-supported', 'title' => 'Which currencies are supported?', 'desc' => 'Enter each subscription in the currency it is billed in, and read every total in the one you choose.'],
            ['slug' => 'can-i-use-it-offline', 'title' => 'Can I use it offline?', 'desc' => 'Everything except receipt scanning and fresh exchange rates works with no connection at all.'],
            ['slug' => 'how-accurate-is-the-receipt-scanner', 'title' => 'How accurate is the receipt scanner?', 'desc' => 'Good on clear receipts, imperfect on crumpled ones — and every field is editable before you save.'],
            ['slug' => 'is-there-an-android-version', 'title' => 'Is there an Android version?', 'desc' => 'Not today. Subscrr is an iPhone app built on Apple-only foundations.'],
            ['slug' => 'how-do-i-suggest-a-feature', 'title' => 'How do I suggest a feature?', 'desc' => 'Write to us — feature requests genuinely shape what gets built next.'],
        ];

        return [
            'title'       => 'FAQs',
            'description' => 'Find quick answers to frequently asked questions.',
            'count'       => count($items) . ' articles',
            'items'       => $items,
            'icon'        => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z"/></svg>'
        ];
    }

    // Data How Tos
    private function _get_how_tos_data() {
        $items = [
            ['slug' => 'edit-or-delete-a-subscription', 'title' => 'Edit or delete a subscription', 'desc' => 'Change a price after a hike, correct a date, or remove something you have cancelled.'],
            ['slug' => 'use-a-custom-billing-interval', 'title' => 'Use a custom billing interval', 'desc' => 'For anything that does not fit weekly, monthly or yearly — every 3 months, every 10 days, every 2 years.'],
            ['slug' => 'organise-with-categories-and-tags', 'title' => 'Organise with categories and tags', 'desc' => 'Categories drive the breakdown charts; tags let you slice spending your own way.'],
            ['slug' => 'read-your-dashboard', 'title' => 'Read your dashboard', 'desc' => 'What the big number means, and what the breakdown chart is telling you.'],
            ['slug' => 'cost-per-day-month-year', 'title' => 'Cost per day, month and year', 'desc' => 'Why the same subscription is shown four different ways, and why the numbers always agree.'],
            ['slug' => 'calculate-what-a-habit-costs', 'title' => 'Calculate what a habit costs', 'desc' => 'Turn "a coffee every working morning" into a monthly and yearly number.'],
            ['slug' => 'scan-a-receipt-with-ai-spend', 'title' => 'Scan a receipt with AI Spend', 'desc' => 'Photograph a receipt or a bank screenshot and get the total, the items and the categories filled in.'],
            ['slug' => 'recategorise-a-receipt-item', 'title' => 'Recategorise a receipt item', 'desc' => 'When the scanner puts the dog food under groceries, move it in a tap.'],
            ['slug' => 'browse-your-scan-history', 'title' => 'Browse your scan history', 'desc' => 'Every scan grouped by day, with the original screenshot and the items it contained.'],
            ['slug' => 'read-the-spending-statistics', 'title' => 'Read the spending statistics', 'desc' => 'A bar chart of the last 30 days and a donut of where the money concentrated.'],
            ['slug' => 'add-widgets-home-lock-screen', 'title' => 'Add widgets to your home and lock screen', 'desc' => 'Put the next charge, or today\'s affirmation, where you will actually see it.'],
            ['slug' => 'reminder-settings', 'title' => 'Reminder settings', 'desc' => 'Choose how many days of warning you get, and mute a single subscription without touching the rest.'],
            ['slug' => 'put-affirmation-on-lock-screen', 'title' => 'Put the affirmation on your Lock Screen', 'desc' => 'Go live with the daily affirmation — Lock Screen, Dynamic Island and a home screen widget.'],
             ['slug' => 'search-your-subscriptions', 'title' => 'Search your subscriptions', 'desc' => 'The search bar at the bottom of the list finds anything you track, by name or category.'],
            ['slug' => 'split-a-subscriptions-cost', 'title' => 'Split a subscription\'s cost', 'desc' => 'Sharing a family plan? Tell Subscrr how many people chip in, and your totals count only your share.'],
            ['slug' => 'mark-a-payment-as-paid', 'title' => 'Mark a payment as paid', 'desc' => 'Tick off what you have already covered, and the "left this month" figure tells the truth.'],
            ['slug' => 'set-a-duration-or-a-one-off-payment', 'title' => 'Set a duration or a one-off payment', 'desc' => 'Not everything runs forever — give a subscription an end date, or record a single payment.'],
            ['slug' => 'set-aside-for-annual-plans', 'title' => 'Set aside for annual plans', 'desc' => 'What a yearly renewal costs per month, and how much should already be waiting for it.'],
            ['slug' => 'change-the-app-icon', 'title' => 'Change the app icon', 'desc' => 'Six looks for the Home Screen, all free.'],  
        ];

        return [
            'title'       => 'How Tos',
            'description' => 'Learn how to master every aspect in Subscrr.',
            'count'       => count($items) . ' articles',
            'items'       => $items,
            'icon'        => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" /></svg>'
        ];
    }

    // Data Troubleshooting
    private function _get_troubleshooting_data() {
        $items = [
            ['slug' => 'reminders-do-not-arrive', 'title' => 'Reminders do not arrive', 'desc' => 'Work through permissions, Focus and Scheduled Summary — one of these is nearly always the cause.'],
            ['slug' => 'subscriptions-not-on-other-device', 'title' => 'My subscriptions are not on my other device', 'desc' => 'Sync runs through your private iCloud — both devices need the same Apple Account and iCloud switched on.'],
            ['slug' => 'receipt-scan-failed-or-misread', 'title' => 'Receipt scan failed or misread', 'desc' => 'What to change about the photo, and what to do when the recognition is simply wrong.'],
            ['slug' => 'scan-wrong-total-or-missing-items', 'title' => 'A scan has the wrong total or missing items', 'desc' => 'Fix it on the result screen before saving — and know which discrepancies are actually correct.'],
            ['slug' => 'paid-but-premium-not-active', 'title' => 'I paid, but Premium is not active', 'desc' => 'Restore purchases first — this is the normal step after a reinstall or a new phone.'],
            ['slug' => 'currency-conversion-looks-wrong', 'title' => 'Currency conversion looks wrong', 'desc' => 'Subscrr uses market rates; your bank uses its own, and the gap is the bank\'s spread.'],
            ['slug' => 'widgets-not-updating', 'title' => 'Widgets are not updating', 'desc' => 'iOS controls widget refresh — Low Power Mode and Background App Refresh are the usual suspects.'],
            ['slug' => 'app-crashes-or-freezes', 'title' => 'The app crashes or freezes', 'desc' => 'Three quick steps that fix nearly all of it, and what to send if they do not.'],
        ];

        return [
            'title'       => 'Troubleshooting',
            'description' => 'Explore solutions to common issues and get a smoother experience.',
            'count'       => count($items) . ' articles',
            'items'       => $items,
            'icon'        => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a9.004 9.004 0 0 1 8.716 6.747M12 3a9.004 9.004 0 0 0-8.716 6.747" /></svg>'
        ];
    }

    // Data Premium & Billing
    private function _get_premium_billing_data() {
        $items = [
            ['slug' => 'what-is-free-and-what-is-premium', 'title' => 'What is free and what is Premium', 'desc' => 'Six subscriptions and the whole calculator are free; Premium removes the limit and unlocks AI scanning.'],
            ['slug' => 'subscribe-to-premium', 'title' => 'Subscribe to Premium', 'desc' => 'Buy through the App Store in a couple of taps, on the Apple Account already on your phone.'],
            ['slug' => 'restore-purchases', 'title' => 'Restore purchases', 'desc' => 'The one-tap step after reinstalling the app or switching to a new iPhone.'],
            ['slug' => 'cancel-premium', 'title' => 'Cancel Premium', 'desc' => 'Cancelling happens in iOS Settings, not in the app — and you keep access until the period ends.'],
            ['slug' => 'refunds', 'title' => 'Refunds', 'desc' => 'Refunds are handled by Apple at reportaproblem.apple.com — but write to us too.'],
            ['slug' => 'redeem-a-promo-code', 'title' => 'Redeem a promo code', 'desc' => 'How to use an offer code from a giveaway, a review or the Telegram channel.'],
        ];

        return [
            'title'       => 'Premium & Billing',
            'description' => 'What is free, what Premium unlocks, and how purchases work.',
            'count'       => count($items) . ' articles',
            'items'       => $items,
            'icon'        => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" /></svg>'
        ];
    }

    // Data Privacy & Your Data
    private function _get_privacy_data() {
        $items = [
            ['slug' => 'where-your-data-lives', 'title' => 'Where your data lives', 'desc' => 'On your iPhone, and in your own private iCloud container. Not on our servers.'],
            ['slug' => 'what-happens-to-scanned-receipts', 'title' => 'What happens to scanned receipts', 'desc' => 'Sent for recognition, not stored, never used for advertising — and the history stays local for 30 days.'],
            ['slug' => 'analytics-and-advertising', 'title' => 'Analytics and advertising', 'desc' => 'A small amount of product analytics and ad measurement, and how to turn tracking off.'],
            ['slug' => 'delete-everything', 'title' => 'Delete everything', 'desc' => 'Remove the local copy, the iCloud copy, and the calculator and scan history.'],
            ['slug' => 'there-is-no-account-to-create', 'title' => 'There is no account to create', 'desc' => 'No email, no password, no sign-in. Install and start.'],
        ];

        return [
            'title'       => 'Privacy & Your Data',
            'description' => 'Where your data lives, what leaves the device, and how to delete it.',
            'count'       => count($items) . ' articles',
            'items'       => $items,
            'icon'        => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" /></svg>'
        ];
    }

    // Data Subscrr Across Devices
    private function _get_devices_data() {
        $items = [
            ['slug' => 'subscrr-on-iphone-and-ipad', 'title' => 'Subscrr on iPhone and iPad', 'desc' => 'The same app on both, with the same data, kept in step through iCloud.'],
            ['slug' => 'subscrr-on-apple-watch', 'title' => 'Subscrr on Apple Watch', 'desc' => 'A companion app and six complications, so the next charge is on your wrist.'],
            ['slug' => 'widgets-on-the-home-and-lock-screen', 'title' => 'Widgets on the home and lock screen', 'desc' => 'Sizes available, what each one shows, and how often they refresh.'],
            ['slug' => 'icloud-sync-explained', 'title' => 'iCloud sync explained', 'desc' => 'What syncs, what does not, and why there is no account to sign into.'],
            ['slug' => 'moving-to-a-new-iphone', 'title' => 'Moving to a new iPhone', 'desc' => 'With sync on, it is install, sign in, wait a minute. With sync off, do this first.'],
        ];

        return [
            'title'       => 'Subscrr Across Devices',
            'description' => 'Using Subscrr on iPhone, iPad, Apple Watch and your home screen.',
            'count'       => count($items) . ' articles',
            'items'       => $items,
            'icon'        => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" /></svg>'
        ];
    }

    // Data kartu untuk halaman utama
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
                [
                    'title'       => $gs['title'],
                    'description' => $gs['description'],
                    'count'       => $gs['count'],
                    'link'        => base_url('Help_center/getting_started'),
                    'icon'        => $gs['icon']
                ],
                [
                    'title'       => $fq['title'],
                    'description' => $fq['description'],
                    'count'       => $fq['count'],
                    'link'        => base_url('Help_center/faqs'),
                    'icon'        => $fq['icon'],
                ]
            ],
            'category_cards' => [
                [
                    'title'       => $howtos['title'],
                    'description' => $howtos['description'],
                    'count'       => $howtos['count'],
                    'link'        => base_url('Help_center/how_tos'),
                    'icon'        => $howtos['icon']
                ],
                [
                    'title'       => $trouble['title'],
                    'description' => $trouble['description'],
                    'count'       => $trouble['count'],
                    'link'        => base_url('Help_center/troubleshooting'),
                    'icon'        => $trouble['icon']
                ],
                [
                    'title'       => $premium['title'],
                    'description' => $premium['description'],
                    'count'       => $premium['count'],
                    'link'        => base_url('Help_center/premium_billing'),
                    'icon'        => $premium['icon']
                ],
                [
                    'title'       => $privacy['title'],
                    'description' => $privacy['description'],
                    'count'       => $privacy['count'],
                    'link'        => base_url('Help_center/privacy'),
                    'icon'        => $privacy['icon']
                ],
                [
                    'title'       => $devices['title'],
                    'description' => $devices['description'],
                    'count'       => $devices['count'],
                    'link'        => base_url('Help_center/devices'),
                    'icon'        => $devices['icon']
                ]
            ]
        ];
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
}