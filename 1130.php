<?php
	class Preson {
		var $name;
		var $phone;
		var $age;
		var $sex;
		function __construct($name,$phone,$sex){
			$this->name=$name;
			$this->phone=$phone;
			$this->age=$sex;
			echo "{$this->age}";
		}
		function say(){
			echo "mine name is:{$this->name},my phonenumber:{$this->phone}<br>";
		}
		function run(){
		}
		function work(){
		}
	}
	class Student extends Preson{
		var $school="php";
	/*	function	__construct($a){
			$this->school=$a;
		}
		*/
		function study(){
			echo "myname is:{$this->name}<br>";
		}
		function say(){
			parent::say();
			echo "i'm study in {$this->school}<br>";
		}
	}
$p = new Student("hi",123456,"man");
$p->study();
$p->say();
