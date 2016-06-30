var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync').create();
var plumber = require('gulp-plumber');

var onError = function (err) {
  console.log(err.toString());
	this.emit('end');
};

gulp.task('scss', function() {
	return gulp.src('src/scss/styles.scss')
	  .pipe(plumber({
		  errorHandler: onError
	  }))
		.pipe(sass({ errLogToConsole: true }))
		.pipe(autoprefixer())
		.pipe(gulp.dest('src/css'))
		.pipe(browserSync.stream());
});

gulp.task('watch', ['browser-sync'], function() {
  gulp.watch('src/scss/**/*.scss', ['scss']);
});

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "nginx"
    });
});
