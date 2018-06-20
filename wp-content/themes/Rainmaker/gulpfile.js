// Load plugins
var
gulp = require('gulp'),
autoprefixer = require('gulp-autoprefixer'),
cache = require('gulp-cache'),
concat = require('gulp-concat'),
imagemin = require('gulp-imagemin'),
sass = require('gulp-sass'),
livereload = require('gulp-livereload'),
minifyCSS = require('gulp-minify-css'),
notify = require('gulp-notify'),
shell = require('gulp-shell'),
uglify = require('gulp-uglify'),
sourceMaps = require('gulp-sourcemaps'),
rename = require('gulp-rename'),
gutil = require('gulp-util');
lr = require('tiny-lr'),
server = lr();

// Styles
gulp.task('styles', function() {
    //the initializer / master SCSS file, which will just be a file that imports everything
    return gulp.src('assets/styles/*.scss')
                //get sourceMaps ready
                .pipe(sourceMaps.init())
                //include SCSS and list every "include" folder
               .pipe(sass({
                      errLogToConsole: true,
                      includePaths: [
                          'assets/styles/partials/'
                      ]
               }))
               .pipe(autoprefixer({
                   browsers: ['last 2 versions'],
                   cascade:  true
               }))
               //catch errors
               .on('error', gutil.log)

               //the final filename of our combined css file
               .pipe(concat('style.css'))

               //where to save our final, compressed css file
							 .pipe(minifyCSS())
							 //get our sources via sourceMaps
							 .pipe(sourceMaps.write())
               .pipe(gulp.dest('./'))

               //notify browserSync to refresh
               .pipe(livereload(server))
							 .pipe(notify({ message: 'Styles task complete' }));
});

// Scripts
gulp.task('scripts', function() {
    //this is where our dev JS scripts are
    return gulp.src(['assets/js/source/*.js', 'assets/js/vendor/*.js'])
                //this is the filename of the compressed version of our JS
               .pipe(concat('main.js'))
               //catch errors
               .on('error', gutil.log)
							 //send to build
							 .pipe(gulp.dest('assets/js/build'))
							 //rename with minify
							 .pipe(rename({ suffix: '.min' }))
               //compress :D
               .pipe(uglify())
							 .pipe(livereload(server))
               //where we will store our finalized, compressed script
               .pipe(gulp.dest('assets/js/build'))
               //notify browserSync to refresh
							 .pipe(livereload(server))
							 .pipe(notify({ message: 'Scripts task complete' }));
});

// Images
gulp.task('images', function(tmp) {
    gulp.src('assets/images/*')
		.pipe(imagemin([
					imagemin.gifsicle({interlaced: true}),
					imagemin.jpegtran({progressive: true}),
					imagemin.optipng({optimizationLevel: 7}),
					imagemin.svgo({
							plugins: [
									{removeViewBox: true},
									{cleanupIDs: false}
							]
					})
					]))
				.pipe(livereload(server))
        .pipe(gulp.dest('assets/images'))
				.pipe(notify({ message: 'Images task complete' }));
});

// Watch
gulp.task('watch', function() {

  // Listen on port 35729
  server.listen(35729, function (err) {
	if (err) {
	  return console.log(err)
	};

	// Watch .scss files
	gulp.watch('assets/styles/**/*.scss', ['styles']);

	// Watch .js files
	gulp.watch('assets/js/**/*.js', ['scripts']);

	// Watch image files
	gulp.watch('assets/images/**/*', ['images']);

  });

});

// Default task
gulp.task('default', ['styles', 'scripts', 'images', 'watch']);
