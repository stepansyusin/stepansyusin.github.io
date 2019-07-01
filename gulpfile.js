var gulp = require('gulp');

// let cleanCSS = require('gulp-clean-css');

var concatCss = require('gulp-concat-css'),
	cleanCSS = require('gulp-clean-css')
	concat = require('gulp-concat'),
	rename = require("gulp-rename");

gulp.task('default', function() {
	return gulp.src('src/css/*.css')
		.pipe(concatCss("styles.min.css"))
		.pipe(cleanCSS({compatibility: 'ie8'}))
		// .pipe(rename("styles.min.css"))
		.pipe(gulp.dest('assets/'));
	// return gulp.src('./lib/*.js')
	// 	.pipe(concat('all.js'))
	// 	.pipe(gulp.dest('./dist/'));
});