let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/pre/dashboard.js');
//dashboard
mix.scripts([
  'public/pre/dashboard.js',
  'resources/assets/adminlte/js/adminlte.js',
  'resources/assets/adminlte/js/page/dashboard2.js',
], 'public/js/dashboard/dashboard.js');

mix.sass('resources/assets/sass/app.scss', 'public/pre/app.css');

mix.styles([
  'public/pre/app.css',
  'resources/assets/adminlte/css/AdminLTE.css',
  'resources/assets/adminlte/css/skins/_all-skins.min.css',
], 'public/css/dashboard/dashboard.css');


//frontend
mix.styles([
  'public/pre/app.css',
  'resources/assets/css/custom/cover.css',
  'resources/assets/css/custom/custom.css',
], 'public/css/frontend/frontend.css');

if (mix.inProduction()) {
    mix.version();
}




