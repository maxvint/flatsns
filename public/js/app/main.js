seajs.config({
	// 别名
	alias:{
		'jquery': 'lib/jquery.js',
		'bootstrap': 'lib/bootstrap.js',
		'validator': 'lib/bootstrapValidator.js',
		'core': 'app/core.js',
	}
});

define(function(require, exports, module) {
	var $ = require('jquery');
	window.$ = $;
	
	exports.context = {};
	// exports.context.siteurl = "<?php echo URL::base(); ?>";

	exports.load = function(name, options) {
		require.async('./' + name + '.js', function(page) {
			if(page && page.init) {
				page.init(exports.context, options);
			}
		});
	};

	exports.init = function(){
		// 加载小组二级菜单
		$("#nav_group").mouseover(function(){$(".subnav_group").show();}).mouseout(function(){$(".subnav_group").hide();});
		
		// ie7以下版本警示
		if(navigator.appName=="Microsoft Internet Explorer" && (navigator.appVersion.split(";")[1].replace(/[ ]/g,"")=="MSIE6.0" || navigator.appVersion.split(";")[1].replace(/[ ]/g,"")=="MSIE7.0")) {
			// require('notify')($);
			// $("body").notify({content:"你的浏览器版本较低，在本站的访问可能会受到影响！", onend:function(){}});
		}
	};
	// console.log(seajs.cache);
});