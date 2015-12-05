<?php
/*  
	正则表达式需要配合正则匹配函数配合使用
	一. 字符串的匹配与查找
		非正则字符串处理函数，php内置简单字符串处理函数:
			strstr(); 如果第二个参数是数字，则匹配数字都对应的ACII码值
			stristr(); 加"i" 之后不区分大小写
			strpos();
			substr();
			str_replace(); 替换字符串函数；
			str_ireplace(); 不区分大小写
 		 正则函数: 	preg_replace('正则模板','要替换的词',在那个里面,制定替换几次);
								在正则中的子模式，可以用到第二个参数中。
								在第二个参数中调用函数，需要在模式中使用"e"模式修正符号;
								在前两个参数中都可以使用数组，可以一起将多个模式(正则)同时进行替换成多个值的形式.

	二. 字符串的分割
		preg_split();
		preg_grep();从数组中匹配寻找
  							

*/
$cont=6;
$url="http://hiwud.com";
$ubu='<font color="red">'.$url.'</font>';
$str=str_replace("hiwud",$ubu,$url,$cont);
echo $cont.'<br>';
echo $str;
