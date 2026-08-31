<section id="overview" class="relative overflow-hidden bg-[#f8f7f4]">

    <!-- =====================================================
         CUSTOM CSS - KHUSUS SECTION OVERVIEW
    ====================================================== -->
    <style>
        #overview .overview-reveal {
            opacity: 0;
            transform: translateY(35px);
            transition:
                opacity 0.8s ease,
                transform 0.8s cubic-bezier(0.22, 1, 0.36, 1);
        }

        #overview .overview-reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        #overview .overview-delay-1 {
            transition-delay: 0.12s;
        }

        #overview .overview-delay-2 {
            transition-delay: 0.24s;
        }

        #overview .overview-delay-3 {
            transition-delay: 0.36s;
        }

        #overview .overview-phone {
            transform: translateY(0) rotate(0deg);
            transition:
                transform 0.9s cubic-bezier(0.22, 1, 0.36, 1),
                box-shadow 0.5s ease;
            animation: overviewPhoneFloat 5s ease-in-out infinite;
            will-change: transform;
        }

        #overview .overview-phone:hover {
            transform: translateY(-10px) rotate(-1deg);
        }

        #overview .overview-glow {
            animation: overviewGlow 6s ease-in-out infinite;
        }

        #overview .overview-bar {
            transform-origin: left center;
            transform: scaleX(0);
            transition: transform 1.1s cubic-bezier(0.22, 1, 0.36, 1);
        }

        #overview .overview-bar.is-visible {
            transform: scaleX(1);
        }

        #overview .overview-card {
            transition:
                transform 0.35s ease,
                box-shadow 0.35s ease;
        }

        #overview .overview-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 25px 55px rgba(0, 0, 0, 0.08);
        }

        #overview .overview-feature {
            transition: transform 0.35s ease;
        }

        #overview .overview-feature:hover {
            transform: translateX(6px);
        }

        #overview .overview-check {
            transition:
                transform 0.35s ease,
                background-color 0.35s ease;
        }

        #overview .overview-feature:hover .overview-check {
            transform: scale(1.12);
        }

        #overview .overview-chart-bar {
            transform-origin: bottom;
            transform: scaleY(0);
            transition:
                transform 0.8s cubic-bezier(0.22, 1, 0.36, 1);
        }

        #overview .overview-chart.is-visible .overview-chart-bar {
            transform: scaleY(1);
        }

        @keyframes overviewPhoneFloat {
            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes overviewGlow {
            0%,
            100% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.55;
            }

            50% {
                transform: translate(-50%, -50%) scale(1.12);
                opacity: 0.8;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            #overview *,
            #overview *::before,
            #overview *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                scroll-behavior: auto !important;
                transition-duration: 0.01ms !important;
            }

            #overview .overview-reveal {
                opacity: 1;
                transform: none;
            }

            #overview .overview-bar {
                transform: scaleX(1);
            }

            #overview .overview-chart-bar {
                transform: scaleY(1);
            }
        }

        @media (max-width: 640px) {
            #overview .overview-phone:hover {
                transform: translateY(-4px);
            }

            #overview .overview-feature:hover {
                transform: none;
            }

            #overview .overview-card:hover {
                transform: translateY(-3px);
            }
        }
        
    </style>


    <!-- =====================================================
         INTRO
    ====================================================== -->
    <div class="mx-auto max-w-7xl px-6 pb-20 pt-28 sm:px-8 lg:px-12 lg:pb-28 lg:pt-36">

        <div class="overview-reveal">

            <p class="text-sm font-bold uppercase tracking-[0.18em] text-[#526bd8]">
                Overview
            </p>

            <h1
                class="text-left text-5xl font-bold leading-[0.95] tracking-[-0.05em] text-gray-900 sm:text-6xl lg:text-7xl"
            >
                See how much you <br>
                really spend.
            </h1>

        </div>


        <!-- =================================================
             PHONE + DESCRIPTION
        ================================================== -->
        <div class="mt-20 grid items-center gap-16 lg:grid-cols-[1.05fr_0.95fr] lg:gap-24">


<!-- =====================================================
     OVERVIEW CONTENT
