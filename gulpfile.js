var gulp = require('gulp');

var sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglify');

///////////////////////////////////////////////////////////

// SASS task
gulp.task('scss', function () {
  return gulp.src('./src/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(rename('styles.min.css'))
    .pipe(gulp.dest('./assets/'));
});

// Javascript task
gulp.task('js', function() {
  return gulp.src('./src/js/**/*.js')
    .pipe(concat('scripts.js'))
    .pipe(uglify())
    .pipe(rename('scripts.min.js'))
    .pipe(gulp.dest('./assets/'));
});

///////////////////////////////////////////////////////////

gulp.task('watch', function() {
  gulp.watch('./src/**/*.scss', ['scss']);
  gulp.watch('./src/**/*.js', ['js']);
});

///////////////////////////////////////////////////////////

gulp.task('default',['scss', 'js'],function(){

});
