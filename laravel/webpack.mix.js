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

// mix.js('resources/js/app.js', 'public/js')
// .vue()
    // .sass('resources/sass/app.scss', 'public/css')
    // .css('resources/css/appp.css', 'public/css/myproject')
    // .copy('node_modules', 'public/node_modules')
    // .copy('resources/images', 'public/images')
    // .copy('node_modules/font-awesome', 'public/node_modules')
//    mix.copy('public/js/main.js', 'resources/js/main.js');
    // .sourceMaps();

    mix.copy('resources/js/appp.js', 'public/js')
    .sourceMaps()
