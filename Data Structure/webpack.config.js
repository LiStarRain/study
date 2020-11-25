const {
  resolve
} = require("path");

const HtmlWebpackPlugin = require('html-webpack-plugin');

module.exports = {
  // 入口文件
  entry: './src/index.js',
  // 配置输出
  output: {
    filename: 'main.js',
    path: resolve(__dirname, 'dist')
  },
  // 配置加载器
  module: {
    rules: [{
        test: /\.css$/,
        use: [
          'style-loader',
          'css-loader'
        ]
      },
      {
        test: /\.js$/,
        use: [{
          loader: 'babel-loader',
          options: {
            babelrc: false,
            presets: [
              [require.resolve("@babel/preset-env"), {
                modules: false
              }]
            ],
            cacheDirectory: true
          }
        }]
      }
    ]
  },
  // 配置插件
  plugins: [
    new HtmlWebpackPlugin({
      template: './src/index.html',
      filename: 'index.html',
      inject: true
    })
  ],

  devServer: {
    contentBase: './dist',
    host: 'localhost',
    port: 3000
  }
}