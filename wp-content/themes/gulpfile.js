var gulp         = require('gulp'),
		sass         = require('gulp-sass'),
		autoprefixer = require('gulp-autoprefixer'),
		cleanCSS    = require('gulp-clean-css'),
		rename       = require('gulp-rename'),
		browserSync  = require('browser-sync').create(),
		concat       = require('gulp-concat'),
		uglify       = require('gulp-uglify');

gulp.task('browser-sync', ['styles', 'scripts'], function() {
		browserSync.init({
				proxy: "mira-lp.ru",
				notify: false
		});
});

gulp.task('styles', function () {
	return gulp.src('sass/*.sass')
	.pipe(sass({
		includePaths: require('node-bourbon').includePaths
	}).on('error', sass.logError))
	.pipe(rename({suffix: '.min', prefix : ''}))
	.pipe(autoprefixer({browsers: ['last 15 versions'], cascade: false}))
	.pipe(cleanCSS())
	.pipe(gulp.dest('mira-lp/css'))
	.pipe(browserSync.stream());
});

gulp.task('scripts', function() {
	return gulp.src([
		'./mira-lp/libs/modernizr/modernizr.js',
		'./mira-lp/libs/jquery/jquery-1.11.2.min.js',
		'./mira-lp/libs/waypoints/waypoints.min.js',
		'./mira-lp/libs/animate/animate-css.js',
		'./mira-lp/libs/plugins-scroll/plugins-scroll.js',
		])
		.pipe(concat('libs.js'))
		// .pipe(uglify()) //Minify libs.js
		.pipe(gulp.dest('./mira-lp/js/'));
});

gulp.task('watch', function () {
	gulp.watch('sass/*.sass', ['styles']);
	gulp.watch('mira-lp/libs/**/*.js', ['scripts']);
	gulp.watch('mira-lp/js/*.js').on("change", browserSync.reload);
	gulp.watch('mira-lp/*.html').on('change', browserSync.reload);
	gulp.watch('mira-lp/**/*.php').on('change', browserSync.reload);
});

gulp.task('default', ['browser-sync', 'watch']);
