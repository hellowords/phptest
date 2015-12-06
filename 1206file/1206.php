<?php
	/*
		 绝对路径：
		 		如果是在服务器中执行（通过PHP文件处理函数执行）路径，则"根"指的就是操作系统的根
				如果程序是下载的客户端，在访问服务器中文件时"根"就是网站的根目录了

		文件权限相关:
		 _ 表示文件
		 d 表示目录
		 l 表示链接文件
		 b 表示块
		文件的打开与关闭
			读: 
				 file_get_contents()
				 file()
				 readfile();
				 	以上3个函数是全部读取，不能读取指定区域
				 fopen(){
				 	fread()
					fgetc()
					fgets()
				 }
			写:
				file_put_contents();
						如果文件不存在，创建并写入内容，
						如果文件存在，则删除文件中的内容在写入
				fopen()
					fwrite() / fputs()
	*/
//$str=file_get_contents("http://www.163.com/");
//echo $str;
if(touch("./test.txt")){
	echo "创建成功";
}else{
	echo "创建失败".'<br>';
}
$dirname="test";
$dir=opendir($dirname);
while($FileName=readdir($dir)){
	echo $FileName.'<br>';
}
closedir($dir);
