define(function (require, exports, moudles) {
	var validator = require('validator');
	exports.init = function(context, options){
		$('.form-horizontal').bootstrapValidator({
			fields: {
				email: {
					validators: {
						notEmpty: {
							message: '您还没有填写邮箱'
						},
						emailAddress: {
							message: '邮箱格式不对哦'
						}
					}
				},
				password: {
					validators: {
						notEmpty: {
							message: '您还没有填写密码'
						}
					}
				}
			}
		});
	}
});