<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscrr</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('assets/uploads/icon/icon_Subscrr.png') ?>">
    <!-- Apple Touch Icon (untuk iOS/iPhone) -->
    <link rel="apple-touch-icon" href="<?= base_url('assets/uploads/icon/icon_Subscrr.png') ?>">
    
    <link rel="stylesheet" href="<?= base_url('assets/output.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700;800&display=swap" rel="stylesheet">

    <!-- Anti-Flicker Dark Mode Script -->
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <!-- CSS untuk Splash Screen (Typewriter Halus & Responsif) -->
    <style>
        body {
            overflow-x: hidden; /* Mencegah scrollbar horizontal saat splash muncul */
        }
        #splash-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #FAF9F6;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden; /* Mencegah teks keluar dari layar */
            transition: opacity 0.6s ease, visibility 0.6s ease;
        }
        /* Tambahan untuk dark mode pada splash screen */
        .dark #splash-screen {
            background-color: #0a0a0a;
        }
        #splash-screen.hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }
        .typewriter-text {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            /* Ukuran font responsif: Minimal 3rem (48px), Sedang 15% dari lebar layar, Maksimal 10rem (160px) */
            font-size: clamp(3rem, 15vw, 10rem); 
            color: #FF4D00;
            letter-spacing: -0.02em;
            display: inline-block;
            white-space: nowrap; /* Mencegah teks turun ke bawah */
            text-align: center;
        }
        /* Kursor berkedip lebih halus */
        .typewriter-cursor {
            display: inline-block;
            width: 0.08em;
            height: 1em;
            background-color: #FF4D00;
            margin-left: 0.05em;
            animation: blink 0.8s ease-in-out infinite;
            vertical-align: text-bottom;
        }
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }
    </style>
</head>
<body class="bg-white dark:bg-[#0a0a0a] text-gray-900 dark:text-gray-100 transition-colors duration-300">

    <!-- Splash Screen -->
    <div id="splash-screen">
        <span class="typewriter-text" id="typewriter"></span>
        <span class="typewriter-cursor"></span>
    </div>

    <?php $this->load->view('layout/navbar'); ?>

    <?php $this->load->view('site/hero'); ?>

    <?php $this->load->view('site/overview'); ?>

    <?php $this->load->view('site/ai_spend'); ?>
    
    <?php $this->load->view('site/privacy'); ?>
    
    <?php $this->load->view('site/pricing'); ?>
    
    <?php $this->load->view('layout/footer.php'); ?>

    <!-- Script Animasi Typewriter Cepat & Halus -->
    <script>
        const text = "Subscrr";
        const typewriterElement = document.getElementById('typewriter');
        let index = 0;

        function typeChar() {
            if (index < text.length) {
                typewriterElement.textContent += text.charAt(index);
                index++;
                setTimeout(typeChar, 70); // 70ms per huruf (cepat & halus)
            } else {
                setTimeout(() => {
                    const splash = document.getElementById('splash-screen');
                    if (splash) {
                        splash.classList.add('hidden');
                    }
                }, 400);
            }
        }

        window.addEventListener('load', () => {
            setTimeout(typeChar, 200);
        });
    </script>

    <!-- Script Toggle Dark Mode (Tombol dengan id="theme-toggle" di footer) -->
    <script>
        const themeToggleBtn = document.getElementById('theme-toggle');
        if (themeToggleBtn) {
            themeToggleBtn.addEventListener('click', function() {
                document.documentElement.classList.toggle('dark');
                if (document.documentElement.classList.contains('dark')) {
                    localStorage.setItem('theme', 'dark');
                } else {
                    localStorage.setItem('theme', 'light');
                }
            });
        }
    </script>

</body>
</html>