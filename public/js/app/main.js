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
  	exports.load = function(name, options) {
		require.async('./' + name + '.js', function(page) {
			if(page && page.init) {
				page.init(exports.context, options);
			}
		});
	};

	console.log(seajs.cache);
});