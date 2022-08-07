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

mix.js('resources/js/main.js', 'public/js');
mix.js('resources/js/dashboard.js', 'public/js');

mix.sass('resources/sass/dashboard.scss', 'public/css');
mix.sass('resources/sass/main.scss', 'public/css');

mix.copy('resources/static', 'public/static')
