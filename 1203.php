<?php
/*字符串处理函数
 *
 *1。其它类型的数据用在字符串处理函数中，会自动将其转为字符串后在处理！
 * 2    可以将字符串视为数组，当做字符集和来看待   
 *  内置字符串处理函数：
 *      常用输出函数：    enho();
 *                         print();.......
 *r
 */


//exit(0);
$str="   abc  d";
echo $str."<br>";
echo strlen($str)."<br>";
exit('#############');
	echo substr("qwertusas",4,2).'<br>';
	echo substr("2213s23e",3,3).'<br>';
	$str="qwesxzc";
	echo $str{2}.'<br>';
	echo $str[1]."<br>";
	echo $str{3}.$str{5}.'<br>';
//	die("eeqw");
//	fopen("./1201.php",r) or exit("open Filed");
//	fcloes("./1201.php");
	echo "Open secussful.'<br>'.";
	$str="abs
	eca
	eds
	edc
	123	qwe
	";
	echo $str.'<br>';
	echo nl2br($str);
	?>
	<form>
		Test:<input type="text" name="str" size=50>
				<input type="submit" value="发射">
				<br>
	</form>
	<?php
	if(strcasecmp($_GET['str'],"nihao")==0){
		echo "小伙玩儿的不错！"."<br>";
	}else{
		echo "加油！"."<br>";
	}
	echo $_GET['str']."<br>";
	echo htmlspecialchars($_GET['str'])."<br>";
	echo strip_tags(_GET['str'])."<br>";
	$hi="http://hiwud.com";
	echo $hi."<br>";
	echo strrev($hi);
	$password="6666";
	echo $password."<br>";
	echo md5($password);
