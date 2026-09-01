<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help_center extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    // ============================================================
    // SUMBER DATA GETTING STARTED (DIPAKAI BERSAMA)
    // ============================================================
    private function _get_getting_started_data() {
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
        'count' => count($items) . ' articles', // dihitung dari jumlah item
        'items' => $items,
    ];
}

    // ============================================================
    // SUMBER DATA KARTU HALAMAN UTAMA HELP CENTER
    // ============================================================
    private function _get_help_categories() {
        // Ambil data Getting Started untuk kartu utama
        $gs = $this->_get_getting_started_data();

        return [
            'main_cards' => [
                [
                    'title'       => $gs['title'],
                    'description' => $gs['description'],
                    'count'       => $gs['count'],
                    'link'        => base_url('Help_center/getting_started'),
                    'icon'        => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" /></svg>'
                ],
                [
                    'title'       => 'FAQs',
                    'description' => 'Find quick answers to frequently asked questions.',
                    'count'       => '10 articles',
                    'link'        => '#',
                    'icon'        => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" /></svg>'
                ]
            ],
            'category_cards' => [
                [
                    'title'       => 'How Tos',
                    'description' => 'Learn how to master every aspect in Subscrr.',
                    'count'       => '13 articles',
                    'link'        => '#',
                    'icon'        => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" /></svg>'
                ],
                [
                    'title'       => 'Troubleshooting',
                    'description' => 'Explore solutions to common issues and get a smoother experience.',
                    'count'       => '8 articles',
                    'link'        => '#',
                    'icon'        => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a9.004 9.004 0 0 1 8.716 6.747M12 3a9.004 9.004 0 0 0-8.716 6.747" /></svg>'
                ],
                [
                    'title'       => 'Premium & Billing',
                    'description' => 'What is free, what Premium unlocks, and how purchases work.',
                    'count'       => '6 articles',
                    'link'        => '#',
                    'icon'        => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" /></svg>'
                ],
                [
                    'title'       => 'Privacy & Your Data',
                    'description' => 'Where your data lives, what leaves the device, and how to delete it.',
                    'count'       => '5 articles',
                    'link'        => '#',
                    'icon'        => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" /></svg>'
                ],
                [
                    'title'       => 'Subscrr Across Devices',
                    'description' => 'Using Subscrr on iPhone, iPad, Apple Watch and your home screen.',
                    'count'       => '5 articles',
                    'link'        => '#',
                    'icon'        => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" /></svg>'
                ]
            ]
        ];
    }

    // ============================================================
    // VIEW 1: HALAMAN UTAMA HELP CENTER
    // ============================================================
    public function index() {
        $data = $this->_get_help_categories();
        $this->load->view('Help_center', $data);
    }

    // ============================================================
    // VIEW 2: HALAMAN DAFTAR GETTING STARTED
    // ============================================================
    public function getting_started() {
        $data = $this->_get_getting_started_data();
        $this->load->view('site/content_help/getting_started', $data);
    }

    // ============================================================
    // VIEW 3: HALAMAN DETAIL ARTIKEL
    // ============================================================
    public function article($slug = '') {
        $articles = $this->_get_getting_started_data()['items'];

        $article = null;
        foreach ($articles as $item) {
            if ($item['slug'] === $slug) {
                $article = $item;
                break;
            }
        }

        if (!$article) {
            show_404();
        }

        $data['title'] = $article['title'];
        $data['description'] = $article['desc'];
        $data['slug'] = $slug;
        $data['all_articles'] = $articles;

        $this->load->view('site/content_help/article', $data);
    }
}