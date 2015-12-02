<?php
 class Yuan extends Shape {
	 private $r=0;

	 function __construct(){
		 if($this->vali($_POST['ban'],"圆的半径")){
		 		$this->r=$_POST['ban'];
	 	 }else{
			 exit;
		 }
	 }
	 function area(){
			return pi()*$this->r*$this->r;
	 }
	 function perm(){
			return 2*pi()*$this->r;
	 }

 }
