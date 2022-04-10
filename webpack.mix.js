const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
// mix.setPublicPath(path.normalize('../public_html'));
// mix.setResourceRoot(path.normalize('public_html'));
mix.setPublicPath('public_html');

mix.js('resources/js/app.js', 'public_html/js').vue()
    .css('resources/css/app.css', 'public_html/css');
