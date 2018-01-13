// ===================================
// Stuff to configure
// ===================================
var rootFolder = 'app';
var showDir = false;

var paths = {
  styles: {
    src: rootFolder + '/scss/**/*.scss',
    dest: rootFolder + '/css/'
  },
  scripts: {
    src: rootFolder + '/js/**/*.js'
    // dest: rootFolder + '/compiled/'
  }
};

// ===================================
// Stuff we need
// ===================================
var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var cssnano = require('gulp-cssnano');
var gulpIf = require('gulp-if');
var browserSync = require('browser-sync').create();
var useref = require('gulp-useref');

// ===================================
// Tasks
// ===================================
function styles() {
    return gulp.src(paths.styles.src)
    .pipe(sass())
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(browserSync.reload({
        stream: true
    }))
}

function compress() {
    return gulp.src('app/*.html')
    .pipe(useref())
    .pipe(gulpIf('*.js', uglify()))
    .pipe(gulpIf('*.css', cssnano()))
    .pipe(gulp.dest('dist'))
}

function watch() {
    gulp.watch(paths.styles.src, styles);
    gulp.watch(paths.scripts.src, browserSync.reload);
    gulp.watch(rootFolder + '/*.html').on('change', browserSync.reload);
}

function livesync() {
  browserSync.init({
    server: {
      baseDir: rootFolder + '/',
      directory: showDir
    },
  })
}

function defaultTask(done) {
    var message =
    '\n\n' +
    'Hello there. Use these commands:\n' +
    '-- "gulp build" to start the project\n' +
    '-- "gulp compress" to minify and uglify your styles and scripts\n' +
    '\n';
    console.log(message);
    done();
}

gulp.task('browserSync', livesync);
gulp.task('compress', compress);
gulp.task('watch', watch);
gulp.task('build', gulp.parallel('browserSync', 'watch'));
gulp.task('default', defaultTask);
