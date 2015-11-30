<?php
	$user[1]=1;
	$user[2]=1;
	$user[3]=1;
	$user[4]="balabala";
	$user[5]="测试";
	
	echo '<pre>';
	echo $user.'</br>';
	print_r($user);
	echo '</pre>';
	echo '----------';
	$num=array(1,6=>"test","one","哈哈",666,8);
	echo '<pre>';
	echo $num;
	print_r($num);
	echo '</pre>';
	echo '----------';
	$bank = array(
			array(1,"第一列",666,5=>88,99),
			array(2,"第二列",777,6=>88,00),
			array(4,"第三列",888,8=>888,"haha")
			);
	echo '<pre>';
	print_r($bank);
	echo '</pre>';
?>
