var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('hello', async function() {
    console.log('Hello Gulp is working ');
});

// gulp.task('sass', function() {
//     return gulp.src('scss/style.scss')
//         .pipe(sass()) // Converts Sass to CSS with gulp-sass
//         .pipe(gulp.dest('css'))
// });


gulp.task('sass', function() {
        return gulp.src('scss/**/*.scss') // Gets all files ending with .scss in app/scss and children dirs
            .pipe(sass())
            .pipe(gulp.dest('css'))
    })
    // Gulp watch syntax

gulp.task('watch', function() {
    gulp.watch('scss/**/*.scss', gulp.series('sass'));
});