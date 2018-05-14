var gulp = require('gulp'),
    del = require('del'),
    minifycss = require('gulp-clean-css'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    jshint = require('gulp-jshint'),
    runSequence = require('run-sequence'),
    replace = require('gulp-replace');

//语法检查
gulp.task('jshint', function() {
    return gulp.src('./src/js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});
//压缩css
gulp.task('minifycss', function() {
    return gulp.src('./src/css/*.css') //需要操作的文件
        .pipe(rename({ suffix: '.min' })) //rename压缩后的文件名
        .pipe(minifycss()) //执行压缩
        .pipe(gulp.dest('./css')); //输出文件夹
});

gulp.task('replace-header', function(){
    return gulp.src(['./src/php/header.php'])
        .pipe(replace('shared.css', 'shared.min.css'))
        .pipe(gulp.dest('./inc'));
});

gulp.task('replace-index', function(){
    return gulp.src(['./src/php/index.php'])
        .pipe(replace('index.css', 'index.min.css'))
        .pipe(gulp.dest('./'));
});

gulp.task('replace-post', function(){
    return gulp.src(['./src/php/post.php'])
        .pipe(replace('post.css', 'post.min.css'))
        .pipe(gulp.dest('./'));
});

gulp.task('build-clean', function() {
    // Return the Promise from del()
    return del(['src']);
});

gulp.task('build', function() {
    return runSequence('minifycss',
        ['replace-header', 'replace-index','replace-post'],
        'build-clean');
});

gulp.task('dev', function() {
    return runSequence('minifycss',
        ['replace-header', 'replace-index','replace-post']);
});
