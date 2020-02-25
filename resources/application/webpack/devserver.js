module.exports = function (path) {
    return {
        devServer: {
            contentBase: path,
            port: 9005,
            compress: true
        }
    }
};
