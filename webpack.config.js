const path = require('path')

const config =  {
    entry: './src/js/index.js',
    output: {
        path: path.join(__dirname, 'dist/js'),
        filename: '[name].js'
    }
}


module.exports = config