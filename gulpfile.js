var gulp = require('gulp'),
	concatCss = require('gulp-concat-css'),
	cleanCSS = require('gulp-clean-css'),
	concat = require('gulp-concat'),
	// del = require('del'),
	autoprefixer = require('gulp-autoprefixer');


var paths = {
	css: {
		src: 'src/css/*.css',
		dest: 'assets/css/'
	},
	js: {
		src: 'src/js/*.js',
		dest: 'assets/js/'
	}
};

// function clean() {
// 	del([ 'assets' ]);
// }

function css() {
	return gulp.src(paths.css.src)
		.pipe(concatCss("styles.min.css"))
		// .pipe(autoprefixer({
        //     browsers: ['last 2 versions'],
        //     cascade: false
        // }))
		.pipe(cleanCSS({compatibility: 'ie8'}))
		.pipe(gulp.dest(paths.css.dest));
}

function js() {
	return gulp.src(paths.js.src)
		.pipe(concat("scripts.min.js"))
		.pipe(gulp.dest(paths.js.dest));
}

function watch() {
	gulp.watch(paths.css.src, css);
	gulp.watch(paths.js.src, js);
}

var build = gulp.series(gulp.parallel(css, js));

exports.watch = watch;
exports.default = build;