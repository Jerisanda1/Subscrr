<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Subscrr</title>
    <link rel="stylesheet" href="<?= base_url('assets/output.css') ?>">

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

<!-- ================= FOOTER SECTION ================= -->
<footer style="background-color: #0d0e12; color: #9ca3af; padding: 24px 24px; border-top: 1px solid #1f2937; font-family: sans-serif;">
  <div style="max-width: 1280px; margin: 0 auto; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 16px;">
    
    <!-- Bagian Kiri: Logo & Ikon Media Sosial -->
    <div style="display: flex; align-items: center; gap: 20px;">
      <!-- Logo & Nama Subscrr -->
      <a href="https://subscrr.com" style="display: flex; align-items: center; gap: 10px; text-decoration: none;">
        <div style="width: 24px; height: 24px; background-color: #74c9ebf1; border-radius: 6px; display: flex; align-items: center; justify-content: center; color: #f21e1e; font-weight: 900; font-size: 28px; line-height: 1;">
          S
        </div>
        <span style="color: #ffffff; font-weight: 700; font-size: 18px; letter-spacing: -0.025em;">Subscrr</span>
      </a>

      <!-- Ikon Social Media -->
      <div style="display: flex; align-items: center; gap: 14px; margin-left: 8px;">
        <!-- Threads -->
        <a href="https://www.threads.com/@subscrr" target="_blank" rel="noopener noreferrer" title="Threads" style="color: #9ca3af; display: flex; transition: color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#9ca3af'">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M19.25 8.5C18.1 5.3 15.3 3 12 3 7.03 3 3 7.03 3 12s4.03 9 9 9c3.87 0 7.15-2.45 8.4-5.9"></path>
            <path d="M12 15.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path>
            <path d="M15.5 12a3.5 3.5 0 0 1-3.5 3.5c-1.2 0-2.2-.6-2.8-1.5"></path>
          </svg>
        </a>

        <!-- Instagram -->
        <a href="https://www.instagram.com/subscrr" target="_blank" rel="noopener noreferrer" title="Instagram" style="color: #9ca3af; display: flex; transition: color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#9ca3af'">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
          </svg>
        </a>

        <!-- Telegram -->
        <a href="https://t.me/subscrr" target="_blank" rel="noopener noreferrer" title="Telegram" style="color: #9ca3af; display: flex; transition: color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#9ca3af'">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.65-.35-1.01.22-1.59.15-.15 2.71-2.48 2.76-2.69.01-.03.01-.14-.07-.2-.08-.06-.19-.04-.27-.02-.12.02-1.96 1.25-5.54 3.69-.52.36-1 .53-1.42.52-.47-.01-1.37-.26-2.03-.48-.82-.27-1.47-.42-1.42-.88.03-.24.38-.49 1.07-.75 4.19-1.82 6.98-3.02 8.38-3.6 3.99-1.66 4.82-1.95 5.36-1.96.12 0 .38.03.55.17.14.12.18.28.2.4.02.13.01.27 0 .39z"/>
          </svg>
        </a>

        <!-- X (Twitter) -->
        <a href="https://x.com/subscrr" target="_blank" rel="noopener noreferrer" title="X" style="color: #9ca3af; display: flex; transition: color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#9ca3af'">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
          </svg>
        </a>
      </div>
    </div>

    <!-- Bagian Kanan: Menu Links & Copyright -->
    <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 24px; font-size: 13px;">
      <a href="https://subscrr.com/help" style="color: #9ca3af; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#9ca3af'">Help Center</a>
      <a href="mailto:support@subscrr.com" style="color: #9ca3af; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#9ca3af'">Contact us</a>
      <a href="<?= base_url('privacy-policy') ?>"
   class="hover:text-white transition">
    Privacy Policy
</a>
      <a href="https://subscrr.com/terms" style="color: #9ca3af; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#9ca3af'">Terms of Use</a>
      <span style="color: #6b7280; margin-left: 8px;">© 2026 Subscrr. All rights reserved.</span>
    </div>

  </div>
</footer>


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