'use strict'; // eslint-disable-line

// const { default: ImageminPlugin } = require('imagemin-webpack-plugin');
// const imageminMozjpeg = require('imagemin-mozjpeg');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const glob = require('glob-all');
const whitelister = require('purgecss-whitelister');
const PurgecssPlugin = require('purgecss-webpack-plugin');
const HtmlCriticalWebpackPlugin = require('html-critical-webpack-plugin');
const config = require('./config');

module.exports = {
  plugins: [
    // new ImageminPlugin({
    //   optipng: { optimizationLevel: 2 },
    //   gifsicle: { optimizationLevel: 3 },
    //   pngquant: { quality: '65-90', speed: 4 },
    //   svgo: {
    //     plugins: [
    //       { removeUnknownsAndDefaults: false },
    //       { cleanupIDs: false },
    //       { removeViewBox: false },
    //     ],
    //   },
    //   plugins: [imageminMozjpeg({ quality: 75 })],
    //   disable: (config.enabled.watcher),
    // }),

    // Critical Inline
    // new HtmlCriticalWebpackPlugin({
    //   base: config.paths.dist,
    //   src: config.devUrl,
    //   dest: 'styles/critical-inline.css',
    //   inline: false,
    //   minify: true,
    //   extract: false,
    //   width: 375,
    //   height: 565,
    //   penthouse: {
    //     blockJSRequests: false,
    //   },
    // }),

    // Minify JS
    new UglifyJsPlugin({
      uglifyOptions: {
        ecma: 5,
        compress: {
          warnings: true,
          drop_console: true
        }
      }
    }),
    // Clear css code don't use
    new PurgecssPlugin({
      paths: glob.sync([
        'app/**/*.php',
        'resources/views/**/*.php',
        'resources/assets/scripts/**/*.js'
      ]),
      whitelist: [
        ...whitelister([
          'node_modules/slick-carousel/slick/*.scss'
        ])
      ]
    })
  ]
};
