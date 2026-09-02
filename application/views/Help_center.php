<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscrr</title>
    <link rel="stylesheet" href="<?= base_url('assets/output.css') ?>">
    
    <!-- Anti-Flicker Script -->
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>
<!-- Light: #f5f4ee, Dark: #111111 -->
<body class="bg-[#f5f4ee] dark:bg-[#0a0a0a] transition-colors duration-300">
    
    <?php $this->load->view('layout/nav_help.php'); ?>

    <?php $this->load->view('site/content_help.php'); ?>

    <?php $this->load->view ('layout/foot_help.php');?>

    <!-- Script Toggle Dark Mode -->
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