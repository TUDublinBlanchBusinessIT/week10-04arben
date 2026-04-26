const mix = require('laravel-mix');

mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery', 'window.$']
});

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css');