import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
=======
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/category-selector.js',
                'resources/js/handleScroll.js',
                'resources/js/mobile-menu.js'
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: './../public_html/blog/build',
        emptyOutDir: true,
        assetsDir: 'assets',
      },
>>>>>>> 37b3945 (Atualizações de performance e do Readme)
});
