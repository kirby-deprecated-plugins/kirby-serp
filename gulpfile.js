var gulp = require('gulp');

var autoprefixer = require('gulp-autoprefixer');
var cssmin = require('gulp-cssmin');
var notify = require('gulp-notify');
var uglify = require('gulp-uglify');
var gutil = require('gulp-util');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var concat = require('gulp-concat');

// CSS
gulp.task('css', function() {
    gulp.src(['assets/scss/**/*.scss'])
        .pipe(autoprefixer())
        .pipe(concat('style.scss'))
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('assets/css'))
        .pipe(cssmin())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('assets/css'))
        .pipe(notify("CSS generated!"));
});

gulp.task('js', function() {
    gulp.src('assets/js/src/**/*.js')
        .pipe(concat('script.js'))
        .pipe(gulp.dest('assets/js/dist'))
        .pipe(uglify()).on('error', function(err) {
            gutil.log(gutil.colors.red('[Error]'), err.toString());
        })
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('assets/js/dist'))
        .pipe(notify("JS generated!"));
});

// Default
gulp.task('default', function() {
    gulp.watch('assets/scss/**/*.scss', ['css']);
    gulp.watch('assets/js/src/**/*.js', ['js']);
});