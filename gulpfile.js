let gulp = require('gulp');
let sass = require('gulp-sass');
let concat = require('gulp-concat');
let vuefiy = require('gulp-vueify');
// let uglyfi = require('gulp-uglify');
// let cleanCSS = require('gulp-clean-assets');

let destOrigin = 'resources/assets/sass/**/*.sass';
let destOut = 'resources/assets/css';
let destOutWatch = 'resources/assets/css/*.css';


const  buildCss = [
    "node_modules/owl.carousel/dist/assets/owl.carousel.css",
    "node_modules/owl.carousel/dist/assets/owl.theme.default.css",
    "resources/assets/css/*.css"
]

const buildJs = [
    "node_modules/jquery/dist/jquery.js",
    "node_modules/owl.carousel/dist/owl.carousel.js",
    "resources/assets/js/main/*.js"
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

    gulp.task('vueify', function () {
        return gulp.src(buildJs)
            .pipe(vuefiy())
            .pipe(gulp.dest(webAssetsDir+'js/'))
    })

    gulp.task('watch', function () {
        // Uma lista de observação em tempo real, definindo que tarefa será executando em determinados arquivos ou pastas
        gulp.watch(destOrigin,['sass']);
        gulp.watch(destOutWatch,['workInCss']);
    });

    gulp.task('default',['sass','watch','workInCss','workJs', 'vueify']);
