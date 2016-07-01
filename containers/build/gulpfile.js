var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync').create();
var plumber = require('gulp-plumber');
var sourcemaps = require('gulp-sourcemaps');

/********** Jobs ***********/

gulp.task('scss', function() {
	return gulp.src('src/scss/styles.scss')
	  .pipe(plumber({
		  errorHandler: onError
	  }))
		.pipe(sourcemaps.init())
		.pipe(sass({ errLogToConsole: true, outputStyle: 'compressed' }))
		.pipe(autoprefixer())
		.pipe(sourcemaps.write('./maps'))
		.pipe(gulp.dest('src/css'))
		.pipe(browserSync.stream({match: "**/*.css"}));
});



/********** Entry Points ***********/

gulp.task('build', ['scss'], function() {

});

gulp.task('watch', ['browser-sync'], function() {
  gulp.watch('src/scss/**/*.scss', ['scss']);
});


/********** Helpers ***********/

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "nginx"
    });
});

var onError = function (error) {

	var message = '<div style="text-align:left;">' +
									'<div style="font-weight:bold;color:red;margin-bottom: 5px;">TASK FAILED [' + error.plugin + ']</div>' +
									'<div>' + error.relativePath + ' : ' + error.line + '</div>' +
									'<div>' + error.messageOriginal + '</div>' +
								'</div>';

	console.log(error.toString());
	browserSync.notify(message, 10000);
	this.emit('end');
};
