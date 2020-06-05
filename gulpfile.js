const gulp = require('gulp');
const sass = require('gulp-sass');
var php = require('gulp-connect-php');
const concat = require('gulp-concat-css');
const browserSync = require('browser-sync').create();

function runSass() {
    return gulp
        .src('scss/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('css'))
        .pipe(browserSync.stream());
}

function reload() {
    browserSync.reload();
}

function watch() {
    browserSync.init({
        server: {
            server: true,

        }
    });
    gulp.watch('scss/*.scss', runSass);
    gulp.watch('**/*.php', reload);
    gulp.watch('**/*.js', reload);
}

exports.sass = runSass;
exports.watch = watch;