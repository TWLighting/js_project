const gulp = require('gulp');
const babel= require('gulp-babel');
const eslint= require('gulp-eslint');
gulp.task('default',async()=> {

    //執行eslint
    gulp.src(["es6/**/*.js","public/es6/**/*.js"])
    .pipe(eslint())
    .pipe(eslint.format());

    gulp.src('es6/**/*.js').
    pipe((babel())).
    pipe(gulp.dest("dist"));

    gulp.src('publc/es6/**/*.js').
    pipe((babel())).
    pipe(gulp.dest("public/dist"));
});