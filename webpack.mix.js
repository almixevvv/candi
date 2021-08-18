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

mix
	.js('resources/js/app.js', 'public/js')
	.js('resources/js/generalFunction.js', 'public/js')
	.js('resources/js/sign-in/auth', 'public/js/sign-in')
	.js('resources/js/editor/editor', 'public/js/editor')
	.js('resources/js/editor/front', 'public/js/editor')
	// .copy('resources/js/front/custom.js', 'public/js/custom.js')
	// .postCss('resources/css/blog/blogdetail', 'public/css/blog')
	// .postCss('resources/css/blog/blogmain', 'public/css/blog')
    .sass("resources/css/app.scss", "public/css/app.css");
