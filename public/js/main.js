define(function(require){
	var app = require('app/views/app.js');
	console.log(app)
	var Workspace = require('app/routers/router');

	new Workspace();
	Backbone.history.start();

	new app();
});