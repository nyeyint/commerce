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

mix.js('resources/assets/js/bundle.js', 'public/js/bundle.min.js')
	.js('node_modules/owl.carousel/dist/owl.carousel.min.js', 'public/js/bundle.min.js')
	.js('node_modules/smartwizard/dist/js/jquery.smartWizard.min.js', 'public/js/admin-bundle.min.js')
	.styles('node_modules/smartwizard/dist/css/smart_wizard_theme_arrows.css', 'public/css/admin-bundle.min.css')
	.styles([
			'resources/assets/sass/bundle.css',
			'node_modules/owl.carousel/dist/assets/owl.carousel.css'
	], 'public/css/bundle.min.css');
