var gulp = require('gulp');

var autoprefixer = require('gulp-autoprefixer');
var cssmin = require('gulp-cssmin');
var notify = require('gulp-notify');
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

// Default
gulp.task('default', function() {
    gulp.watch('assets/scss/**/*.scss', ['css']);
});