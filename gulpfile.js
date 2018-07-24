var gulp = require('gulp'),
    del = require('del'),
    minifycss = require('gulp-clean-css'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    jshint = require('gulp-jshint'),
    runSequence = require('run-sequence'),
    replace = require('gulp-replace'),
    rev = require("gulp-rev"),
    revColletor = require('gulp-rev-collector');

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

gulp.task('buildcss', function() {
    return gulp.src('./src/css/*.css')
        .pipe(minifycss())
        .pipe(rev())
        .pipe(gulp.dest('./css'))
        .pipe(rev.manifest())
        .pipe(gulp.dest('./css'));
});

gulp.task('revReplace',function () {
    return gulp.src(['css/rev-manifest.json','**/*.php'])
        .pipe(revColletor({
            replaceReved:true
        }))
        .pipe(gulp.dest('./'));
})

gulp.task('build-clean', function() {
    // Return the Promise from del()
    return del(['src']);
});

gulp.task('dev-clean', function() {
    // Return the Promise from del()
    return del(['./css/*.css']);
});

gulp.task('build', function() {
    return runSequence(
        'dev-clean',
        'buildcss',
        'revReplace',
        'build-clean');
});

gulp.task('dev', function() {
    return runSequence('minifycss');
});
