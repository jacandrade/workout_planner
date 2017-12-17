let mix = require('laravel-mix');

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

mix.js('resources/assets/js/exercises.js', 'public/js')
    .js('resources/assets/js/exerciseinstances.js', 'public/js')
    .js('resources/assets/js/plans.js', 'public/js')
    .js('resources/assets/js/plandays.js', 'public/js')
    .js('resources/assets/js/users.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');