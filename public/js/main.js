require.config({
	paths: {
		jquery: 'lib/jquery.1.9.0.min',
	},

	shim: {
		'bootstrap': {
			deps: ['jquery'],
			exports: 'lib/bootstrap'
		},
		'core': {
			deps: ['jquery'],
			exports: 'app/core'
		}
	}
});

require(['jquery', 'app/core'], function($, core) {
	
});