const path = require('path');
const webpack = require('webpack');
const HtmlWebpackPlugin = require('html-webpack-plugin');

module.exports = {
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: '[name].[contenthash].js',
    publicPath: '/',
    clean: true,
  },
  resolve: {
    extensions: ['.tsx', '.ts', '.js', '.jsx', 'css'],
    modules: [path.resolve(__dirname, 'public/assets/img'), 'node_modules'],
    alias: {
      Img: path.resolve(__dirname, 'public/assets/img'),
    },
  },
  mode: 'development',
  devtool: 'source-map',
  module: {
    rules: [
      {
        test: /\.(pdf)$/i,
        use: [
          {
            loader: 'file-loader',
          },
        ],
      },
      {
        test: /\.tsx?$/,
        use: 'ts-loader',
        exclude: /node_modules/,
      },
      {
        test: /\.(js|jsx|ts)$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
        },
      },
      {
        test: /\.css|.s[ac]ss$/,
        use: ['style-loader', 'css-loader', 'sass-loader'],
      },
      {
        test: /\.html$/,
        use: {
          loader: 'html-loader',
        },
      },
      {
        type: 'asset',
        test: /\.(png|jpg|jpeg|svg|gif)$/i,
      },
    ],
  },
  plugins: [
    new HtmlWebpackPlugin({
      template: './public/index.html',
      filename: './index.html',
      favicon: './public/favicon.ico',
    }),
    new webpack.DefinePlugin({
      process: {
        NODE_ENV: JSON.stringify('development'),
        env: {
          BASE_URL: JSON.stringify('http://127.0.0.1:8000/api'),
          MAPS_API_KEY: JSON.stringify(
            'AIzaSyCA-RewmYII9N3Id0koJ6IjvMImZ3AZFvE'
          ),
        },
      },
    }),
  ],
};
