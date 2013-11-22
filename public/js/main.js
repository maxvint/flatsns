require.config({
	paths: {
		jquery: 'common/jquery.1.9.0.min',
	},

	shim: {
		'bootstrap': {
			deps: ['jquery'],
			exports: 'common/bootstrap.min'
		},
		'core': {
			deps: ['jquery'],
			exports: 'public/core'
		}
	}
});

require(['jquery', 'public/core'], function($, core) {
	
});