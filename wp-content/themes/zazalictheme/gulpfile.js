const gulp = require('gulp')
const sass = require('gulp-sass')
const concat = require('gulp-concat')

sass.compiler = require('node-sass')


gulp.task('scripts', async () => {
  try {
    let file = await gulp.src(['js/*.js'])
    .pipe(concat('app.js'))
    .pipe(gulp.dest('./'))
  } catch (error) {
    console.log(error)
  }
})

gulp.task('sass', async () => {
  return gulp.src(['styles/*.scss'])
  .pipe(sass().on('error', sass.logError))
  .pipe(gulp.dest('./'))
})

gulp.task('watch', async () => {
  gulp.watch('js/*.js', gulp.series('scripts'))
  gulp.watch('styles/*.scss', gulp.series('sass'))
})
gulp.task('default', gulp.parallel('scripts', 'sass'));