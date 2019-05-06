let gulp = require('gulp');
let sass = require('gulp-sass');
let concat = require('gulp-concat');
let vuefiy = require('gulp-vueify');
// let uglyfi = require('gulp-uglify');
// let cleanCSS = require('gulp-clean-assets');

let destOrigin = 'resources/assets/sass/**/*.sass';
let destOut = 'resources/assets/css';
let destOutWatch = 'resources/assets/css/*.css';


const buildCss = [
    "node_modules/owl.carousel/dist/assets/owl.carousel.css",
    "node_modules/owl.carousel/dist/assets/owl.theme.default.css",
    "node_modules/bootstrap/dist/css/bootstrap.css",
    "resources/assets/css/*.css"
]

const buildJs = [
    "node_modules/jquery/dist/jquery.js",
    "node_modules/owl.carousel/dist/owl.carousel.js",
    "node_modules/axios/dist/axios.js",
    "node_modules/jquery-mask-plugin/dist/jquery.mask.js",
    "node_modules/vue/dist/vue.js",
    "node_modules/bootstrap/dist/js/bootstrap.js",
    "resources/assets/js/main/*.js"
];


const resources = [
    "resources/assets/images/",
    "resources/assets/fonts/"
];

const buildCssAdmin = [
    "resources/assets/admin/css/*.css",
    "resources/assets/admin/css/themes/flat-blue.css",

];

const buildJsAdmin = [
    "resources/assets/admin/js/jquery.min.js",
    "resources/assets/admin/js/bootstrap.min.js",
    "resources/assets/admin/js/app.js",
    "resources/assets/admin/js/bootstrap-switch.min.js",
    "resources/assets/admin/js/jquery.dataTables.min.js",
    "resources/assets/admin/js/jquery.matchHeight-min.js",
    "resources/assets/admin/js/select2.full.min.js",
    "resources/assets/admin/js/theming.js",
    "resources/assets/admin/js/ace/*.js",
    "node_modules/jquery-mask-plugin/dist/jquery.mask.js",
    "node_modules/axios/dist/axios.js",

];


const webAssetsDir = 'public/';

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

gulp.task('workInCssAdmin',function () {
    return gulp.src(buildCssAdmin)
        .pipe(concat('admin.css'))
        .pipe(gulp.dest(webAssetsDir+'css/'))
});

gulp.task('workJsAdmin',function () {
    return gulp.src(buildJsAdmin)
        .pipe(concat('admin.js'))
        .pipe(gulp.dest(webAssetsDir+'js/'))
});

    gulp.task('copyResources', function () {
        resources.forEach(function (res) {
            gulp.src(res+'**/*')
                .pipe(gulp.dest(webAssetsDir+res.split("/")[2]))
        })
    });

    gulp.task('watch', function () {
        // Uma lista de observação em tempo real, definindo que tarefa será executando em determinados arquivos ou pastas
        gulp.watch(destOrigin,['sass']);
        gulp.watch(destOutWatch,['workInCss']);
    });

    gulp.task('default',['workJsAdmin','workInCssAdmin','sass','watch','workInCss','workJs','copyResources']);
