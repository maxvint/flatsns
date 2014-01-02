define(function(require, exports) {
	var core = require('core');
	require('upload');
	exports.init = function(context, options){
		$('#fileupload').ajaxfileupload({
      'action': '/upload.php',
      'onComplete': function(response) {
        console.log('custom handler for file:');
        console.log(JSON.stringify(response))
      },
      'onStart': function() {

      },
      'onCancel': function() {
        console.log('no file selected');
      }
    });
	};
});