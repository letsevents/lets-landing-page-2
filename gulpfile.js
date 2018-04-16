var gulp = require('gulp');
var less = require('gulp-less');
let cleanCSS = require('gulp-clean-css');

gulp.task('build', () => {
  return gulp.src('less/styles-ls2.less')
        .pipe(less())
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('css/'))
});

/* Task to compile less */
gulp.task('compile-less', function () {
    gulp.src('less/styles-ls2.less')
        .pipe(less())
        .pipe(gulp.dest('css/'));
});
/* Task to watch less changes */
gulp.task('watch-less', function () {
    gulp.watch('less/**/*.less', ['compile-less']);
});


/* Task when running `gulp` from terminal */
gulp.task('default', [ 'compile-less', 'watch-less']);