import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    base: '/build/', 
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
        ]),
    ],

    build: {
        outDir: 'public/build', 
        manifest: true,         
        emptyOutDir: true,      
    },

});

