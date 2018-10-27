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

mix.styles([
    'resources/assets/usuario/css/bootstrap.min.css',
    'resources/assets/usuario/css/owl.carousel.css',
    'resources/assets/usuario/css/owl.theme.default.min.css',
    'resources/assets/usuario/css/style.css',
    'resources/assets/usuario/css/jquery-ui.css'
], 'public/css/biglicss.css')
mix.styles([
    'resources/assets/empresa/css/bootstrap.min.css',
    'resources/assets/empresa/css/style_slider_header.css',
    'resources/assets/empresa/css/agency.css'
], 'public/css/empresa.css')
.scripts([
    'resources/assets/empresa/js/jquery.min.js',
    'resources/assets/empresa/js/popper.min.js',
    'resources/assets/empresa/js/bootstrap.min.js',
    'resources/assets/empresa/js/Chart.min.js',
    'resources/assets/empresa/js/pace.min.js',
    'resources/assets/empresa/js/template.js',
    'resources/assets/empresa/js/sweetalert2.all.js'
], 'public/js/empresa.js')
.scripts([
    'resources/assets/usuario/js/ie-emulation-modes-warning.js',
    'resources/assets/usuario/js/bootstrap.min.js',
    'resources/assets/usuario/js/owl.carousel.min.js',
    'resources/assets/usuario/js/theme-scripts.js',
    'resources/assets/usuario/js/Chart.min.js',
    'resources/assets/usuario/js/pace.min.js',
    'resources/assets/usuario/js/popper.min.js',
    'resources/assets/usuario/js/sweertaler.min.js',
], 'public/js/biglicss.js')
.js(['resources/assets/js/app.js'],'public/js/app.js');

