const { mix } = require('laravel-mix');

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

mix.js(
        [
            'resources/assets/js/app.js',
            'resources/assets/js/common.js',
            'resources/assets/js/profile/profile.js',
        ],
        'public/js'
    )
   .sass('resources/assets/sass/app.scss', 'public/css')
   .browserSync({proxy: 'localhost:8000'});
