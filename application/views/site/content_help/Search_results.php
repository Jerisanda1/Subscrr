<section class="max-w-6xl mx-auto px-6 lg:px-8 pb-24 pt-10">
    <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white mb-4">
        Results for "<?php echo htmlspecialchars($query); ?>"
    </h1>
    <p class="text-lg text-gray-600 dark:text-gray-400 mb-8">
        <?php echo count($results); ?> article(s) found.
    </p>
    
    <?php if (empty($results)): ?>
        <div class="bg-white dark:bg-[#161616] border border-gray-200 dark:border-gray-800 rounded-3xl shadow-sm p-10 text-center">
            <p class="text-lg text-gray-600 dark:text-gray-400">No articles found.</p>
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-500">Try searching with different keywords.</p>
        </div>
    <?php else: ?>
        <div class="bg-white dark:bg-[#161616] border border-gray-200 dark:border-gray-800 rounded-3xl shadow-sm divide-y divide-gray-100 dark:divide-gray-800">
            <?php foreach ($results as $result): ?>
                <a href="<?php echo base_url('Help_center/article/' . $result['slug']); ?>" class="group flex flex-col p-6 hover:bg-gray-50 dark:hover:bg-gray-900 transition-colors">
                    <span class="text-xs font-bold text-orange-600 dark:text-orange-400 uppercase tracking-wider mb-2">
                        <?php echo $result['category']; ?>
                    </span>
                    <span class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-orange-600 transition-colors">
                        <?php 
                            // Highlight judul
                            $title = $result['title'];
                            $highlighted_title = preg_replace('/(' . preg_quote($query, '/') . ')/i', '<mark class="bg-orange-100 dark:bg-orange-900/30 text-inherit px-1 rounded">$1</mark>', $title);
                            echo $highlighted_title; 
                        ?>
                    </span>
                    <span class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mt-1">
                        <?php 
                            // Highlight deskripsi
                            $desc = $result['desc'];
                            $highlighted_desc = preg_replace('/(' . preg_quote($query, '/') . ')/i', '<mark class="bg-orange-100 dark:bg-orange-900/30 text-inherit px-1 rounded">$1</mark>', $desc);
                            echo $highlighted_desc; 
                        ?>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>