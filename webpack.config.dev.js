var webpackMerge = require('webpack-merge');
var common = ('./webpack.config.common.js');

module.exports = webpackMerge(common, {
    output: {
        path: './web/prod/app',
        publicPath: '/',
        filename: '[name].js',
        chunkFilename: '[id].chunk.js'
    },
    devServer: {
        historyApiFallback: true,
        stats: 'minimal'
    }
});