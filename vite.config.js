import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
        host: 'localhost', 
        port: 5173,
        cors: {
            origin: [
                'http://laravelrestaurent.com:8000',
                'http://laravelrestaurent.com',
                'http://127.0.0.1:8000',
                'http://localhost:8000'
            ],
            methods: ['GET', 'OPTIONS'],
            allowedHeaders: ['Content-Type', 'X-Requested-With'],
        },
    },
});