====================================================== -->
<div class="mx-auto mt-16 max-w-[1250px] px-4 sm:px-6 lg:mt-20 lg:px-0">

    <div
        class="flex flex-row items-center"
        style="gap: 68px;"
    >

        <!-- GAMBAR DI KIRI -->
        <div
            class="overview-reveal shrink-0"
            style="width: 613px; flex: 0 0 613px;"
        >

            <img
                src="<?= base_url('assets/uploads/overview/overview-main.jpg') ?>"
                alt="Subscrr Overview"
                class="block w-full rounded-[2.5rem] object-cover"
            >
        </div>


        <!-- TEXT DI KANAN -->
        <div
            class="overview-reveal overview-delay-1"
            style="width: 520px; flex: 0 0 520px;"
        >

            <p class="text-[18px] leading-[1.55] tracking-[-0.01em] text-[#555555]">

                Open the app and the sums are already done.
                How many you are paying for, what it costs a month and a
                year, no spreadsheet in sight. The next charges line up
                below, nearest first, so nothing sneaks up on you.

            </p>

            <div class="mt-8 space-y-5">

                <!-- Feature 1 -->
                <div class="flex items-center gap-4">

                    <div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ffd9d2]">

                        <svg
                            class="h-3.5 w-3.5 text-[#ff3218]"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="3"
                                d="M5 12.5L9.5 17L19 7"
                            />
                        </svg>

                    </div>

                    <span class="text-[17px] text-[#85817b]">
                        Live monthly &amp; yearly totals
                    </span>

                </div>


                <!-- Feature 2 -->
                <div class="flex items-center gap-4">

                    <div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ffd9d2]">

                        <svg
                            class="h-3.5 w-3.5 text-[#ff3218]"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="3"
                                d="M5 12.5L9.5 17L19 7"
                            />
                        </svg>

                    </div>

                    <span class="text-[17px] text-[#85817b]">
                        A countdown to every charge
                    </span>

                </div>


                <!-- Feature 3 -->
                <div class="flex items-center gap-4">

                    <div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ffd9d2]">

                        <svg
                            class="h-3.5 w-3.5 text-[#ff3218]"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="3"
                                d="M5 12.5L9.5 17L19 7"
                            />
                        </svg>

                    </div>

                    <span class="text-[17px] text-[#85817b]">
                        Any currency, converted at daily rates
                    </span>

                </div>

            </div>

        </div>

    </div>

    <br>
    <br>

<!-- =====================================================
     BREAKDOWN
====================================================== -->
<section
    id="breakdown"
    class="bg-[#f5f3ef] px-3 py-3 sm:px-4 sm:py-4"
    style="width: 100vw; margin-left: calc(50% - 50vw);"
>

    <!-- =================================================
         WHITE BREAKDOWN CARD
    ================================================== -->
    <div
        class="w-full overflow-hidden rounded-[2rem] bg-white"
    >

        <!-- =================================================
             BREAKDOWN CONTENT
        ================================================== -->
        <div
            class="mx-auto flex items-center justify-between px-8 py-14 sm:px-12 sm:py-16 lg:px-16 lg:py-20 xl:px-20"
            style="gap: 70px; max-width: 1500px;"
        >

            <!-- =================================================
                 BREAKDOWN TEXT - KIRI
            ================================================== -->
            <div
                class="overview-reveal shrink-0"
                style="width: 560px;"
            >

                <!-- Label -->
                <p
                    class="text-sm font-bold uppercase tracking-[0.18em] text-[#526bd8]"
                >
                    Breakdown
                </p>


                <!-- Heading -->
                <h2
                    class="mt-7 font-bold leading-[0.92] tracking-[-0.055em] text-[#171717]"
                    style="font-size: 76px;"
                >

                    <span class="block">
                        Per year.
                    </span>

                    <span class="block">
                        Per month.
                    </span>

                    <span class="block text-[#ff3218]">
                        Per day.
                    </span>

                </h2>


                <!-- Description -->
                <p
                    class="mt-9 text-[17px] leading-7 text-[#77736d]"
                    style="max-width: 560px;"
                >
                    That "cheap" annual plan, divided by 365, is still a small
                    daily habit. Subscrr shows the number that actually lands
                    each day, so renewing becomes a choice instead of a reflex.
                </p>

            </div>


            <!-- =================================================
                 BREAKDOWN IMAGE - KANAN
            ================================================== -->
            <div
                class="overview-reveal overview-delay-1 shrink-0"
                style="width: 613px;"
            >

                <div
                    class="relative w-full overflow-hidden rounded-[2.5rem]"
                >

                    <img
                        src="<?= base_url('assets/uploads/overview/breakdown-main.jpg') ?>"
                        alt="Subscrr Breakdown"
                        class="block w-full object-cover"
                    >

                </div>

            </div>

        </div>

    </div>

