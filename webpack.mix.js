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

mix.js('resources/assets/js/app.js', './public_html/js/app.js')
    .sass('resources/assets/styles/sass/app.scss', './public_html/css')
    .sass('resources/assets/styles/sass/customers.scss', './public_html/css')
    .sass('resources/assets/styles/sass/network-infrastructure.scss', './public_html/css')
    .sass('resources/assets/styles/sass/premium-networks.scss', './public_html/css')
    .sass('resources/assets/styles/sass/electronic-security.scss', './public_html/css')
    .sass('resources/assets/styles/sass/information-technology.scss', './public_html/css')
    .sass('resources/assets/styles/sass/moves-and-changes.scss', './public_html/css')
    .sass('resources/assets/styles/sass/service-desk.scss', './public_html/css')
    .sass('resources/assets/styles/sass/telecommunications.scss', './public_html/css')
    .sass('resources/assets/styles/sass/company.scss', './public_html/css');
