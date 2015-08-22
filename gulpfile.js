var gulp = require('gulp');
var elixir = require('laravel-elixir');


gulp.task("dupefiles", function() {
	gulp.src("vendor/bower_down/components-font-awesome/css/font-awesome.min.css")
		.pipe(gulp.dest("public/css"));
	gulp.src("vendor/bower_down/components-font-awesome/fonts/**")
		.pipe(gulp.dest("public/fonts"));
	gulp.src("vendor/bower_down/jquery/dist/jquery.min.js")
		.pipe(gulp.dest("public/js"));
});


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

elixir(function(mix) {
    mix.sass('app.scss');
});