</section>

<!-- =====================================================
     REMINDERS
====================================================== -->
<section
    id="reminders"
    class="bg-[#f5f3ef] px-3 py-3 sm:px-4 sm:py-4"
>

       <div class="flex flex-col items-center text-center">

            <!-- LABEL -->
            <p
                class="text-sm font-bold uppercase tracking-[0.18em] text-[#526bd8]"
            >
                Reminders
            </p>


            <!-- HEADING -->
            <h1
                class="mt-7 max-w-[800px] text-[52px] font-bold leading-[0.94] tracking-[-0.055em] text-[#171717] sm:text-[64px] lg:text-[76px]"
            >
                Never get
                <br>
                surprise-charged 
                <br>
                 again.
            </h1>


            <!-- DESCRIPTION -->
            <p
                class="mt-8 max-w-[650px] text-[18px] leading-7 text-[#77736d] sm:text-[19px]"
            >
                The day before the money leaves, a gentle tap on the
                shoulder. So you renew because you meant to, not because
                you forgot it was there.
            </p>

            <br>
            <br>


<!-- =================================================
     REMINDER IMAGE
================================================== -->
<div class="overview-reveal overview-delay-1 bg-transparent p-0">

    <div class="relative mx-auto w-full max-w-[780px] overflow-hidden rounded-[2.5rem] bg-transparent">

        <!-- GAMBAR 1: BACKGROUND ORANG (Harus paling atas di kode agar di posisi belakang) -->
        <img
            src="<?= base_url('assets/uploads/overview/reminder-bg.webp') ?>"
            alt="Subscrr Subscription Reminder"
            class="block h-auto w-full object-cover"
        >

        <!-- GAMBAR 2: NOTIFIKASI (Ditumpuk di atas/depan background) -->
        <div class="absolute inset-0 flex items-center justify-center p-4">
            <img 
                src="<?= base_url('assets/uploads/overview/push-multiple.webp') ?>" 
                alt="Notification Overlay" 
                class="w-[85%] max-w-[450px] object-contain drop-shadow-lg"
            >
        </div>

    </div>

</div>

</div>
</div>

</section>


<!-- =================================================
     SETUP SECTION / IMPORT APPLE
================================================== -->
<section class="w-full bg-[#f6f5f1] py-16 px-6 md:px-12 lg:px-20">
    <div class="mx-auto max-w-[1200px] grid grid-cols-1 items-center gap-12 lg:grid-cols-2">

        <!-- KOLOM KIRI: TEKS & STEP BADGES -->
        <div class="flex flex-col items-start">
            
            <!-- SUBTITLE -->
            <p class="text-[13px] font-bold uppercase tracking-widest text-[#6366f1]">
                SETUP • ONE SCREENSHOT
            </p>

            <!-- JUDUL (HEADING) -->
            <h2 class="mt-4 text-[40px] font-extrabold leading-[1.1] tracking-tight text-slate-900 sm:text-[52px]">
                Import what<br class="hidden sm:inline" />
                Apple already<br class="hidden sm:inline" />
                charges you for.
            </h2>

            <!-- DESKRIPSI -->
            <p class="mt-6 max-w-[480px] text-[16px] leading-relaxed text-slate-500 sm:text-[18px]">
                Everything on your Apple ID sits on one screen. Screenshot it, drop it in, and we read the names, prices and dates for you.
            </p>

            <!-- BADGES STEP / LANGKAH-LANGKAH -->
            <div class="mt-8 flex flex-wrap gap-3">
                
                <!-- Step 1 -->
                <div class="flex items-center gap-3 rounded-full bg-white px-5 py-3 shadow-[0_4px_15px_rgba(0,0,0,0.04)]">
                    <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ff3218] text-[13px] font-bold text-white">
                        1
                    </span>
                    <span class="text-[14px] font-semibold text-slate-800">
                        Open Subscriptions
                    </span>
                </div>

                <!-- Step 2 -->
                <div class="flex items-center gap-3 rounded-full bg-white px-5 py-3 shadow-[0_4px_15px_rgba(0,0,0,0.04)]">
                    <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ff3218] text-[13px] font-bold text-white">
                        2
                    </span>
                    <span class="text-[14px] font-semibold text-slate-800">
                        Take a screenshot
                    </span>
                </div>

                <!-- Step 3 -->
                <div class="flex items-center gap-3 rounded-full bg-white px-5 py-3 shadow-[0_4px_15px_rgba(0,0,0,0.04)]">
                    <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#ff3218] text-[13px] font-bold text-white">
                        3
                    </span>
                    <span class="text-[14px] font-semibold text-slate-800">
                        Drop it in here
                    </span>
                </div>

            </div>

        </div>

        <!-- KOLOM KANAN: GAMBAR MOCKUP -->
        <div class="relative mx-auto w-full max-w-[570px] overflow-hidden rounded-[2.5rem]">
            <img 
                src="<?= base_url('assets/uploads/overview/import-appstore.jpg') ?>" 
                alt="Import Apple Subscriptions" 
                class="block h-auto w-full object-cover"
            />
        </div>

    </div>
