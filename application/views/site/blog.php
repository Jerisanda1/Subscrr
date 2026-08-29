<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Subscrr</title>
    <link rel="stylesheet" href="<?= base_url('assets/output.css') ?>">
</head>
<body class="bg-[#FDF6E3] min-h-screen">

    <!-- Navbar (sama seperti home) -->
    <?php $this->load->view('layout/navbar'); ?>

    <!-- Konten Blog -->
    <section class="py-20 bg-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="text-4xl font-bold text-gray-900">Halaman Blog</h1>
            <p class="mt-4 text-gray-600">Ini adalah halaman blog yang terpisah dari home.</p>
            
            <!-- Contoh tombol kembali ke home -->
            <a href="<?= site_url('home') ?>" class="inline-block mt-6 bg-[#F54420] text-white px-6 py-3 rounded-full hover:bg-[#D9321B]">
                Kembali ke Beranda
            </a>
        </div>
    </section>

    <!-- Footer -->
    <?php $this->load->view('layout/footer'); ?>

</body>
</html>