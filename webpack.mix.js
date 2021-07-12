const mix = require('laravel-mix');
require('laravel-mix-jigsaw');
require('laravel-mix-purgecss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .js('source/_assets/js/module.js', 'js')
    .js('source/_assets/js/quiz.js', 'js')
    .js('source/_assets/js/codebox.js', 'js')
    .js('source/_assets/js/mathjax.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css')
    .sass('source/_assets/sass/index.scss', 'css')
    .sass('source/_assets/sass/module.scss', 'css')
    .sass('source/_assets/sass/codebox.scss', 'css')
    .options({
        processCssUrls: false,
        terser: {
            extractComments: false
        }
    })
    .purgeCss({
        extend: {
            content: [
                'source/**/*.js',
                'source/**/*.blade.php'
            ],
            safelist: [/os/]
        }
    })
    .version();
