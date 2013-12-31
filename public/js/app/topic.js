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
		
		$('#add_reply').click(function() {
			var args = core.getArgs(this);
			var content = $('#reply_content').val();
			$.post(SITE_URL + '/reply/create', {pid: args.pid, uid: args.uid, content: content}, function(res) {
				if(res.status == 'success') {
					// 清空当前发布框
					$('#reply_content').val('');
					var html = '<div class="list">' +
								'<div class="author">' +
									'<div class="avatar"><a href=""><img src="'+ res.user.avatar +'" class="img-circle" width="40" height="40" alt=""></a></div>' +
									'<div class="userinfo"><a href="">'+ res.user.username +'</a><span class="time">'+ res.create +'</span></div></div>' +
								'<div class="reply">'+ res.content +'</div>' +
								'<div class="action"><a href="">回复</a><a href=""></a></div>' +
							'</div>';
					$('.replies').append(html);
					// 统计更新
					var count = parseInt($('.replies .count').html());
					count++;
					$('.replies .count').html(count);
				}
			}, 'json');
		});
	}
});


							