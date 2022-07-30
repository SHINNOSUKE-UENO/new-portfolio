const {src, dest, watch} = require("gulp");
const imagemin = require("gulp-imagemin");

const imageMinify = () => {
    return src("image/ori/*")
        .pipe(imagemin())
        .pipe(dest("image/min"));
}

exports.imageMinify = imageMinify;