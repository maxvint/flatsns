define(function(require, exports) {
	var core = require('core');
	require('lib/jquery.file.upload/jquery.ui.widget.js');
	require('lib/jquery.file.upload/jquery.iframe-transport.js');
	require('lib/jquery.file.upload/jquery.fileupload.js');
	if(navigator.appName=="Microsoft Internet Explorer") {
		require('lib/jquery.file.upload/jquery.xdr-transport.js');
	}


	exports.init = function(context, options){
		var uploader = $("#fileupload");
		uploader.fileupload({
			url : '/api/file/',
			dataType: 'json',
			autoUpload: true,
			acceptFileTypes:  /(\.|\/)(gif|jpe?g|png)$/i,
			maxNumberOfFiles : 1,
			fileInput : uploader.find("input:file"),
			maxFileSize: 5000000,
			previewMaxWidth : 200,
			previewMaxHeight : 200,
			add: function (e, data) {
				console.log(e);
				console.log(data);
        // data.context = $('<p/>').text('Uploading...').appendTo(document.body);
        // data.submit();

      },
      done: function (e, data) {
        data.context.text('Upload finished.');
      }
		});
	};
});