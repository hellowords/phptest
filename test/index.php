<?php
	class Git{
		private $username;
		private $userpasd;
		public	$phone;
		function	__construct($a="hi",$b="12hi",$c=666){
			$this->username=$a;
			$this->userpasd=$b;
			$this->phone=$c;
		}
		public	function	push(){
			echo	"my name:{$this->username}<br>";	
		}
	}
	class Hub extends	Git{
		var	$email="hiwud@hotmail.com";
		public	function	check(){
			echo	"{$this->phone} is a boy<br>";
		}
		public	function	push(){
			parent::push();
			echo	"your phonenumber is :{$this->phone}<br>";
			echo	"this is my email :{$this->email}<br>";
		}
	}
$git=new Hub("do","",999);;
$lab=new	Hub("wu","12yu",888);
$git->push();
$git->check();
$lab->check();
