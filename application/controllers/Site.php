<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function privacy_policy()
    {
        $this->load->view('site/privacy_policy');
    }

    public function terms()
    {
        $this->load->view('site/terms');
    }

    public function journal()
    {
        $this->load->view('site/journal');
    }

    public function journal_article($slug = '')
    {
        $articles = [

            'how-much-do-subscriptions-cost' => [
                'category' => 'Money',
                'date' => '8 July 2026',
                'title' => 'How much do your Subscriptions really cost per year?',
                'description' => 'The average person pays for 12 subscriptions and remembers four. Here is how to find your real yearly number in five minutes, and what to do with it.',
                'image' => 'assets/uploads/journal/journal_subscrr.jpg',

                'views' => 47,
                'likes' => 7,

                'content' => [
                    [
                        'paragraph' => 'Ask anyone what they spend on subscriptions and they will give you a confident number. It is almost always low, and almost never their fault. The charges were built to be forgotten.'
                    ],
                    [
                        'paragraph' => 'Twelve. That is roughly how many subscriptions the average person is quietly paying for. Ask them to name them and you get about four. The other eight live in the gap between what leaves your account and what your brain bothers to keep.'
                    ],
                    [
                        'paragraph' => 'It is not carelessness. A charge of $4.99 is priced to slip under your attention, and the annual one fires once a year while you are asleep. Nothing about it is loud enough to notice.'
                    ],
                    [
                        'paragraph' => 'Finding the real number takes about five minutes. Open last month’s statement and write down everything that repeats. Streaming, storage, the gym you visit in theory, that app you tried in March.'
                    ],
                    [
                        'paragraph' => 'Check the list under your name in the App Store. Add the yearly ones hiding in your email under "receipt". Multiply the monthly by twelve, add the annual, and look at the total.'
                    ],
                    [
                        'paragraph' => 'Here is the part that actually changes anything: divide it by 365. "Four dollars a day" lands differently than "fifteen hundred a year". Suddenly it is a coffee you did not order, every single morning.'
                    ],
                    [
                        'paragraph' => 'The number is easy to find once. Keeping it honest is the hard part, which is the rather boring reason Subscrr exists. We counted ours while building it and cancelled three the same evening.'
                    ],
                ],

                'answers' => [
                    [
                        'question' => 'How much does the average person spend on subscriptions?',
                        'answer' => 'Most studies put the average at $60 to $130 per month, or roughly $700 to $1,500 per year. People typically estimate about a third of their real total.'
                    ],
                    [
                        'question' => 'How do I find all my subscriptions?',
                        'answer' => 'Check your bank statement for repeating charges, then open Settings on your iPhone, tap your name, then Subscriptions. Add annual renewals from your email receipts.'
                    ],
                ],
            ],

            'forgot-to-cancel-free-trial' => [
                'category' => 'Habits',
                'date' => '1 July 2026',
                'title' => 'Forgot to cancel a free trial? Here is how to stop paying for It',
                'description' => 'Free trials are built to be forgotten. Here is how to cancel them on iPhone, get a refund when you are charged, and never let it happen again.',
                'image' => 'assets/uploads/journal/PM-mtkfgyvc.png',

                'views' => 29,
                'likes' => 4,

                'content' => [
                    [
                        'paragraph' => 'Free trials feel harmless because they cost nothing at the beginning. The problem starts when the trial ends and the subscription quietly becomes a recurring payment.'
                    ],
                    [
                        'paragraph' => 'The easiest way to avoid this is to treat every free trial like a subscription from the moment you start it.'
                    ],
                    [
                        'paragraph' => 'On iPhone, open Settings, tap your Apple Account, then Subscriptions. You can see active subscriptions and trials connected to your Apple Account.'
                    ],
                    [
                        'paragraph' => 'If you were already charged after forgetting to cancel, check the purchase history connected to your Apple Account and request a refund through Apple when appropriate.'
                    ],
                    [
                        'paragraph' => 'The bigger solution is not remembering every trial manually. Keep a single list of your recurring payments and set reminders before the money actually leaves your account.'
                    ],
                ],

                'answers' => [
                    [
                        'question' => 'How do I cancel a free trial on iPhone?',
                        'answer' => 'Open Settings, tap your Apple Account, select Subscriptions, choose the subscription and cancel it before the trial period ends.'
                    ],
                    [
                        'question' => 'Can I get a refund after a free trial charges me?',
                        'answer' => 'You can request a refund from Apple. Approval depends on Apple’s refund process and the circumstances of the purchase.'
                    ],
                ],
            ],

            'best-way-to-track-subscriptions-on-iphone-2026' => [
                'category' => 'Guides',
                'date' => '24 June 2026',
                'title' => 'The best way to track subscriptions on iphone in 2026',
                'description' => 'Spreadsheets, bank apps, iOS settings or a dedicated tracker? An honest comparison of every way to track subscriptions on iPhone, with a privacy checklist.',
                'image' => 'assets/uploads/journal/app-mtkgbxxa.png',

                'views' => 12,
                'likes' => 3,

                'content' => [
                    [
                        'paragraph' => 'There are several ways to track subscriptions on an iPhone. You can use a spreadsheet, check your bank transactions, use Apple’s subscription settings, or use a dedicated subscription tracker.'
                    ],
                    [
                        'paragraph' => 'A spreadsheet gives you complete control, but you have to remember to update it. Bank apps show transactions, but they are not always designed to explain which recurring charges are subscriptions.'
                    ],
                    [
                        'paragraph' => 'Apple’s own subscription screen is useful for subscriptions billed through Apple, but it does not necessarily provide one complete view of every recurring payment you have.'
                    ],
                    [
                        'paragraph' => 'A dedicated tracker can combine the information into one place and make the total easier to understand.'
                    ],
                    [
                        'paragraph' => 'Whatever method you choose, privacy should be part of the decision. Check what data the service collects, where it is stored, and which third parties process it.'
                    ],
                ],

                'answers' => [
                    [
                        'question' => 'What is the easiest way to track subscriptions on iPhone?',
                        'answer' => 'Apple Settings is useful for Apple-billed subscriptions, while a dedicated tracker can provide a broader overview of recurring expenses.'
                    ],
                    [
                        'question' => 'Should I use a spreadsheet to track subscriptions?',
                        'answer' => 'A spreadsheet works well if you are comfortable maintaining it manually, but it requires regular updates to remain accurate.'
                    ],
                ],
            ],

            'subscription-creep' => [
                'category' => 'Money',
                'date' => '17 June 2026',
                'title' => 'Subscription creep: Why your money quietly disappears every month',
                'description' => 'Subscription creep is the slow stacking of small recurring charges plus silent price increases. Here is how it works on your psychology and how to beat it.',
                'image' => 'assets/uploads/journal/Frame-51-mtkg5joa.png',

                'views' => 12,
                'likes' => 3,

                'content' => [
                    [
                        'paragraph' => 'Subscription creep starts small. One streaming service becomes two, a cloud storage plan gets added, then a fitness app or productivity tool joins the list.'
                    ],
                    [
                        'paragraph' => 'Each individual payment feels manageable. The problem is that recurring payments do not require a new decision every month.'
                    ],
                    [
                        'paragraph' => 'Small price increases can also go unnoticed. A subscription that started at a few dollars can gradually become a much larger annual expense.'
                    ],
                    [
                        'paragraph' => 'The best way to fight subscription creep is to periodically look at the entire list rather than evaluating each payment separately.'
                    ],
                    [
                        'paragraph' => 'Ask yourself which services you actually used during the last month. If you cannot remember using one, that is a good reason to reconsider keeping it.'
                    ],
                ],

                'answers' => [
                    [
                        'question' => 'What is subscription creep?',
                        'answer' => 'Subscription creep is the gradual increase in recurring expenses as more subscriptions are added or existing prices increase.'
                    ],
                    [
                        'question' => 'How do I stop subscription creep?',
                        'answer' => 'Review all recurring payments regularly, calculate the total yearly cost, and cancel services that no longer provide enough value.'
                    ],
                ],
            ],

            'too-lazy-to-type-in-every-expense' => [
                'category' => 'Product',
                'date' => '10 June 2026',
                'title' => 'Too lazy to type In every expense? Let AI read your receipts',
                'description' => 'Manual expense entry is why most spending trackers get abandoned. AI Spend in Subscrr reads receipts and statements from a photo and does the math for you.',
                'image' => 'assets/uploads/journal/w-4-mtkg84sf.png',

                'views' => 7,
                'likes' => 0,

                'content' => [
                    [
                        'paragraph' => 'Manual expense tracking sounds simple until you have to enter every purchase yourself. After a few days, the process can become another task that gets forgotten.'
                    ],
                    [
                        'paragraph' => 'Receipts already contain much of the information you need: the merchant, date, items and total. The challenge is getting that information into your spending tracker without typing everything manually.'
                    ],
                    [
                        'paragraph' => 'AI Spend in Subscrr is designed around this problem. Instead of entering every expense by hand, you can use a photo of a receipt or statement and let AI help extract the relevant information.'
                    ],
                    [
                        'paragraph' => 'The goal is not to make budgeting complicated. It is to reduce the friction between making a purchase and understanding where your money went.'
                    ],
                    [
                        'paragraph' => 'The less work required to record an expense, the easier it becomes to maintain an accurate picture of your spending.'
                    ],
                ],

                'answers' => [
                    [
                        'question' => 'Can AI read information from receipts?',
                        'answer' => 'AI-based receipt processing can extract information such as merchant names, dates and amounts from receipt images.'
                    ],
                    [
                        'question' => 'Why is manual expense tracking difficult?',
                        'answer' => 'Entering every transaction manually creates friction, which can cause people to stop maintaining their spending records.'
                    ],
                ],
            ],
        ];

        if (!isset($articles[$slug])) {
            show_404();
            return;
        }

        $data['article'] = $articles[$slug];
        $data['slug'] = $slug;

        $this->load->view('site/journal_detail', $data);
    }
}