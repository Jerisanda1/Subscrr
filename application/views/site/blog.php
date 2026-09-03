<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Subscrr</title>
    <link rel="stylesheet" href="<?= base_url('assets/output.css') ?>">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('assets/uploads/icon/icon_Subscrr.png') ?>">
    <!-- Navbar (sama seperti home) -->
    <?php $this->load->view('layout/navbar'); ?>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <link
        rel="stylesheet"
        href="<?= base_url('assets/output.css') ?>"
    >

   <style>

        /* =====================================================
           BLOG GRID
        ====================================================== */

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            column-gap: 18px;
            row-gap: 48px;
        }


        /* =====================================================
           BLOG IMAGE
        ====================================================== */

        .blog-image {
            width: 100%;
            aspect-ratio: 0.82 / 1;
            overflow: hidden;
            border-radius: 18px;
            background: #e8e5df;
        }

        .blog-image img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;

            transition:
                transform 0.5s ease,
                filter 0.5s ease;
        }

        .blog-card:hover .blog-image img {
            transform: scale(1.04);
        }


        /* =====================================================
           BLOG TITLE
        ====================================================== */

        .blog-title {
            margin-top: 11px;

            font-size: 22px;
            line-height: 1.05;
            font-weight: 700;

            letter-spacing: -0.035em;
        }


        /* =====================================================
           BLOG DESCRIPTION
        ====================================================== */

        .blog-description {
            margin-top: 8px;

            font-size: 16px;
            line-height: 1.45;

            color: #77736d;
        }


        /* =====================================================
           TABLET
        ====================================================== */

        @media (max-width: 900px) {

            .blog-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                column-gap: 18px;
                row-gap: 42px;
            }

        }


        /* =====================================================
           MOBILE
        ====================================================== */

        @media (max-width: 640px) {

            .blog-grid {
                grid-template-columns: 1fr;
                row-gap: 42px;
            }

            .blog-image {
                aspect-ratio: 0.88 / 1;
            }

            .blog-title {
                font-size: 18px;
            }

            .blog-description {
                font-size: 12px;
            }

        }

        /* Efek hover untuk judul h2 ketika kursor mengarah ke kartu artikel */
.blog-card:hover .blog-title {
    color: #ff3218 !important;
}

/* Opsional: Efek zoom halus pada gambar saat hover (seperti pada web Subscrr asli) */
.blog-card .blog-image {
    overflow: hidden;
    border-radius: 1.5rem;
}

.blog-card .blog-image img {
    transition: transform 0.5s ease-in-out;
}

.blog-card:hover .blog-image img {
    transform: scale(1.05);
}

/* Transisi warna judul yang halus */
.blog-title {
    transition: color 0.3s ease-in-out;
}

    </style>

</head>


<body class="bg-[#f5f3ef] text-[#171717]">



<!-- =====================================================
     MAIN
====================================================== -->

