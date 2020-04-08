module.exports = function () {
    return {
        module: {
            rules: [{
                test: /\.vue$/,
                loader: 'vue-loader'
            }]
        }
    }
};
