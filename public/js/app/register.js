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
						},
						stringLength: {
							min: 6,
							max: 30,
							message: '密码长度为6到30个字符'
						},
						identical: {
							field: 'repassword',
							message: '两次密码不一致哦'
						}
					}
				},
				repassword: {
					validators: {
						notEmpty: {
							message: '您还没有输入验证密码'
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