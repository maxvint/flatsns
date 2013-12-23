define(function(require, exports, module) {
	require('bootstrap');

	var uriToObj, getArgs, ui;

	/**
	 * 获取绑定的参数
	 *
	 * @param element DOM元素
	 */
	getArgs = function(element) {
    	this.$element = $(element);
    	var args = this.$element.attr('event-args');
    	return uriToObj(args);
    };

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
	    var l;
	    var arg;
	    l = args.length;
	    while(l-- > 0) {
	        arg = args[l];
	        if(!arg) {
	            continue;
	        }
	        arg = arg.split("=");
	        obj[arg[0]] = arg[1];
	    }
	    return obj;
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

	console.log(ui);

   
	exports.getArgs = getArgs;
	exports.ui = ui;
});