</section>

    <!-- =====================================================
         JAVASCRIPT - KHUSUS OVERVIEW
    ====================================================== -->
    <script>
        (function () {

            const overview = document.getElementById('overview');

            if (!overview) {
                return;
            }


            /*
             * ================================================
             * SCROLL REVEAL
             * ================================================
             */
            const revealItems =
                overview.querySelectorAll('.overview-reveal');


            const revealObserver =
                new IntersectionObserver(
                    function (entries, observer) {

                        entries.forEach(function (entry) {

                            if (entry.isIntersecting) {

                                entry.target.classList.add('is-visible');

                                 observer.unobserve(entry.target);

                            }

                        });

                    },
                    {
                        threshold: 0.12,
                        rootMargin: '0px 0px -50px 0px'
                    }
                );


            revealItems.forEach(function (element) {

                revealObserver.observe(element);

            });


            /*
             * ================================================
             * CHART ANIMATION
             * ================================================
             */
            const charts =
                overview.querySelectorAll('.overview-chart');


            const chartObserver =
                new IntersectionObserver(
                    function (entries, observer) {

                        entries.forEach(function (entry) {

                            if (entry.isIntersecting) {

                                entry.target.classList.add('is-visible');

                                observer.unobserve(entry.target);

                            }

                        });

                    },
                    {
                        threshold: 0.35
                    }
                );


            charts.forEach(function (chart) {

                chartObserver.observe(chart);

            });


            /*
             * ================================================
             * BREAKDOWN BAR ANIMATION
             * ================================================
             */
            const bars =
                overview.querySelectorAll('.overview-bar');


            const barObserver =
                new IntersectionObserver(
                    function (entries, observer) {

                        entries.forEach(function (entry) {

                            if (entry.isIntersecting) {

                                entry.target.classList.add('is-visible');

                                observer.unobserve(entry.target);

                            }

                        });

                    },
                    {
                        threshold: 0.5
                    }
                );


            bars.forEach(function (bar) {

                barObserver.observe(bar);

            });


            /*
             * ================================================
             * DESKTOP PHONE PARALLAX
             * ================================================
             */
            const phone =
                overview.querySelector('.overview-phone');


            if (
                phone &&
                window.matchMedia('(hover: hover) and (pointer: fine)').matches
            ) {

                const phoneContainer =
                    phone.parentElement;


                phoneContainer.addEventListener(
                    'mousemove',
                    function (event) {

                        const rect =
                            phoneContainer.getBoundingClientRect();


                        const x =
                            event.clientX - rect.left;

                        const y =
                            event.clientY - rect.top;


                        const centerX =
                            rect.width / 2;

                        const centerY =
                            rect.height / 2;


                        const rotateY =
                            ((x - centerX) / centerX) * 3;


                        const rotateX =
                            ((centerY - y) / centerY) * 3;


                        phone.style.animationPlayState =
                            'paused';


                        phone.style.transform =
                            'translateY(-5px) rotateX(' +
                            rotateX +
                            'deg) rotateY(' +
                            rotateY +
                            'deg)';

                    }
                );


                phoneContainer.addEventListener(
                    'mouseleave',
                    function () {

                        phone.style.animationPlayState =
                            'running';

                        phone.style.transform = '';

                    }
                );

            }

        })();
    </script>

</section>