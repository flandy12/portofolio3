const mix = require('laravel-mix');
var $ = require('jquery');
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
mix.js('resources/js/*.js', 'public/js/main.js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles('resources/style','public/css/boostrap.css')
    .browserSync({
        files: ["public/css/main.css","public/js/main.js"]
    })
    .autoload({
        jquery: ['$', 'window.jQuery']
    });