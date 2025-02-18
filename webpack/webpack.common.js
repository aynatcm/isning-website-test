const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');

const slugTheme = 'isning-theme';
const staticPath = `../${slugTheme}/assets`;

module.exports = {
  mode: 'production', // Activa la optimización automática
  target: 'web',
  entry: [`${staticPath}/js/index.js`, `${staticPath}/sass/index.scss`],
  output: {
    path: path.resolve(__dirname, '../assets/dist/'),
    filename: 'js/[name].min.js', // Añadir .min.js para indicar archivo comprimido
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'css/[name].min.css', // Añadir .min.css para indicar archivo comprimido
    }),
  ],
  module: {
    rules: [
      {
        test: /\.js$/,
        loader: 'babel-loader',
      },
      {
        test: /\.ts$/,
        use: 'ts-loader',
      },
      {
        test: /\.html$/i,
        loader: 'html-loader',
      },
      {
        test: /\.s[ac]ss$/i,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'sass-loader',
        ],
      },
      {
        test: /\.(png|jpg|jpeg|gif|svg|webp)$/,
        type: 'asset/resource',
        generator: {
          filename: 'images/[name][ext]',
        },
      },
    ],
  },
  resolve: {
    modules: ['node_modules'],
    extensions: ['.js', '.jsx', '.ts', '.css', '.scss'],
  },
  optimization: {
    minimize: true, // Habilita la minimización
    minimizer: [
      new TerserPlugin({ // Minimiza JavaScript
        terserOptions: {
          compress: {
            drop_console: true, // Opcional: Elimina console.log en producción
          },
        },
      }),
      new CssMinimizerPlugin(), // Minimiza CSS
    ],
  },
};
