var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('scss', function() {
	return gulp.src('../src/scss/styles.scss')
		.pipe(sass({ errLogToConsole: true }))
		.pipe(autoprefixer())
		.pipe(gulp.dest('../src/css'));
});

gulp.task('watch', function() {
  gulp.watch('../src/scss/**/*.scss', ['scss']);
});
