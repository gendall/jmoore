/**
 * Gulp settings.
 *
 * @package jmoore
 */

"use strict";

var gulp                   = require( 'gulp' )
	, less                 = require( 'gulp-less' )
	, watch                = require( 'gulp-watch' )
	, runSequence          = require( 'run-sequence' )
	, concat               = require( 'gulp-concat' )
	, minifyCss            = require( 'gulp-minify-css' )
	, uglify               = require( 'gulp-uglify' )
	, autoprefixer         = require( 'gulp-autoprefixer' )
	, rename               = require( 'gulp-rename' )

	, styleBase            = './'
	, styleSource          = styleBase + 'less/'
	, cssBuild             = styleBase + 'style.css'
	, watchLessFiles       = styleSource + '/**/*.less'
	, lessFiles            = styleSource + '/**/main.less'

	, jsBase               = 'js/'
	, jsSource             = jsBase + 'lib/'
	, jsBuild              = jsBase + 'main.js'
	, watchJsLibFiles        = jsSource + '/**/*.js'
	, watchJsFiles         = jsBase + 'main.js'
	;

gulp.task( 'less', function() {
	return gulp.src( lessFiles )
	.pipe( less() )
	.on( 'error', function( err ) {
		console.log( err );
		this.emit( 'end' );
	})
	.pipe( concat( 'style.css' ) )
	.pipe( autoprefixer({
		browsers: ['last 4 versions'],
		cascade: false
	}))
	// .pipe(minifyCss({compatibility: 'ie9'}))
	.pipe( gulp.dest( styleBase ) )
});

gulp.task( 'js_libs', function() {
	return gulp.src( watchJsLibFiles )
	.pipe( concat( 'libs.js' ) )
	// .pipe(uglify())
	.pipe( rename( { suffix: '.min' } ) )
	.pipe( gulp.dest( jsBase ) )
});

gulp.task( 'js_global', function() {
	return gulp.src( watchJsFiles )
	.pipe( concat( 'main.js' ) )
	.pipe( gulp.dest( jsBase ) )
});

gulp.task( 'default', function (cb) {
	gulp.watch( watchLessFiles, ['less'] );
	// gulp.watch( watchJsFiles, [ 'js_global' ] );
	runSequence( [ 'less', 'js_libs' ], cb );
});
