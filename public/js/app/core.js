define(function(require, exports, module) {

	var uriToObj, getArgs, ui;

	/**
	 * 将uri转换为对象格式
	 *
	 * @param uri URI 格式的数据
	 */
	uriToObj = function(uri) {
		if(!uri) {
			return {};
		}
		var obj = {};
		var args = uri.split("&");
		var len;
		var arg;
		len = args.length;
		while(len-- > 0) {
			arg = args[len];
			if(!arg) {
				continue;
			}
			arg = arg.split("=");
			obj[arg[0]] = arg[1];
		}
		return obj;
	};

	/**
	 * 获取绑定的参数
	 *
	 * @param ele DOM元素
	 */
	getArgs = function(ele) {
		this.$ele = $(ele);
		var args = this.$ele.attr('event-args');
		return uriToObj(args);
	};

	ui = {};

	ui.confirm = function(obj, options) {
		$(obj).popover({
			title: '确认信息',
			content: 'fjsdlfjld',
			placement: 'top',
			trigger: 'click',
		});
		$(obj).popover('show');
	}

	ui.success = function(options) {

	};

	ui.error = function(options) {

	};

	ui.load = function(options) {

	};

	ui.show = function() {

	};


	exports.getArgs = getArgs;
	exports.ui = ui;
});