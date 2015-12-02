<?php
	class Ju extends Shape {
		private $width=0;
		private $height=0;
		function __construct(){
			$this->shapename="矩形";
			if($this->vali($_POST['kuan'],"矩形的宽度") & $this->vali($_POST['gao'],"矩形的高度")){
				$this->width=$_POST["kuan"];
				$this->height=$_POST["gao"];
				}else{
					exit;
				}
		}	
		function area(){
			return $this->width*$this->height;
		}
		function perm(){
			return $this->width*2+$this->height*2;
		}
	}
