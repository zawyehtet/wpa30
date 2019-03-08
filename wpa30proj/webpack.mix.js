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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
mix.styles([
   "resources/css/nprogress.css"
], "public/css/nprogress.css");
mix.styles([
	"resources/css/bootstrap.min.css",
	"resources/css/font-awesome.min.css",
	"resources/css/ionicons.min.css",
	"resources/css/AdminLTE.min.css",
	"resources/css/blue.css"
	], "public/css/main.css");
mix.scripts([
	"resources/js/jquery.min.js",
	"resources/js/bootstrap.min.js",
	"resources/js/icheck.min.js",
	], "public/js/main.js");











