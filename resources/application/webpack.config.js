const path = require('path');
const webpack = require('webpack');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const merge = require('webpack-merge');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const TerserPlugin = require("terser-webpack-plugin");

// Modules settings
const DevServer = require('./webpack/devserver');
const Babel = require('./webpack/babel');
const Pug = require('./webpack/pug');
const Sass = require('./webpack/sass');
const Css = require('./webpack/css');
const CssExtract = require('./webpack/css.extract');
const FileLoader = require('./webpack/fileloader');

const PATH = {
    src: path.resolve(__dirname, 'app'),
    build: path.resolve(__dirname, '../../public')
};

const common = {

    entry: {
        'index': PATH.src + '/pages/index/index.js',
        'contacts': PATH.src + '/pages/contacts/contacts.js',
    },

    output: {
        path: PATH.build,
        filename: 'js/[name].bundle.js'
    },
    resolve: {
        alias: {
            'vue$': 'vue/dist/vue.esm.js' // 'vue/dist/vue.common.js' for webpack 1
        }
    },
    plugins: [

        new HtmlWebpackPlugin({
            filename: 'index.html',
            chunks: ['index', 'common'],
            template: PATH.src + '/pages/index/index.pug'
        }),
        new HtmlWebpackPlugin({
            filename: 'contacts.html',
            chunks: ['contacts', 'common'],
            template: PATH.src + '/pages/contacts/contacts.pug'
        }),
        new webpack.ProvidePlugin({
            $: 'jquery',
        }),
        new CleanWebpackPlugin(PATH.build)
    ],

    optimization: {
        minimizer: [
            new TerserPlugin(),
            new OptimizeCSSAssetsPlugin({})
        ],
        splitChunks: {
            name: 'common',
            chunks: "all",
            minSize: 1,
            minChunks: 2
        }
    }
};


module.exports = function (env) {

    if (env === 'production') {
        return merge([
            common,
            {mode: 'production'},
            Pug(),
            Babel(),
            CssExtract(),
            FileLoader(env)
        ]);
    }

    if (env === 'development') {
        return merge([
            common,
            {mode: 'development'},
            Pug(),
            Babel(),
            Sass(),
            Css(),
            FileLoader(env),
            DevServer(PATH.build)
        ]);
    }
};
