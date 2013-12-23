define(function(require, exports) {
	var core = require('core');
	require('validator');
	exports.init = function(context, options){

		$('#aaa').click(function() {
			var args = getArgs(this);
		}).mouseover(function() {
			var args = getArgs(this);
		});

		$('.add').bootstrapValidator({
			fields: {
				title: {
					validators: {
						notEmpty: {
							message: '您还没有填写标题'
						}
					}
				},
				content: {
					validators: {
						notEmpty: {
							message: '您还没有填写内容'
						}
					}
				}
			}
		});

		// post
		$('#topic_post').click(function() {

		});

		// top
		$('#topic_top').click(function() {
			var args = core.getArgs(this);
			core.ui.success();
		});

		// delete
		$('#topic_delete').click(function() {
			var args = core.getArgs(this);
			core.ui.confirm(this, 'confirm');
		});
	}
});