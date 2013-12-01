define(function (require, exports, moudles) {
	var validator = require('validator');
	exports.init = function(context, options){
		$('.form-horizontal').bootstrapValidator({
			fields: {
				email: {
					validators: {
						notEmpty: {
							message: '邮箱不能为空'
						},
						emailAddress: {
							message: '邮箱格式错误'
						}
					}
				},
				password: {
					validators: {
						notEmpty: {
							message: '密码不能为空'
						}
					}
				}
			}
		});
	}
});