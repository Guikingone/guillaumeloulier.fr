var webpack = require('webpack');
var path = require("path");

var DEV_DIR = path.resolve(__dirname, "web/dev/Typescript/");
var PROD_DIR = path.resolve(__dirname, "web/prod/Typescript/");

var config = {
    entry: {
        index: DEV_DIR + "/index.tsx",
        blog: DEV_DIR + '/blog.tsx',
        portfolio: DEV_DIR + '/portfolio.tsx',
        contact: DEV_DIR + '/contact.tsx'
    },
    output: {
        path: PROD_DIR + "/app",
        filename: "[name].js",
        publicPath: "./web/"
    },
    devtool: "source-map",
    resolve: {
        extensions: ["", ".webpack.js", ".web.js", ".tsx", ".js"]
    },
    module: {
        preLoaders: [
            {
                test: /\.js$/,
                loader: "source-map-loader"
            }
        ],
        loaders: [
            { test: /\.tsx?$/, include: DEV_DIR, loader: "ts-loader"}
        ]
    },
    externals: {
        "react": "React",
        "react-dom": "ReactDOM"
    }
};

module.exports = config;
