import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build', // 👈 ensures build files go where Laravel expects
        manifest: true,         // 👈 makes sure manifest.json is generated
        emptyOutDir: true,      // optional: clears old builds
    },

});

