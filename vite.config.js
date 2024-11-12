import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/plugins/bootstrap.min.css',
                'resources/css/plugins/flaticon.css',
                'resources/css/plugins/font-awesome.css',
                'resources/css/plugins/iconfont.css',
                'resources/css/plugins/ion.rangeSlider.min.css'
            ],
            refresh: true,
        }),
    ],
});
