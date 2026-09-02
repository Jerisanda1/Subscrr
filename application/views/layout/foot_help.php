<footer class="bg-[#d3cfc6] dark:bg-[#0a0a0a] transition-colors duration-300">
    <div class="max-w-6xl mx-auto px-6 lg:px-8 py-12 pb-8">
        
        <!-- Baris Atas: Logo & 4 Sosial Media -->
        <div class="flex justify-between items-center mb-8">
            
            <!-- Logo & Tulisan Subscrr (Link ke Help Center) -->
            <a href="<?= site_url('Help_center') ?>" class="flex items-center gap-3">
                <img src="<?= base_url('assets/uploads/icon/icon_Subscrr.png') ?>" alt="Subscrr" class="h-9 w-9 object-contain">
                <span class="text-xl font-bold text-gray-900 dark:text-white">Subscrr</span>
            </a>
            
            <div class="flex items-center gap-6 text-gray-500 dark:text-gray-400">
                <!-- Icon Threads -->
                <a href="#" class="hover:text-gray-900 dark:hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M17.74 11.22c-.1-.05-.2-.09-.31-.13-.18-3.24-1.95-5.09-4.93-5.11h-.04c-1.78 0-3.26.76-4.17 2.14l1.64 1.12c.68-1.03 1.75-1.25 2.53-1.25h.03c.98 0 1.72.29 2.2.85.35.41.58.97.7 1.68a12.5 12.5 0 0 0-2.81-.13c-2.83.16-4.64 1.81-4.52 4.1.06 1.16.64 2.16 1.63 2.81.84.55 1.92.82 3.04.76 1.48-.08 2.64-.65 3.45-1.68.62-.78 1.01-1.8 1.18-3.08.71.43 1.23 1 1.52 1.68.5 1.16.53 3.07-1.03 4.62-1.36 1.36-3 1.95-5.49 1.97-2.76-.02-4.84-.9-6.2-2.63-1.27-1.61-1.93-3.94-1.95-6.94.02-2.99.68-5.32 1.95-6.94C7.5 3.35 9.58 2.47 12.34 2.45c2.78.02 4.9.91 6.31 2.65.69.85 1.2 1.92 1.55 3.17l1.92-.51c-.42-1.54-1.07-2.87-1.96-3.97C18.36 1.57 15.71.45 12.35.43 8.99.45 6.4 1.58 4.66 3.79 3.11 5.75 2.31 8.5 2.28 11.98v.02c.03 3.48.83 6.22 2.38 8.19 1.74 2.2 4.33 3.33 7.7 3.36 3-.02 5.11-.81 6.86-2.55 2.29-2.29 2.22-5.16 1.47-6.92-.54-1.26-1.57-2.29-2.95-2.86Zm-5.17 4.72c-1.24.07-2.53-.49-2.6-1.68-.05-.89.63-1.88 2.68-2 .23-.01.46-.02.68-.02.73 0 1.41.07 2.03.2-.23 2.89-1.59 3.44-2.79 3.5Z"></path>
                    </svg>
                </a>
                <!-- Instagram (Menggunakan SVG Anda) -->
                <a href="#" class="hover:text-white"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
                
                <!-- Icon Telegram -->
                <a href="#" class="hover:text-gray-900 dark:hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
                </a>
                
                <!-- Icon X -->
                <a href="#" class="hover:text-gray-900 dark:hover:text-white transition-colors">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
            </div>
        </div>

        <!-- Garis Pemisah -->
        <hr class="border-gray-200 dark:border-gray-800 mb-8">

        <!-- Baris Tengah: Link Navigasi & Dark Mode -->
        <nav class="flex flex-wrap items-center gap-x-6 gap-y-4">
            <!-- Link Website ke Home -->
            <a href="<?= site_url('home') ?>" class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">Website</a>
            
            <!-- Link Blog -->
            <a href="<?= site_url('blog') ?>" class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">Blog</a>
            
            <!-- Link Contact us -->
            <a href="<?= site_url('Help_center/contact') ?>" class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">Contact us</a>
            
            <!-- Link Help Center -->
            <a href="<?= base_url('help_center') ?>" class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">Help Center</a>
            
            <!-- Link Privacy Policy -->
            <a href="<?= base_url('privacy-policy') ?>" class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">Privacy Policy</a>
            
            <!-- Link Terms of Use -->
            <a href="<?= base_url('terms') ?>" class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">Terms of Use</a>
        </nav>

        <!-- Baris Bawah: Copyright -->
        <p class="mt-8 text-sm text-gray-500 dark:text-gray-500">© 2026 Subscrr. All rights reserved.</p>
        
    </div>
</footer>