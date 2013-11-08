/**
 * FlatSNS核心Js对象
 * @author yuwenhui <yuwenhui1986@gmail.com>
 * @version FS3.0
 */


/**
 * 模拟TP的U函数，需要预先定义JS全局变量SITE_URL和APPNAME
 * @param string url 链接地址
 * @param array params 链接参数
 * @return string 组装后的链接地址
 */
var U = function(url, params) {
	var website = SITE_URL+'/index.php';
	url = url.split('/');
	if(url[0]=='' || url[0]=='@'){
		url[0] = APPNAME;
	}
	if (!url[1]){
		url[1] = 'Index';
	}
	if (!url[2]){
		url[2] = 'index';
	}
	website = website+'?app='+url[0]+'&mod='+url[1]+'&act='+url[2];
	if(params) {
		params = params.join('&');
		website = website + '&' + params;
	}
	return website;
};

// 弹窗组件
var ui = {
	/**
	 * 浮屏显示消息，提示信息框
	 * @param string message 信息内容
	 * @param integer error 是否是错误样式，1表示错误样式、0表示成功样式
	 * @param integer lazytime 提示时间
	 * @return void
	 */
	showMessage: function(title, message, error, lazytime) {
		// 判断弹窗是否存在
		document.getElementById('uiBox') !== null && $('#uiBox').remove();
		var style = (error == "1") ? "html_clew_box clew_error" : "html_clew_box";
		var ico = (error == "1") ? 'ico-error' : 'ico-success';
		if(title == '') {
			title = '提示信息';
		}
		var html = '<div class="modal hide fade" id="uiBox">\
					<div class="modal-header">\
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>\
					<h4 id="myModalLabel">'+ title +'</h4>\
					</div>\
					<div class="modal-body">\
					<p><i class="'+ ico +'"></i>'+ message +'</p>\
					</div>\
					<div class="modal-footer">\
					<span class="timer">'+ lazytime + ' 秒后自动关闭</span>\
					<button class="btn" data-dismiss="modal" aria-hidden="true">立即关闭</button>\
					</div></div>';

		// 先清除历史加载的modal
		$('#uiBox, #uiConfirm, #uiLoad').remove();

		$(html).appendTo(document.body);
		$('#uiBox').modal();

		setTimeout(function() {
			$('#uiBox').modal('hide');
		}, lazytime*1000);

		setInterval(function() {
			if(lazytime > 0) {
				msg = lazytime-1+ ' 秒后自动关闭';
				$('.timer').html(msg);
				--lazytime;
			}
		}, 1000);

		$('#uiBox').on('hide', function() {
			lazytime = 0;
		});
	},

	/**
	 *  操作成功显示API
	 * @param string message 信息内容
	 * @param integer time 展示时间
	 * @return void
	 */
	success: function(message, time) {
		var t = "undefined" == typeof(time) ? 2 : time;
		ui.showMessage('', message, 0, t);
	},

	/**
	 * 操作出错显示API
	 * @param string message 信息内容
	 * @param integer time 展示时间
	 * @return void
	 */
	error: function(message, time) {
		var t = "undefined" == typeof(time) ? 2 : time;
		ui.showMessage('', message, 1, t);
	},

	/**
	 * 确认弹框显示API - 浮窗型
	 * @example
	 * 可以加入callback，回调函数
	 * @param object obj 定位对象
	 * @param string text 提示语言
	 * @param string|function callback 回调函数名称
	 * @return void
	 */
	confirm: function(obj, text, callback) {
		var callback = "undefined" == typeof(callback) ? $(obj).attr('callback') : callback;
		var html = '<div class="modal hide fade" id="uiConfirm">\
					<div class="modal-header">\
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>\
					<h4 id="myModalLabel">提示信息</h4>\
					</div>\
					<div class="modal-body">\
					<p><i class="ico-confirm"></i>'+ text +'</p>\
					</div>\
					<div class="modal-footer">\
					<a href="javascript:void(0);" class="btn btn-primary btn-ok" data-dismiss="modal" aria-hidden="true">确定</a>\
					<a href="javascript:void(0);" class="btn btn-cancel" data-dismiss="modal" aria-hidden="true">取消</a>\
					</div></div>';

		// 先清除历史加载的modal
		$('#uiBox, #uiConfirm, #uiLoad').remove();

		$(html).appendTo(document.body);
		$('#uiConfirm').modal();

		$("#uiConfirm .btn-cancel").one('click',function() {
			$('#uiConfirm').modal('hide');
			return false;
		});
		$("#uiConfirm .btn-ok").one('click',function() {
			$('#uiConfirm').modal('hide');
			if('undefined' == typeof(callback)) {
				return true;
			} else {
				if('function' == typeof(callback)) {
					callback();
				} else {
					eval(callback);
				}
			}
		});
		$('body').bind('keyup', function(event) {
			$("#uiConfirm .btn-ok").click();
		});
		return false;
	},

	/**
	 * 载入弹窗API
	 * @param string requestUrl 请求地址
	 * @param string title 弹窗标题
	 * @param string callback 窗口关闭后的回调事件
	 * @param object requestData requestData
	 * @param string type Ajax请求协议，默认为GET
	 * @return void
	 */
	box: {
		load: function(requestUrl, title, callback, requestData, type) {
			var html = '<div class="modal hide fade" id="uiLoad">\
					<div class="modal-header">\
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>\
					<h4 id="myModalLabel">'+ title +'</h4>\
					</div>\
					<div class="modal-body"></div>\
					<div class="modal-footer">\
					<button class="btn btn-primary btn-ok">提交</button>\
					<button class="btn btn-cancel" data-dismiss="modal" aria-hidden="true">取消</button>\
					</div></div>';
			// 先清除历史加载的modal
			$('#uiBox, #uiConfirm, #uiLoad').remove();

			$(html).appendTo(document.body);
			$('#uiLoad').modal();
			$('#uiLoad').find('.modal-body').load(requestUrl);
			$("#uiLoad .btn-cancel").one('click',function() {
				$('#uiLoad').modal('hide');
				return false;
			});
			$("#uiLoad .btn-ok").one('click',function() {
				$('#uiLoad .modal-body').find('form').submit();
			});
		}

	}
}