// npm init -y
// npm i gulp sass node-sass gulp-sass gulp-concat gulp-multi-dest gulp-clean-css --save-dev

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const multiDest = require('gulp-multi-dest');
const cleanCSS = require('gulp-clean-css');

const paths = {

  styles: {

    src: './master/src/scss/**/*.scss',

    dest: [
      './master/dist',
      './emergency',
      './implants',
      './invisalign',
      './new-patients',
      './whitening',
      './hygienist',
      './composite-bonding',
      './cosmetic-dentistry',
      './veneers',
    ]

  },

  scripts: {

    src: './master/dist/js/*.js',

    dest: [
      './emergency/js',
      './implants/js',
      './invisalign/js',
      './new-patients/js',
      './whitening/js',
      './hygienist/js',
      './composite-bonding/js',
      './cosmetic-dentistry/js',
      './veneers/js',
    ]

  },

  inc: {

    src: [
      './master/dist/inc/aside.php',
      './master/dist/inc/benefits.php',
      './master/dist/inc/emergency.php',
      './master/dist/inc/faq.php',
      './master/dist/inc/fees.php',
      './master/dist/inc/finance.php',
      './master/dist/inc/footer.php',
      './master/dist/inc/header.php',
      './master/dist/inc/hero.php',
      './master/dist/inc/icons.php',
      './master/dist/inc/location.php',
      './master/dist/inc/offer.php',
      './master/dist/inc/profile.php',
      './master/dist/inc/results.php',
      './master/dist/inc/reviews.php',
      './master/dist/inc/steps.php',
      './master/dist/inc/treatments.php',
      './master/dist/inc/why.php',
      './master/dist/inc/questions.php',
      './master/dist/inc/cta.php',
    ],

    dest: [
      './emergency/inc',
      './implants/inc',
      './invisalign/inc',
      './new-patients/inc',
      './whitening/inc',
      './hygienist/inc',
      './composite-bonding/inc',
      './cosmetic-dentistry/inc',
      './veneers/inc',
    ]

  },

};


function css() {
  return gulp
  .src(paths.styles.src)
  .pipe(sass({ outputStyle: 'expanded' }).on('error', sass.logError))
  .pipe(cleanCSS({format: 'beautify'}))
  .pipe(concat('style.css'))
  // .pipe(gulp.dest(paths.styles.dest))
  .pipe(multiDest(paths.styles.dest))
}

exports.css = css;


function js() {
  return gulp
  .src(paths.scripts.src)
  // .pipe(concat('script.js'))
  // .pipe(uglify())
  // .pipe(gulp.dest(paths.scripts.dest))
  .pipe(multiDest(paths.scripts.dest))
}

exports.js = js;


function php() {
  return gulp
  .src(paths.inc.src)
  // .pipe(concat('script.js'))
  // .pipe(uglify())
  // .pipe(gulp.dest(paths.scripts.dest))
  .pipe(multiDest(paths.inc.dest))
}

exports.php = php;


function watch() {
  gulp.watch(paths.styles.src, css);
  gulp.watch(paths.scripts.src, js);
  gulp.watch(paths.inc.src, php);
}

exports.watch = watch;