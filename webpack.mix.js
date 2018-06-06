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

 mix.webpackConfig({
 	resolve: {
 		alias: {
 			jquery: "jquery/src/jquery"
 		}
 	}
 });

// TODO: extract used semantic js files only
mix.js('resources/assets/js/app.js', 'public/js')
   .js([
       'resources/assets/js/utils/EventBus.js',
       'resources/assets/js/utils/Information.js',
       'resources/assets/js/utils/Utils.js',
    ], 'public/js/utils.js')
   .extract([
       'axios',
       'vue',
       'jquery',
       './resources/assets/semantic/dist/semantic'
   ])
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/index.scss', 'public/css');


if (Mix.inProduction) {
    mix.version();
}
