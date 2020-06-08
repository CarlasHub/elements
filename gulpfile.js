var gulp = require('gulp');
sass = require('gulp-sass');
phpConnect = require('gulp-connect-php');
concat = require('gulp-concat-css');
browsersync = require('browser-sync');




function connectsync() {
    phpConnect.server({
        port: 8000,
        keepalive: true,
        base: "."
    }, function() {
        browsersync({
            proxy: '127.0.0.1:8000'
        });
    });
}

function browserSyncReload(done) {
    browsersync.reload();
    done();
}



function watchFiles() {
    gulp.watch("./**/*.php", browserSyncReload);
    gulp.watch("./**/scss/**", css);
    gulp.watch("./**/js/**", js);

}

function css() {
    return gulp
        .src('scss/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('css'))
        .pipe(browsersync.stream());

}

function js() {
    return gulp
        .src("js/*.js")
        .pipe(browsersync.stream());

}

const watch = gulp.parallel([watchFiles, connectsync]);
exports.default = watch;