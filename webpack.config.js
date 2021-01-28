module.exports = {
    module: {
      rules: [
        {
          test: /\.css$/i,
          use: [
            
            "style-loader",
            
            "css-loader"
          
            
          ],
        },
        {
          test: /\.(eot|woff|woff2|svg|ttf)([\?]?.*)$/,
          use: ['url-loader']
        }],
    },
  };
