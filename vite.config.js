import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'; // Importar el plugin

export default defineConfig({
    plugins: [
        tailwindcss(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/animaciones.css'],
            refresh: true,
        }),
    ],
    server: { // <--- Añade esto
        host: '0.0.0.0',
        port: 5173,
        cors: true,
        hmr: {
            host: '192.168.10.106',
            port: 5173,
        },
        watch: {
            usePolling: true, // VITAL para WSL: obliga a revisar cambios de archivos
        },
    },
});
