<?php
/*
	 文件上传注意:
	 	文件上传操作表单必须使用HTTP post 的方法提交哦啊
		表单上传需要使用type为“file”的表
		enctype="mutipart/form-data" 只有文件上传是form表单才使用这个值，用来指定表单编码方式，让服务器知道传递一个文件并带有常规的表单信息。

		$_POST   接收非上传数据！
		$_FILES  接受上传数据！

*/
?>
<html>
	<head>
	<title>上传文件</title>
	</head>
	<body>
		<form action="upload.php" method="post" enctype="multipart/form-data">
			发射:<input type="text" name="fa"> <br>
			接受:<input type="text" name="jie"><br>
			使用:<input type="text" name="jump"><br>
			<input type="hidden" name="MAX_FILE_SIZE" value="201231092"> 
			文件:<input type="file" name="wen"><br>
			<input type="submit" name="sub" value="发射">
			</form>

	</body>
	</html>

