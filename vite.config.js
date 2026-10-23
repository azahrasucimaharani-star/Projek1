import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';
import react from '@vitejs/plugin-react';
import { fileURLToPath, URL } from 'node:url';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/cards.tsx'],
            refresh: true,
            fonts: [
                bunny('Instrument Sans', {
                    weights: [400, 500, 600],
                }),
            ],
        }),
        tailwindcss(),
        react(),
    ],
    resolve: {
        alias: [
            {
                find: '@designcodeio/threeui/style.css',
                replacement: fileURLToPath(new URL('./src/shaders/threeui.css', import.meta.url)),
            },
            {
                find: '@designcodeio/threeui',
                replacement: fileURLToPath(new URL('./src/shaders/3d-paper/ThreeDPaper.tsx', import.meta.url)),
            },
        ],
    },
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
