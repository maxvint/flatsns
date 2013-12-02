define(function(require, exports, moudles) {
	require('bootstrap');
	

	exports.init = function(context, options){
		
		$('#aaa').tooltip('show');
		/*
		$('#topiclist .topic-item').click(function() {
			
			$('#topiclist .topic .topic-reply').slideUp(function() {
				// $(this).prev().removeAttr("style");
				// $(this).prev().unbind();
				// $(this).prev().click(quickReply);
				$(this).remove();
			});
			$(this).removeClass('hover');
			$(this).attr('style', 'background-color: #FFF');

			var arg = $(this).attr('arg');


			var reply = '<div id="reply_'+ arg +'" class="topic-reply col-lg-12"><form action="" class="form-horizontal"><div class="form-group"><div class="col-lg-8"><textarea name="" id="" class="form-control" rows="2" placeholder="请您输入评论内容"></textarea></div></div></form></div>';


			$(this).unbind();
			$(this).after(reply);

			$(this).next().slideToggle(function() {
					// $(this).next().slideUp(function(){
						// $(this).prev().unbind();
						// $(this).prev().click(quickReply);
						// $(this).remove();
					// });
			});

			// $(this).parents('.topic').find('.topic-reply').slideToggle('fast');
			// console.log($(this).parents('.topic').find('.topic-reply'));
		});
		*/
	}
});