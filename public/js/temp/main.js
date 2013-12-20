seajs.config({
	// 别名
	alias:{
		'jquery': 'lib/jquery.js',
		'backbone': 'lib/backbone.js',
		'underscore': 'lib/underscore.js',
		'bootstrap': 'lib/bootstrap.js',
		'validator': 'lib/bootstrapValidator.js',
		'core': 'app/core.js',
	}
});

define(function(require){
    var app = require('js/app.js'),
        Workspace = require('js/routers/router');

    new Workspace();
    Backbone.history.start();

    new app();
});