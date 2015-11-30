<?php
/* 
$a=100;
$b=22;
	echo '<pre>';
	print_r($GLOBALS);
	echo'</pre>';
	echo '----------------'."="."<br>";
	foreach($_SERVER as $key=>$value){
		echo $key."=".$value."<br>";

	}
	*/
	echo '----------------'."="."<br>";
	$ubu=array("os"=>"Ubuntu","webserver"=>"Nginx","DB"=>"Mysql");
	$num=array_values($ubu);
//	list($os,$wb,$db)=$num;
	echo '<pre>';
	print_r($num);
	echo '</pre>';
	echo $os."<br>";
	echo $wb."<br>";
	echo $db."<br>";
	$num1=array_keys($ubu,"Nginx");
	echo '<pre>';
	print_r($num1);
	echo '</pre>';
	if(array_key_exists("aB",$ubu)){
			echo "真的";
		}else{
		echo "假的";
		}
	$oss=array_flip($ubu);
	echo '<pre>';
	print_r($oss);
	echo '</pre>';
?>

