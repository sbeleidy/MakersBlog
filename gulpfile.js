var gulp = require('gulp');
var elixir = require('laravel-elixir');


gulp.task("dupefiles", function() {
	gulp.src("vendor/bower_down/components-font-awesome/css/font-awesome.min.css")
		.pipe(gulp.dest("public/css"));
	gulp.src("vendor/bower_down/components-font-awesome/fonts/**")
		.pipe(gulp.dest("public/fonts"));
	gulp.src("vendor/bower_down/jquery/dist/jquery.min.js")
		.pipe(gulp.dest("public/js"));
	gulp.src("node_modules/zurb-foundation-5/js/foundation/**")
		.pipe(gulp.dest("public/js"));
	gulp.src("vendor/bower_down/modernizr/modernizr.js")
		.pipe(gulp.dest("public/js"));

	// Copy selectize
	gulp.src("vendor/bower_down/selectize/dist/css/**")
		.pipe(gulp.dest("public/assets/selectize/css"));
	gulp.src("vendor/bower_down/selectize/dist/js/standalone/selectize.min.js")
		.pipe(gulp.dest("public/assets/selectize/"));

	// Copy pickable
	gulp.src("vendor/bower_down/pickadate/lib/compressed/themes/**")
		.pipe(gulp.dest("public/assets/pickadate/themes/"));
	gulp.src("vendor/bower_down/pickadate/lib/compressed/picker.js")
		.pipe(gulp.dest("public/assets/pickadate"));
	gulp.src("vendor/bower_down/pickadate/lib/compressed/picker.date.js")
		.pipe(gulp.dest("public/assets/pickadate/"));
	gulp.src("vendor/bower_down/pickadate/lib/compressed/picker.time.js")
		.pipe(gulp.dest("public/assets/pickadate/"));
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
    mix.phpUnit('phpunit.xml');
});
