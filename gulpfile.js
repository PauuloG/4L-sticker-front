var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var watch = require('gulp-watch');
var newer = require('gulp-newer');
var imagemin = require('gulp-imagemin');

gulp.task('default', function(){
    gulp.watch('assets/js/libs/*.js', ['js_libs']);
    gulp.watch('assets/js/app/*.js', ['js_app']);
    gulp.watch('assets/sass/**/*.scss', ['sass']);
});

gulp.task('js_libs', function(){
    return gulp.src('assets/js/libs/*.js')
        .pipe(concat('vendors.js'))
        .pipe(gulp.dest('assets/js/dist'))
});

gulp.task('js_app', function(){
    return gulp.src('assets/js/app/*.js')
        .pipe(concat('app.js'))
        .pipe(gulp.dest('assets/js/dist'))
});

// Compile Sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src('assets/sass/**/*.scss')
        .pipe(sass({outputStyle: 'nested'}).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions']
        }))
        .pipe(gulp.dest('assets/css/'))
});

//*************//
// PROD TASKS //
//***********//
gulp.task('prod', ['img_prod','css_prod','js_libs_prod','js_app_prod','sass_prod','bower_prod','paypal_prod','views_prod','index_prod'], function(){});

gulp.task('img_prod',function(){
    return gulp.src('assets/img/**/*')
        .pipe(newer('prod/assets/img/'))
        .pipe(imagemin())
        .pipe(gulp.dest('prod/assets/img/'))
});

gulp.task('css_prod', function(){
    return gulp.src('assets/css/normalize.css')
        .pipe(gulp.dest('prod/assets/css/'))
});

gulp.task('sass_prod',function(){
    return gulp.src('assets/sass/**/*.scss')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions']
        }))
        .pipe(gulp.dest('prod/assets/css/'))
});

gulp.task('js_libs_prod', function(){
    return gulp.src('assets/js/libs/*.js')
        .pipe(concat('vendors.js'))
        .pipe(uglify())
        .pipe(gulp.dest('prod/assets/js/dist'))
});

gulp.task('js_app_prod', function(){
    return gulp.src('assets/js/app/*.js')
        .pipe(concat('app.js'))
        .pipe(gulp.dest('prod/assets/js/dist'))
});

gulp.task('bower_prod',function(){
    return gulp.src('bower_components/**/*')
        .pipe(gulp.dest('prod/bower_components/'))
});

gulp.task('paypal_prod',function(){
    return gulp.src('paypal/**/*')
        .pipe(gulp.dest('prod/paypal/'))
});

gulp.task('views_prod',function(){
    return gulp.src('views/**/*')
        .pipe(gulp.dest('prod/views/'))
});

gulp.task('index_prod',function(){
    return gulp.src(['index.html','.htaccess'])
        .pipe(gulp.dest('prod/'))
});
