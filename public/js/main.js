require.config({
	paths: {
		'jquery': 'lib/jquery-1.10.2.min',
		'bootstrapValidator': 'lib/bootstrapValidator',
	},

	shim: {
		"bootstrap": ["jquery"],
		"bootstrapValidator": ["jquery"]
	}
});

require(['jquery', 'bootstrapValidator'], function($) {
	$(function() {

		$('form').bootstrapValidator({
		message: 'This value is not valid',
		fields: {
			title: {
				message: 'The title is not valid',
				validators: {
					notEmpty: {
						message: 'The title is required and can\'t be empty'
					},
					stringLength: {
						min: 6,
						max: 30,
						message: 'The title must be more than 6 and less than 30 characters long'
					},
					regexp: {
						regexp: /^[a-zA-Z0-9_\.]+$/,
						message: 'The title can only consist of alphabetical, number, dot and underscore'
					}
				}
			},
			email: {
				validators: {
					notEmpty: {
						message: 'The email address is required and can\'t be empty'
					},
					emailAddress: {
						message: 'The input is not a valid email address'
					}
				}
			},
			password: {
				validators: {
					notEmpty: {
						message: 'The password is required and can\'t be empty'
					}
				}
			},
			confirmPassword: {
				validators: {
					notEmpty: {
						message: 'The confirm password is required and can\'t be empty'
					},
					identical: {
						field: 'password',
						message: 'The password and its confirm are not the same'
					},
					different: {
						field: 'username',
						message: 'The password can\'t be the same as username'
					}
				}
			},
			captcha: {
				validators: {
					callback: {
						message: 'Wrong answer',
						callback: function(value, validator) {
							var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
							return value == sum;
						}
					}
				}
			}
		}
	});
	});
});