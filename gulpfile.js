var gulp = require('gulp'),
settings = require('./settings'),
webpack = require('webpack'),
browserSync = require('browser-sync').create(),
postcss = require('gulp-postcss'),
rgba = require('postcss-hexrgba'),
autoprefixer = require('autoprefixer'),
cssvars = require('postcss-simple-vars'),
nested = require('postcss-nested'),
cssImport = require('postcss-import'),
mixins = require('postcss-mixins'),
hash = require('gulp-hash'),
del = require('del'),
colorFunctions = require('postcss-color-function');

const hashOptions = {
  hashLength: 5,
  template: '<%= name %>.<%= hash %><%= ext %>'
};

gulp.task('styles', async function() {
  await del(settings.themeLocation + 'dist/css/*.css');
  return gulp.src(settings.themeLocation + 'assets/css/style.css')
    .pipe(postcss([cssImport, mixins, cssvars, nested, rgba, colorFunctions, autoprefixer]))
    .on('error', (error) => console.log(error.toString()))
    .pipe(hash(hashOptions))
    .pipe(gulp.dest(settings.themeLocation + 'dist/css'));
});

gulp.task('scripts', async function(callback) {
  await del(settings.themeLocation + 'dist/js/*.js');
  webpack(require('./webpack.config.js'), function(err, stats) {
    if (err) {
      console.log(err.toString());
    }
    console.log(stats.toString());
    callback();
  });
});

gulp.task('watch', function() {
  browserSync.init({
    notify: false,
    proxy: settings.urlToPreview,
    ghostMode: false
  });

  gulp.watch('./**/*.php', function() {
    browserSync.reload();
    done();
  });
  gulp.watch('./**/*.twig', function () {
    browserSync.reload();
    done();
  });
  gulp.watch(settings.themeLocation + 'assets/css/**/*.css', gulp.parallel('waitForStyles'));
  gulp.watch([settings.themeLocation + 'assets/js/modules/*.js', settings.themeLocation + 'assets/js/scripts.js'], gulp.parallel('waitForScripts'));
});

gulp.task('waitForStyles', gulp.series('styles', function() {
  return gulp.src(settings.themeLocation + 'dist/css/*.css')
    .pipe(browserSync.stream());
}))

gulp.task('waitForScripts', gulp.series('scripts', function(cb) {
  browserSync.reload();
  cb();
}))

gulp.task('minifycss', )
