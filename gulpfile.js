/*--------------------------------------
	Gulp
--------------------------------*/

// Notes...

/* Title
--------------------------------*/

// Notes...

var gulp = require('gulp');

var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

var sass = require('gulp-sass');

var autoprefixer = require('gulp-autoprefixer');

var imagemin = require('gulp-imagemin');

var browsersync = require('browser-sync');

/* Directories
--------------------------------*/

// Notes...

var basePaths = {

	dev:	'dev/',
	dist:	'dist/html/wp-content/themes/upgrade/',
	assets: 'dist/html/wp-content/themes/upgrade/assets/'

};

/* Sass
--------------------------------*/

// Notes...

gulp.task('sass', function() {

	return gulp.src(basePaths.dev + 'scss/**/*.scss')

	.pipe(sass({

		outputStyle: 'compressed',
		precision: 9

	}).on('error', sass.logError))

	.pipe(autoprefixer({

		browsers: ['last 2 versions'],
		cascade: false

	}))

	.pipe(gulp.dest(basePaths.assets + 'css'))

	.pipe(browsersync.stream());

});

/* JavaScript
--------------------------------*/

// Notes...

gulp.task('js', function() {

	return gulp.src([

		// basePaths.dev + 'js/modernizr.js',
		// basePaths.dev + 'js/flexslider.js',
		basePaths.dev + 'js/scroll.js',
		// basePaths.dev + 'js/holder.js',
		basePaths.dev + 'js/functions.js'

	])

	.pipe(concat('global.js'))

	// .pipe(rename({

	//     suffix: '.min'

	// }))

	.pipe(uglify())

	.pipe(gulp.dest(basePaths.assets + 'js'))

	.pipe(browsersync.stream());

});

/* Images
--------------------------------*/

// Notes...

gulp.task('img', function() {

	return gulp.src(basePaths.dev + 'img/**/*')

	.pipe(imagemin({

		optimizationLevel: 5,
		progressive: true,
		interlaced: true

	}))

	.pipe(gulp.dest(basePaths.assets + 'img'));

});

/* Fonts
--------------------------------*/

// Notes...

gulp.task('fonts', function() {

	return gulp.src(basePaths.dev + 'fonts/**/*')

	.pipe(gulp.dest(basePaths.assets + 'fonts'));

});

/* Watch
--------------------------------*/

// Notes...

gulp.task('watch', function() {

	browsersync.init({

		proxy: "http://upgrade.local",
		host: "upgrade.local",
		open: "external"

	});

	gulp.watch(basePaths.dev + 'scss/**/*.scss', ['sass']);

	gulp.watch(basePaths.dev + 'js/*.js', ['js']);

	gulp.watch(basePaths.dev + 'img/**/*', ['img']);

	gulp.watch(basePaths.dev + 'fonts/**/*', ['fonts']);

	gulp.watch(basePaths.dist + '**/*.php').on('change', browsersync.reload);

});

/* Title
--------------------------------*/

// Notes...

gulp.task('default', ['sass', 'js', 'img', 'fonts', 'watch']);
