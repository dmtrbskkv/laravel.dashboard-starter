const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/main.js', 'public/assets/js');
mix.js('resources/js/dashboard.js', 'public/assets/dashboard/js');

mix.sass('resources/sass/dashboard.scss', 'public/assets/dashboard/css');
mix.sass('resources/sass/dashboard-vendor.scss', 'public/assets/dashboard/css');
mix.sass('resources/sass/main.scss', 'public/assets/css');

// mix.copy('resources/static', 'public/static')
