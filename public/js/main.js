require.config({
	paths: {
		jquery: 'jquery.1.9.0.min',
		bootstrap: 'bootstrap.min',
		core: 'core',
	}
});

require(['jquery', 'bootstrap', 'core'], function($) {
	// alert($().jquery);
});