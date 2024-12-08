import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/site.css', 
                'resources/css/tabler.min.css', 
                'resources/css/tabler-vendors.min.css', 
                
                'resources/js/demo.min.js',
                'resources/js/app.js',
                'resources/js/tabler.min.js',
            ],
            refresh: true,
        }),
    ],
});
