<script language="javascript">
	seajs.use('app/main', function(main) {
		main.load('editor');
	});
</script>

<div class="editor">
	<div id="alerts"></div>
	<div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
		<!-- <div class="btn-group">
			<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" title="Font"><i class="glyphicon glyphicon-font"></i><b class="caret"></b></a>
			<ul class="dropdown-menu">
			</ul>
		</div> -->

		<div class="btn-group">
			<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" title="字号"><i class="glyphicon glyphicon-text-height"></i>&nbsp;<b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a data-edit="fontSize 5"><font size="5">大</font></a></li>
				<li><a data-edit="fontSize 3"><font size="3">中</font></a></li>
				<li><a data-edit="fontSize 1"><font size="1">小</font></a></li>
			</ul>
		</div>

		<div class="btn-group">
			<a class="btn btn-default" data-edit="bold" title="加粗 (Ctrl/Cmd+B)"><i class="glyphicon glyphicon-bold"></i></a>
			<a class="btn btn-default" data-edit="italic" title="斜体 (Ctrl/Cmd+I)"><i class="glyphicon glyphicon-italic"></i></a>
			<!-- <a class="btn btn-default" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a> -->
			<a class="btn btn-default" data-edit="underline" title="下划线 (Ctrl/Cmd+U)"><i class="glyphicon glyphicon-magnet"></i></a>
		</div>

		<div class="btn-group">
			<a class="btn btn-default" data-edit="insertunorderedlist" title="普通列表"><i class="glyphicon glyphicon-list"></i></a>
			<a class="btn btn-default" data-edit="insertorderedlist" title="数字列表"><i class="glyphicon glyphicon-th-list"></i></a>
			<!-- <a class="btn btn-default" data-edit="indent" title="缩进 (Tab)"><i class="glyphicon glyphicon-indent-right"></i></a> -->
			<!-- <a class="btn btn-default" data-edit="outdent" title="取消缩进 (Shift+Tab)"><i class="glyphicon glyphicon-indent-left"></i></a> -->
		</div>

		<div class="btn-group">
			<a class="btn btn-default" data-edit="justifyleft" title="居左 (Ctrl/Cmd+L)"><i class="glyphicon glyphicon-align-left"></i></a>
			<a class="btn btn-default" data-edit="justifycenter" title="居中 (Ctrl/Cmd+E)"><i class="glyphicon glyphicon-align-center"></i></a>
			<a class="btn btn-default" data-edit="justifyright" title="居右 (Ctrl/Cmd+R)"><i class="glyphicon glyphicon-align-right"></i></a>
		</div>

		<div class="btn-group">
			<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" title="超链接"><i class="glyphicon glyphicon-link"></i></a>
			<div class="dropdown-menu input-append">
				<input class="" placeholder="URL" type="text" data-edit="createLink"/>
				<button class="btn" type="button">Add</button>
			</div>
			<a class="btn btn-default" data-edit="unlink" title="删除超链接"><i class="glyphicon glyphicon-remove"></i></a>
		</div>

		<div class="btn-group">
			<a class="btn btn-default" title="插入图片 (拖入图片)" id="pictureBtn"><i class="glyphicon glyphicon-picture"></i><input type="file" class="editor-image" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" /></a>
		</div>

		<div class="btn-group">
			<!-- <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="glyphicon glyphicon-repeat"></i></a> -->
			<a class="btn btn-default" data-edit="redo" title="重做 (Ctrl/Cmd+Y)"><i class="glyphicon glyphicon-repeat"></i></a>
		</div>
	</div>

	<div id="editor" class="form-control">{{ $data }}</div>
	<textarea name="content" id="content" class="hidden form-control">{{ $data }}</textarea>
</div>