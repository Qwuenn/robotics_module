const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css')
    .sass('source/_assets/sass/index.scss', 'css')
    .sass('source/_assets/sass/module.scss', 'css')
    .options({
        processCssUrls: false,
    })
    .version();
