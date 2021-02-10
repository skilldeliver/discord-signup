const mix = require('laravel-mix');
const MixGlob = require('laravel-mix-glob');
const mixGlob = new MixGlob({ mix });

// Copy fonts to public directory

mix.copy('resources/front/fonts/**/*.{eot,svg,ttf,woff,woff2}', 'public/front/fonts');

// Process individual page styles & scripts

mixGlob.sass('resources/front/scss/pages/*.scss', 'public/front/css', null, {
        outputDir: 'resources/front/scss/',
    })
    .js('resources/front/js/pages/*.js', 'public/front/js', null, {
        outputDir: 'resources/front/js/',
    })
    .mix('options')({
        processCssUrls: false
    });

mix.webpackConfig({
    resolve: {
        modules: [
            'node_modules'
        ],
        alias: {
            jscookie: 'js-cookie/src/js.cookie.js',
            validator: 'jquery-validation/dist/jquery.validate.min.js',
        }
    }
});

mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'],
    jscookie: ['Cookies', 'window.Cookies'],
    validator: ['validator', 'window.validator'],
});

mix.extract(['jquery', 'js-cookie', 'jquery-validation']);

mix.version();
