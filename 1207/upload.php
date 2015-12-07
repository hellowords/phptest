<?php
/*
	 接收文件的步骤:
	 	1.	使用$_FILES[name]["error"] 检查错误
						switch($_FILES[name]['erroe']){
							case 1:
								echo "上传文件超过php.ini中的最大值";
								break;
							case 2:
								echo "上传文件超过表单中的值";
								break;
							case 3;
								break;
						}
		2.	使用$_FILES[name]["size"]	限制文件大小，单位字节
						if($_FILES[name]['size']>$maxsize){
							echo "上传文件太大";
							exit;
						}
		3.	使用$_FILES[name]["type"]	限制文件的扩展名，限制类型
						list($dl,$xl) = explode("/",$_FILE[name]['type']);
							if($dl!="image"){
								echo "请上传图片类型";
								exit;
							}
		4.	让上传后的文件名改名。


	*/
//	echo '<pre>';
//	print_r($_POST);
//	print_r($_FILES);
//	echo '</pre>';
if($_FILES["wen"]["error"]>0){
	switch($_FILES["wen"]["error"]){
		case 1:
			echo "文件上传过大";
			break;
		case 2:
			echo "啦啦啦"."<br>";
			break;
		default:
			echo "我募集啊"."<br>";
	}
		exit;
}else{
	echo "上传文件第一步成功咯～"."<br>";
}
$maxsize=60001234;
if($_FILES["wen"]["size"]>$maxsize){
	echo "上传文件过大!";
	exit;
}else{
	echo "文件上传第二部成功咯～"."<br>";
	}
$allowtype=array("jpg","png","jpeg","gif","php");
$str=explode(".",$_FILES["wen"]["name"]);
$num=$str[count($str)-1];
if(!in_array($num,$allowtype)){
	echo "这是不允许的类型";
	exit;
}else{
	echo "第三部成功咯"."<br>";
}
$filepath="./uploads/";  //设置文件上传路径
$randname=date("Y").date("m").date("d").date("H").date("i").date("s").rand(100, 999).".".$num;
if(is_uploaded_file($_FILES["wen"]["tmp_name"])){
	if(move_uploaded_file($_FILES["wen"]["tmp_name"], $filepath.$randname)){
	echo "上传成功";
	}else{
	echo "上传失败";
	}
}else{
echo "不是一个上传文件";
}

