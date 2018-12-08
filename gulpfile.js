var gulp = require('gulp'),
    del = require('del'),
    minifycss = require('gulp-clean-css'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    jshint = require('gulp-jshint'),
    runSequence = require('run-sequence'),
    replace = require('gulp-replace'),
    rev = require("gulp-rev"),
    revColletor = require('gulp-rev-collector'),
    htmlmin = require('gulp-htmlmin');

//check expression
gulp.task('jshint', function() {
    return gulp.src('js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

gulp.task('copy',  function() {
    return gulp.src(['lib/**/*','fonts/**/*','img/**/*','js/**/*','inc/**/*.php','*.php'],{ base: '.' })
      .pipe(gulp.dest('dist'))
});

gulp.task('buildCSS', function() {
    return gulp.src('css/*.css')
        .pipe(minifycss())
        .pipe(rev())
        .pipe(gulp.dest('dist/css'))
        .pipe(rev.manifest())
        .pipe(gulp.dest('.'));
});

gulp.task('revReplace',function () {
    return gulp.src(['rev-manifest.json','dist/**/*.php'],{base:'dist'})
        .pipe(revColletor({
            replaceReved:true
        }))
        .pipe(gulp.dest('dist'));
})

gulp.task('htmlminify',function () {
    return gulp.src(['index.php','page.php', 'post.php', 'template-links.php'])
        .pipe(htmlmin({
             collapseWhitespace: true,
             removeComments: true,
        }))
        .pipe(gulp.dest('dist'));
})

gulp.task('htmlminify-inc',function () {
    return gulp.src(['inc/header.php', 'inc/footer.php', 'inc/sidebar.php'])
        .pipe(htmlmin({
             collapseWhitespace: true,
             removeComments: true,
             ignoreCustomFragments: [/<main>/, /<\/main>/, /<\?[\s\S]*?(?:\?>|$)/]
        }))
        .pipe(gulp.dest('dist/inc'));
})

gulp.task('clean', function() {
    return del('dist/*');
});

gulp.task('build', function() {
    // build into a new folder
    return runSequence(
        'clean',
        ['copy','buildCSS','htmlminify', 'htmlminify-inc'],
        'revReplace');
});
