seajs.config({
	plugins: ['shim'],
	alias: {
		'jquery': {
			src: 'lib/jquery/jquery.js',
			exports: 'jQuery'
		},

		'underscore': {
			src: 'lib/underscore/underscore.js',
			exports: '_'
		},

		'backbone': {
			src: 'lib/backbone/backbone.js',
			deps: ['underscore', 'jquery'],
			exports: 'Backbone'
		}
	}
})