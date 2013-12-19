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

		// add_reply
		$('#add_reply').click(function() {
			var args = core.getArgs(this);
			var content = $('#reply_content').val();
			$.post(SITE_URL + '/topic/add_reply', {tid: args.tid, uid: UID, content: content}, function(res) {
				console.log(res);
				if(res.status == 'success') {
					// 清空当前发布框
					$('#reply_content').val('');
					var html = '<div class="list">' +
								'<div class="author">' +
									'<div class="avatar"><a href=""><img src="" class="img-circle" width="50" height="50" alt=""></a></div>' +
									'<div class="userinfo"><a href="">'+ res.data.uid +'</a><span class="time">'+ res.data.addtime +'</span></div></div>' +
								'<div class="content">'+ res.data.content +'</div>' +
							'</div>';
					$('.reply').append(html);
				}
			}, 'json');
		});
	}
});


							