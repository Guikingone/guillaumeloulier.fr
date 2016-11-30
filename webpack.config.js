var webpack = require('webpack');
var path = require("path");

var PROD_DIR = path.resolve(__dirname, "web/prod");
var TSX_DIR = path.resolve(__dirname, "web/dev/typescript/");

var config = {
    entry: {
        'index': TSX_DIR + "/index.tsx"
    },
    output: {
        path: PROD_DIR + "/app/js",
        filename: "[name].js",
        publicPath: "./web/"
    },
    resolve: {
        extensions: ["", ".webpack.js", ".web.js", ".tsx", ".js"]
    },
    module: {
        preLoaders: [
            { test: /\.js$/, loader: "source-map-loader" }
        ],
        loaders: [
            { test: /\.tsx?$/, include: TSX_DIR, loader: "ts-loader"}
        ]
    },
    externals: {
        "react": "React",
        "react-dom": "ReactDOM"
    }
};

module.exports = config;