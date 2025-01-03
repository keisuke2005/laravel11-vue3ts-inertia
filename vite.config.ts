import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import path from 'path';
//import checker from 'vite-plugin-checker';
import laravel from 'laravel-vite-plugin';
//import eslint from 'vite-plugin-eslint'; 

export default defineConfig({
    logLevel: 'error',
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/app.css',
                'resources/js/app.ts',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',
        port: 5173,
        strictPort: true,
        watch: {
            usePolling: true,
        },
        hmr: {
            overlay: true,
        },
    },
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'), // エイリアス設定
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        },
    },
});
