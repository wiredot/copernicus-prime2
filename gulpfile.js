'use strict';

var gulp = require('gulp'),
	concat = require('gulp-concat'),
	maps = require('gulp-sourcemaps'),
	notify = require('gulp-notify'),
	plumber = require('gulp-plumber'),
	svgstore = require('gulp-svgstore'),
	svgmin = require('gulp-svgmin'),
	path = require('path'),
	sass = require('gulp-sass'),
	browserSync = require('browser-sync'),
	reload = browserSync.reload,
	autoprefixer = require('autoprefixer'),
	postcss = require('gulp-postcss'),
	rsp = require('remove-svg-properties').stream;

var options = {
	templates: 'templates',
	assets: 'assets',
	src: 'src'
}

gulp.task('default', ['scss', 'js', 'svg']);

gulp.task('watch', ['browser-sync'], function() {
	gulp.watch( options.src + '/js/*.js', ['js']);
	gulp.watch( options.src + '/scss/**/*.scss', ['scss']);
	gulp.watch( options.src + '/svg/*.svg', ['svg']);
	gulp.watch( options.templates + '/templates/*.html' ).on('change', reload);
});

gulp.task('scss', function() {
	return gulp.src( options.src + '/scss/**/*')
		.pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
		.pipe(maps.init())
		.pipe(concat('style.css'))
		.pipe(sass())
		.pipe(maps.write('./'))
		.pipe(gulp.dest( options.assets + '/css') )
		.pipe(notify({
			message: 'CSS generated',
			title: 'CampusLive'
		}))
		.pipe(browserSync.stream());
});

gulp.task('js', function() {
	return gulp.src( options.src + '/js/*.js')
		.pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
		.pipe(maps.init())
		.pipe(concat('script.js'))
		.pipe(maps.write('./'))
		.pipe(gulp.dest( options.assets + '/js'))
		.pipe(notify({
			message: 'JS generated',
			title: 'CampusLive'
		}));
});

gulp.task('svg', function() {
	return gulp.src( options.src + '/svg/*.svg')
		.pipe(svgmin(function (file) {
			var prefix = path.basename(file.relative, path.extname(file.relative));
			return {
				plugins: [{
					cleanupIDs: {
						prefix: prefix + '-',
						minify: true
					}
				}]
			}
		}))
		.pipe(svgstore(''))
		.pipe(gulp.dest( options.assets + '/svg'));
});

gulp.task('browser-sync', function(){

	browserSync.init({
		proxy: 'http://local.copernicusprime.com',
		notify: false
	});
});