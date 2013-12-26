define(function(require, exports, module) {
	require('validator');
	var core = require('core');
	exports.init = function(context, options){

		$('#aaa').click(function() {
			var args = core.getArgs(this);
		}).mouseover(function() {
			console.log(this)
			var args = core.getArgs(this);
			console.log(args)
		});

		$('.create').bootstrapValidator({
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

		});

		// delete
		$('#topic_delete').click(function() {

		});
	}
});