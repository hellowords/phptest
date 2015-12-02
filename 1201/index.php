<html>
	<head>
		<title>	图形计算(面向对象的思想)</title>	
		<meta http-equiv="Content-Type"	content="text/html; charset=utf-8"/>
	</head>
	<body>
		<center>
		<h1>图形计算器</h1>
		<a href="index.php?action=ju">矩形</a> ||
		<a href="index.php?action=san">三角</a> ||
		<a href="index.php?action=yuan">圆</a>
		<hr>
		</center>
        <?php
            error_reporting(E_ALL & ~E_NOTICE);//设置错误报告级别
            function __autoload($className){
                include strtolower($className).".class.php";
            }
            $form=new Form;
            echo $form;            
						if(isset($_POST["sub"])){
							echo	new Jisuan();
						}
        ?>
	</body>
</html>
