const path = require('path');
const webpack = require('webpack');
const { VueLoaderPlugin } = require('vue-loader');
const dotenv = require('dotenv').config( {
    path: path.join(__dirname, '.env')
} );

module.exports = {
    mode: "development",
    entry: path.resolve(__dirname,"./src/master.js"),
    resolve: {
        extensions: [".js",".vue",".css",".less",".svg",".png"],
        alias:{
            '@' : path.resolve(__dirname, './src'),
        }
    },
    module: {
        rules: [
            // ... other rules
            {
                test: /\.vue$/,
                loader: 'vue-loader'
            },
            // this will apply to both plain `.js` files
            // AND `<script>` blocks in `.vue` files
            {
                test: /\.js$/,
                loader: 'babel-loader'
            },
            // this will apply to both plain `.css` files
            // AND `<style>` blocks in `.vue` files
            {
                test: /\.css$/,
                use: [
                    'vue-style-loader',
                    'css-loader'
                ]
            },
            {
                test: /\.(png|jpe?g|gif)$/i,
                use: [
                    {
                        loader: 'file-loader',
                    },
                ],
            },
        ]
    },
    plugins: [
        // make sure to include the plugin!
        new VueLoaderPlugin(),
        new webpack.DefinePlugin( {
            "process.env": dotenv.parsed
        } ),
    ],
    output:{
        chunkFilename: '[id].[hash].js',
        crossOriginLoading: "anonymous",
        filename: 'chat-bundle.js',
        path: path.resolve(__dirname, '../../../public/frontend/applications/chat/bundle_development'),
    },
};
