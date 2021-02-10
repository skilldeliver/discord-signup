const mix = require('laravel-mix');
const MixGlob = require('laravel-mix-glob');
const mixGlob = new MixGlob({ mix });

require('laravel-mix-merge-manifest');

// Copy fonts to public directory

mix.copy('resources/back/fonts/**/*.{eot,svg,ttf,woff,woff2}', 'public/back/fonts');

// Process individual page styles & scripts

mixGlob.sass('resources/back/scss/pages/*.scss', 'public/back/css', null, {
        outputDir: 'resources/back/scss/',
    })
    .js('resources/back/js/pages/*.js', 'public/back/js', null, {
        outputDir: 'resources/back/js/',
    })
    .mix('options')({
        processCssUrls: false
    });

// mix.webpackConfig({
//     resolve: {
//         modules: [
//             'node_modules'
//         ],
//         alias: {
//             jscookie: 'js-cookie/src/js.cookie.js',
//         }
//     }
// });

mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery']
});

mix.extract(['jquery']);

mix.mergeManifest();
