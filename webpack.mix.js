const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css')
  .styles([
    // 'resources/sass/styles/about.css',
    // 'resources/sass/styles/about_responsive.css',
    // 'resources/sass/styles/blog_responsive.css',
    // 'resources/sass/styles/blog_single_responsive.css',
    // 'resources/sass/styles/blog_single.css',
    // 'resources/sass/styles/blog.css',
    // 'resources/sass/styles/contact_responsive.css',
    // 'resources/sass/styles/contact.css',
    // 'resources/sass/styles/course_responsive.css',
    // 'resources/sass/styles/course.css',
    // 'resources/sass/styles/courses_responsive.css',
    // 'resources/sass/styles/courses.css',
    'resources/sass/styles/main_styles.css',
    'resources/sass/styles/responsive.css',
  ], 'public/css/template.css')
  .scripts([
    'resources/js/custom.js'
  ], 'public/js/custom.js' );
  // .scripts([
  //           'node_modules/datatables.net/js/jquery.dataTables.min.js',
  //           'node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js'
  //       ], 'public/js/datatable.js')
  // .styles(['node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css'], 'public/css/datatable.css')
  // .copyDirectory('node_modules/summernote/dist', 'public/assets/summernote');
