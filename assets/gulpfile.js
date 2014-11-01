// Aqui nós carregamos o gulp e os plugins através da função `require` do nodejs
var gulp = require('gulp');
var jshint = require('gulp-jshint');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var less = require('gulp-less');
var minifyCss = require("gulp-minify-css");

// Definimos o diretorio dos arquivos para evitar repetição futuramente
var lessFiles = "./less/*.less";
var mainLess = "./less/main.less";

var jsFiles = "./js/*.js";

var allFiles = [lessFiles, jsFiles];

//Aqui criamos uma nova tarefa através do ´gulp.task´ e damos a ela o nome 'lint'
gulp.task('lint', function() {
    // Aqui carregamos os arquivos que a gente quer rodar as tarefas com o `gulp.src`
    // E logo depois usamos o `pipe` para rodar a tarefa `jshint`
    gulp.src(jsFiles)
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});

gulp.task('less', function () {
    gulp.src(mainLess) //path to your main less file
    .pipe(less()) 
    .pipe(rename('main.min.css'))    
    .pipe(minifyCss())
    .pipe(gulp.dest('./css')); // your output folder
});

//Criamos outra tarefa com o nome 'dist'
gulp.task('dist', function() {
    // Carregamos os arquivos novamente
    // E rodamos uma tarefa para concatenação
    // Renomeamos o arquivo que sera minificado e logo depois o minificamos com o `uglify`
    // E pra terminar usamos o `gulp.dest` para colocar os arquivos concatenados e minificados na pasta build/
    
    gulp.src(jsFiles)
    .pipe(concat('./js'))
    .pipe(rename('main.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./js/min'));
    
});

//Criamos uma tarefa 'default' que vai rodar quando rodamos `gulp` no projeto
gulp.task('default', function() {
    // Usamos o `gulp.run` para rodar as tarefas
    // E usamos o `gulp.watch` para o Gulp esperar mudanças nos arquivos para rodar novamente
    gulp.run('lint', 'less', 'dist');
    
    gulp.watch(allFiles, function(evt) {
        gulp.run('lint', 'less', 'dist');
    });

});
