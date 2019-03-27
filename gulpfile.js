let gulp = require('gulp');
let sass = require('gulp-sass');
let concat = require('gulp-concat');
let uglyfi = require('gulp-uglify');
let cleanCSS = require('gulp-clean-css');

let destOrigin = 'resources/sass/**/*.sass';
let destOut = 'resources/assets/template/css';
let destOutWatch = 'resources/assets/template/css/*.css';



const  buildCss = [
    "resources/assets/template/css/*.css",
]

const buildJs = [
    "node_modules/jquery/dist/jquery.js",
    "node_modules/bootstrap/dist/js/bootstrap.js",
    "resources/assets/js/payment-master/dist/payment.js"
]

const webAssetsDir = 'public/build/'

gulp.task('sass',function () {
    return gulp.src(destOrigin)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(destOut));
});

gulp.task('sass:watch', function () {
    gulp.watch(destOrigin,['sass']);
})

gulp.task('workInCss',function () {
    return gulp.src(buildCss)
        .pipe(concat('template.css'))
        .pipe(gulp.dest(webAssetsDir+'css/'))
})

gulp.task('workJs',function () {
    return gulp.src(buildJs)
        .pipe(concat('template.js'))
        .pipe(gulp.dest(webAssetsDir+'js/'))
})

gulp.task('watch', function () {
    // Uma lista de observação em tempo real, definindo que tarefa será executando em determinados arquivos ou pastas
    gulp.watch(destOrigin,['sass']);
    gulp.watch(destOutWatch,['workInCss']);
});


gulp.task('default',['sass','watch','workInCss','workJs']
);
