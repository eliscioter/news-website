let mix = require('laravel-mix');

mix.js('src/app.js', 'dist').setPublicPath('dist');

mix.browserSync('127.0.0.1:8000');
