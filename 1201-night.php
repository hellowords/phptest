<?php
/*
	 接口技术	
	 接口是一种特殊的抽象类，抽象类同时也是一种特殊的类
	 接口对于PHP的意义就是让子类可以继承抽象类的同时也可以继承其他类
		接口中的方法都是抽象方法，成员都是常量。abstruct修饰词使用于抽象类
   接口的声明方法：
	  interface  接口类{
		}
		接口中的成员访问权限必须是public，而抽象类中最低是protected
		使用一个类去实现接口必须使用	implements 关键词 不使用extends
		接口与接口之间的集成可以使用extends
		在类的继承多接口的同时也可以继承一个类，必须先继承类，在实现接口
*/
interface	Demo{
	const username="hello";
	const useremail="hiwud@hotmail.com";
	function	show();
}
interface Demo1{
	function	get();
}
class Test implements Demo,Demo1{
	function	show(){
		echo "------"."<br>";
	}
	function	get(){
		echo "++++++"."<br>";
	}
}
$num=new Test;
$num->show();
$num->get();
interface USB{
	function start();
	function stop();
	function work();
}
class Blue implements USB{
	function start(){
		echo "Blue starting...."."<br>";
	}
	function stop(){
		echo	"Bule stop..."."<br>";
	}
	function work(){
		echo "Bule working..."."<br>";
	}
}
class HP implements USB{
	function start(){
		echo "HP starting...."."<br>";
	}
	function stop(){
		echo	"HP stop..."."<br>";
	}
	function work(){
		echo "HP working..."."<br>";
	}
}
class Computer {
	function Inusb($usb){
		$usb->start();
		$usb->work();
		$usb->stop();
	}
}
class Worker{
	function	install(){
		$us=new Computer;
		$hp=new HP;
		$bu=new Blue;
		$us->Inusb($bu);
		$us->Inusb($hp);
	}
}
$per=new Worker;
$per->install();
