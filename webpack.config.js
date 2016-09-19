var webpack = require('webpack');
var path = require("path");

var DEV_DIR = path.resolve(__dirname, "web/dev/");
var PROD_DIR = path.resolve(__dirname, "web/prod/");

var ANGULAR_DIR = path.resolve(DEV_DIR + '/Angular/');

var config = {
    entry: {
        'index': ANGULAR_DIR + "/main.ts"
    },
    devtools: 'source-map-loader',
    output: {
        path: PROD_DIR + "/js",
        filename: "[name].js",
        publicPath: "./web/prod"
    },
    module: {
        loaders: [
            { test: /\.ts$/, loader: 'ts' }
        ]
    },
    resolve: {
        extensions: ["", ".webpack.js", ".web.js", ".ts", ".js"]
    }
};

module.exports = config;
