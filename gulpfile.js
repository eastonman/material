var gulp = require('gulp'),
    del = require('del'),
    minifycss = require('gulp-clean-css'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    jshint = require('gulp-jshint'),
    runSequence = require('run-sequence'),
    replace = require('gulp-replace');

//check expression
gulp.task('jshint', function() {
    return gulp.src('./src/js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

//minifying css
gulp.task('minifycss', function() {
    return gulp.src('./src/css/*.css')
        .pipe(rename({ suffix: '.min' }))
        .pipe(minifycss())
        .pipe(gulp.dest('./css'));
});

gulp.task('replace-header', function(){
    return gulp.src(['./src/php/header.php'])
        .pipe(replace('shared.css', 'shared.min.css'))
        .pipe(gulp.dest('./inc'));
});

gulp.task('replace-index', function(){
    return gulp.src(['./src/php/index.php'])
        .pipe(replace('index.css', 'index.min.css'))
        .pipe(replace('post.css', 'post.min.css'))
        .pipe(gulp.dest('./'));
});

gulp.task('replace-post', function(){
    return gulp.src(['./src/php/post.php'])
        .pipe(replace('post.css', 'post.min.css'))
        .pipe(replace('index.css', 'index.min.css'))
        .pipe(gulp.dest('./'));
});

gulp.task('build-clean', function() {
    // Return the Promise from del()
    return del(['src']);
});

gulp.task('dev-clean', function() {
    // Return the Promise from del()
    return del(['./css/*.css']);
});

gulp.task('build', function() {
    return runSequence('dev-clean',
        'minifycss',
        ['replace-header', 'replace-index','replace-post'],
        'build-clean');
});

gulp.task('dev', function() {
    return runSequence('minifycss');
});
