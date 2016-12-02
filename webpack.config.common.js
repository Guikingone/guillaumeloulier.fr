var webpack = require('webpack');
var HtmlWebpackPlugin = require('html-webpack-plugin');

module.exports = {
    entry: {
        'app': './web/dev/main.ts'
    },
    resolve: {
        extensions: ['.js', '.ts']
    },
    module: {
        loaders: [
            {
                test: /\.ts$/,
                loaders: [
                    'awesome-typescript-loader',
                    'angular2-template-loader',
                    'angular2-router-loader'
                ]
            },
            { test: /\.html$/, loader: 'html-loader'},
            { test: /\.css$/, loader: 'raw-loader'}
        ]
    },
    plugins: [
        new HtmlWebpackPlugin({
            template: './app/Resources/views/Home/index.html.twig'
        }),
        new webpack.ContextReplacementPlugin(
            /angular(\\|\/)core(\\|\/)(esm(\\|\/)src|src)(\\|\/)linker/,
            './web/dev'
        )
    ]
};
