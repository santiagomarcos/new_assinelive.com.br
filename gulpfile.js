let gulp = require('gulp');
let sass = require('gulp-sass');
let concat = require('gulp-concat');
// let uglyfi = require('gulp-uglify');
// let cleanCSS = require('gulp-clean-assets');

let destOrigin = 'resources/assets/sass/**/*.sass';
let destOut = 'resources/assets/css';
let destOutWatch = 'resources/assets/css/*.css';


const  buildCss = [
    "resources/assets/css/*.css"
]

const buildJs = [
    "resources/assests/js/*.js"
]

const webAssetsDir = 'public/'

    gulp.task('sass',function () {
        return gulp.src(destOrigin)
            .pipe(sass().on('error', sass.logError))
            .pipe(gulp.dest(destOut));
    });

    gulp.task('sass:watch', function () {
        gulp.watch(destOrigin,['sass']);
    });

    gulp.task('workInCss',function () {
        return gulp.src(buildCss)
            .pipe(concat('app.css'))
            .pipe(gulp.dest(webAssetsDir+'css/'))
    });

    gulp.task('workJs',function () {
        return gulp.src(buildJs)
            .pipe(concat('app.js'))
            .pipe(gulp.dest(webAssetsDir+'js/'))
    });

    gulp.task('watch', function () {
        // Uma lista de observação em tempo real, definindo que tarefa será executando em determinados arquivos ou pastas
        gulp.watch(destOrigin,['sass']);
        gulp.watch(destOutWatch,['workInCss']);
    });

    gulp.task('default',['sass','watch','workInCss','workJs']);
