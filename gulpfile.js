// Gulp.js configuration
'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');


gulp.task('sass',() => {
    return gulp
        .src('./scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./'));
});


gulp.task('watch:sass', () => {
    gulp.watch('./scss/**/*.scss', gulp.series('sass'));
});