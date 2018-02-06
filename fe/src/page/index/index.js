import "../../common/js/common.js"
import "./index.css"
import "./index.html"

import IScroll from "iscroll/build/iscroll.js"

$(document).ready(function() {
    // 左侧边栏滚动
    new IScroll('#left-sidebar', {
        mouseWheel: true,
        scrollbars: true,
        fadeScrollbars: true,
    });


})