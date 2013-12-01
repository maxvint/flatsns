define(function(require, exports, moudles){
    return function(jquery){
        (function($) {
             $.fn.pri= function() {
                 alert($("a").attr("href"))
                 // 代码区域。
             };
        })(jquery);
    }
});