<main>

    <!-- =================================================
         BLOG HEADER
    ================================================== -->
    <br><br><br><br><br>
    <section class="px-5 pb-8 pt-12 sm:px-8 sm:pb-10 sm:pt-16 lg:px-10 lg:pb-10 lg:pt-16">
        <div class="mx-auto max-w-[1125px]">
            <h1 
                data-animate="fade-up"
                class="max-w-[650px] text-[48px] font-bold leading-[0.91] tracking-[-0.06em] sm:text-[58px] lg:text-[62px]"
            >
                Things we learned <br>
                while staring.
            </h1>
        </div>
    </section>


    <!-- =================================================
         BLOG ARTICLES
    ================================================== -->
    <section class="px-5 pb-20 sm:px-8 lg:px-10 lg:pb-28">
        <div class="blog-grid mx-auto max-w-[1125px]">

            <!-- ARTICLE 1 -->
            <a 
                href="#" 
                data-animate="fade-up"
                style="transition-delay: 0.1s"
                class="blog-card group block"
            >
                <div class="blog-image">
                    <img 
                        src="<?= base_url('assets/uploads/blog/blog-ai-receipts-3.jpg') ?>" 
                        alt="Too Lazy to Type In Every Expense? Let AI Read Your Receipts"
                    >
                </div>

                <h2 class="blog-title transition-colors duration-300 group-hover:text-[#ff3218]">
                    Too Lazy to Type In Every Expense? Let AI Read Your Receipts
                </h2>

                <p class="blog-description">
                    Manual expense entry is why most spending trackers get abandoned. AI Spend in Subscrr reads receipts and statements from a photo and does the math for you.
                </p>
            </a>


            <!-- ARTICLE 2 -->
            <a 
                href="#" 
                data-animate="fade-up"
                style="transition-delay: 0.2s"
                class="blog-card group block"
            >
                <div class="blog-image">
                    <img 
                        src="<?= base_url('assets/uploads/blog/blog-yearly-cost-2.jpg') ?>" 
                        alt="How Much Do Your Subscriptions Really Cost Per Year?"
                    >
                </div>

                <h2 class="blog-title transition-colors duration-300 group-hover:text-[#ff3218]">
                    How Much Do Your Subscriptions Really Cost Per Year?
                </h2>

                <p class="blog-description">
                    The average person pays for 12 subscriptions and remembers four. Here is how to find your real yearly number in five minutes, and what to do with it.
                </p>
            </a>


            <!-- ARTICLE 3 -->
            <a 
                href="#" 
                data-animate="fade-up"
                style="transition-delay: 0.3s"
                class="blog-card group block"
            >
                <div class="blog-image">
                    <img 
                        src="<?= base_url('assets/uploads/blog/blog-free-trial.jpg') ?>" 
                        alt="Forgot to Cancel a Free Trial? Here Is How to Stop Paying for It"
                    >
                </div>

                <h2 class="blog-title transition-colors duration-300 group-hover:text-[#ff3218]">
                    Forgot to Cancel a Free Trial? Here Is How to Stop Paying for It
                </h2>

                <p class="blog-description">
                    Free trials are built to be forgotten. Here is how to cancel them on iPhone, get a refund when you are charged, and never let it happen again.
                </p>
            </a>


            <!-- ARTICLE 4 -->
            <a 
                href="#" 
                data-animate="fade-up"
                style="transition-delay: 0.4s"
                class="blog-card group block"
            >
                <div class="blog-image">
                    <img 
                        src="<?= base_url('assets/uploads/blog/blog-track-iphone-3.jpg') ?>" 
                        alt="The Best Way to Track Subscriptions on iPhone in 2026"
                    >
                </div>

                <h2 class="blog-title transition-colors duration-300 group-hover:text-[#ff3218]">
                    The Best Way to Track Subscriptions on iPhone in 2026
                </h2>

                <p class="blog-description">
                    Spreadsheets, bank apps, iOS settings or a dedicated tracker? An honest comparison of every way to track subscriptions on iPhone, with a privacy checklist.
                </p>
            </a>


            <!-- ARTICLE 5 -->
            <a 
                href="#" 
                data-animate="fade-up"
                style="transition-delay: 0.5s"
                class="blog-card group block"
            >
                <div class="blog-image">
                    <img 
                        src="<?= base_url('assets/uploads/blog/blog-subscription-creep.jpg') ?>" 
                        alt="Subscription Creep: Why Your Money Quietly Disappears Every Month"
                    >
                </div>

                <h2 class="blog-title transition-colors duration-300 group-hover:text-[#ff3218]">
                    Subscription Creep: Why Your Money Quietly Disappears Every Month
                </h2>

                <p class="blog-description">
                    Subscription creep is the slow stacking of small recurring charges plus silent price increases. Here is how it works on your psychology and how to beat it.
                </p>
            </a>

        </div>
    </section>

</main>
 <?php $this->load->view('layout/footer.php'); ?>


<style>
  [data-animate='fade-up'] {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.8s cubic-bezier(0.22, 1, 0.36, 1),
                transform 0.8s cubic-bezier(0.22, 1, 0.36, 1);
    will-change: opacity, transform;
  }
  [data-animate='fade-up'].animate-visible {
    opacity: 1;
    transform: translateY(0);
  }
</style>

<script>
  const animatedElements = document.querySelectorAll('[data-animate]');
  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate-visible');
          obs.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
  );

  animatedElements.forEach((el) => observer.observe(el));
</script>
</body>
</html>