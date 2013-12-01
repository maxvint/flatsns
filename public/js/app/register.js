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
						},
	                    stringLength: {
	                        min: 6,
	                        max: 30,
	                        message: '密码长度为6到30个字符'
	                    },
	                    identical: {
	                        field: 'repassword',
	                        message: '两次密码不一致'
	                    }
					}
				},
				repassword: {
					validators: {
						notEmpty: {
							message: '验证密码不能为空'
						},
						stringLength: {
							min: 6,
							max: 30,
							message: '密码长度为6到30个字符'
						},
	                    identical: {
	                        field: 'password',
	                        message: '两次密码输入不一致'
	                    }
					}
				}
			}
		});
	}
})