var gulp = require('gulp'), sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minify = require('gulp-minify-css'), concat = require('gulp-concat'),
    uglify = require('gulp-uglify'), livereload = require('gulp-livereload'),
    compass = require('gulp-compass'), path = require('path');

var public_dir = "public_html/"


// Rerun the task when a file changes
gulp.task('watch', function() {
    livereload.listen();
    gulp.watch('resources/assets/js/**/*.js', ['js']);
    gulp.watch('resources/assets/scss/**/*.scss', ['css']);
    gulp.watch('resources/views/**/*.blade.php').on('change', livereload.changed);
});


gulp.task('css', function () {
    gulp.src([
        'resources/assets/scss/app.scss'
    ])
    .pipe(compass({ css: public_dir + 'css', sass: 'resources/assets/scss' }))
    .pipe(minify())
    .pipe(concat('app.css'))
    .pipe(gulp.dest(public_dir + 'css'))
    .pipe(livereload());
});

gulp.task('js', function () {
    gulp.src([
        'resources/assets/js/vendor/jquery.js',  // always load jquery first
        'resources/assets/js/helpers.js',
        'resources/assets/js/vendor/**/*.js', // everything else
        'resources/assets/js/app.js'
    ])
    .pipe(concat('app.js'))
    .pipe(uglify())
    .pipe(gulp.dest(public_dir + 'js'))
    .pipe(livereload());
});

gulp.task('default', ['js', 'css', 'watch']);