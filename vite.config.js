import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue({
            include: [/\.vue$/, /\.md$/], // Asegúrate de incluir archivos .vue
        }),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    esbuild: {
        loader: {
            '.js': 'jsx', // Añade esta línea para manejar JSX
        },
    },
});
