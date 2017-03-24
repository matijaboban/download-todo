var gulp = require('gulp');
var gutil = require('gulp-util');

var ERROR_LEVELS = [
    'error',
    'warning'
];

var isDev = function () {
    return argv.env === 'dev';
};


// Command line option:
// --env=[*dev*|stg|prod]
// --fatal=[warning|*error*|off]
var yargs = require('yargs');
var argv = yargs["default"]({
    env: 'dev',
    fatal: 'error'
}).argv;

gutil.log("Environment is '" + argv.env + "'; set with --env=dev|stg|prod");

var isFatal = function (level) {
    return ERROR_LEVELS.indexOf(level) <= ERROR_LEVELS.indexOf(argv.fatal || 'error');
};

var handleError = function (level, error) {
    gutil.log(error.message);

    if (isFatal(level)) {
        process.exit(1);
    }
};

var onError = function (error) {
    handleError.call(this, 'error', error);
};

var onWarning = function (error) {
    handleError.call(this, 'warning', error);
};

var swallowError = function (error) {
    console.log(error.toString());
    return this.emit('end');
};





const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

 // Fonts -> Public folder
gulp.task('fonts', function () {
    return gulp.src('node_modules/materialize-css/fonts/*/*')
        .pipe(gulp.dest('public/fonts/'));
});


// JS Libraries
gulp.task('libs', function () {
    var concat = require('gulp-concat');
    var gulpif = require('gulp-if');
    var uglify = require('gulp-uglify');
    var src = [];

    return gulp.src([].concat(isDev() ? [] : [
            // Add local testing scripts
        ])
        .concat([
            'node_modules/node_modules/materialize-css/dist/js/materialize.js',
        ]))
        .pipe(concat('libs.js'))
        .pipe(gulpif(!isDev(), uglify()))
        .pipe(gulp.dest('public/js/'));
});

// JS Scripts
gulp.task('app', function () {
    var concat = require('gulp-concat');
    var gulpif = require('gulp-if');
    var plumber = require('gulp-plumber');
    var uglify = require('gulp-uglify');

    return gulp.src([
            'resources/assets/js/app.js'
        ])
        .pipe(plumber())
        .pipe(concat('app.js'))
        .pipe(gulpif(!isDev(), uglify()))
        .pipe(gulp.dest('public/js/'));
});



// elixir(mix => {
//     mix.sass('app.scss')
//        .webpack('app.js');
// });

elixir(mix => {
    mix.sass('app.scss');
});
