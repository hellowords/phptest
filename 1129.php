<?php
	class Person {
		private $name;
		private $age;
		private $sex;
		function __construct($name="wu",$age=26,$sex="women"){
			$this->name=$name;
			$this->age=$age;
			$this->sex=$sex;
			echo "haha<br>";
		}
		private function __get($proName){
			echo "__get";
		}
		private function __set($proName,$proValue){ //直接设置私有成员属性值自动调用的方法！
			$this->$proName==name;
			$this->$proValue==age;
			echo "wo name is{$this->name}<br>";
			echo "i'm {$this->age} old<br>";
		}
		function say(){
			echo "my name is:{$this->name}<br>";
			echo "i'm {$this->age} old !<br>";
		}
		function work(){
			echo $this->age;
			$this->food();
		}
		private function food(){
			echo $this->name;
		}
	}
/* $p = new Person("wudong",20);
$p1 =new Person("dong",22);
 $p1->name="hiwud";
$p->say();
$p1->say();
$p->work();
echo $p->name;
echo $p1->name;
*/
$p->name="hi";
$p->say();
$p1->say();
