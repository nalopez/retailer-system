const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass([
    		'custom/base/base.scss',
    		'custom/login.scss'
    	], 'resources/assets/css/compiled/app.css')
    	.styles([
    		'resources/assets/css/compiled/app.css',
    		'resources/assets/css/lib/clearfix.css'
    		
    	], 'public/css/app.css')
       .webpack('app.js');
});
