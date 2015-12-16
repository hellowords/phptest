<?php
    /*
     *关于系统时间与PHP的一些函数：
     *      time();当前时间
     *      getDate();返回值比较全，有很多信息，在一个数组里面
     *      date();可以有两个参数，第一个参数是时间格式，第二个参数是时间
     *          date("Y-m-d H-i-s",time())
     */
    $ini=time();
echo $ini.'<br>';
$num=getDate();
list($yera,$mon,$day)=explode("-",$_GET["time"]);
echo date("Y-m-d H-i-s",mktime(0,0,0,$mon,$day,$yera)).'<br>';
$age=time()-mktime(0,0,0,$mon,$day,$yera);
$age=$age/(60*60*24*365);
echo "Age:".floor($age).'<br>';
echo '<pre>';
print_r($num);
echo '</pre>';
var_dump($num);
echo '<br>';
echo date("Y-m-d H/i-s",time()).'<br>';
echo date("Y-m-d H/i-s",mktime(0,1,2,12,23,24)).'<br>';

?>
