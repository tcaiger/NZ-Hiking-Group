var gulp         = require('gulp')
var sass		 = require('gulp-sass')
var clone        = require('gulp-clone')              
var rename       = require('gulp-rename') 
var plumber      = require('gulp-plumber')            
var beautify     = require('gulp-cssbeautify')
var sourcemap    = require('gulp-sourcemaps') 
var minifycss    = require('gulp-minify-css')
var autoprefix   = require('gulp-autoprefixer')
var combinemq	 = require('gulp-combine-media-queries')


gulp.task('css', function(){

	var stream = gulp.src('public/assets/scss/main.scss')   
		.pipe(plumber())                              
		.pipe(sourcemap.init())                      
		.pipe(sass())
		.pipe(combinemq())                              
		.pipe(sourcemap.write())                      
		.pipe(autoprefix('last 2 versions'))          
	
	// make style.css
	stream.pipe(clone())                              // make a copy of the stream up to autoprefix
		.pipe(beautify())                             // make css really readable
		.pipe(gulp.dest('public/assets/css/'))               // save it into the dist folder
	
	// make style.min.css
	stream.pipe(clone())                              // make a copy of the stream up to autoprefix
		.pipe(minifycss())                            // minify it (removes the sourcemap)
		.pipe(sourcemap.write())                      // write the sourcemap
		.pipe(rename('main.min.css'))                // add .min to the filename
		.pipe(gulp.dest('public/assets/css/'))               // save it into the dist folder
	
	return stream
})

gulp.task('watch', ['css'], function(){
	gulp.watch(['public/assets/scss/*'], ['css'])   // watch for changes and run the css task
})

gulp.task('default', ['css'])