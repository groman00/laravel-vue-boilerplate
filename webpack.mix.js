const { mix } = require('laravel-mix');
const assetDirectory = 'resources/assets';
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

mix.webpackConfig({
    module: {
        rules: [
            {
                test: /.(vue|js)$/,
                loader: 'eslint-loader',
                options: {
                    emitWarning: true
                }
            }
        ]
    }
});

mix
    .js(`${assetDirectory}/js/app.js`, 'public/js')
    .sass(`${assetDirectory}/sass/app.scss`, 'public/css')
    .sourceMaps()
    .copyDirectory(`${assetDirectory}/images`, 'public/images');
