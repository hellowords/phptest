<?php
	class San extends Shape  {
		private $side1=0;
		private $side2=0;
		private $side3=0;
		function __construct(){
			$this->side1=$_POST['side1'];
			if($this->vali($_POST['side1'],"第一条") & $this->vali($_POST['side2'],"第二条") & $this->vali($_POST['side3'],"three")){
			$this->side2=$_POST['side2'];
			$this->side3=$_POST['side3'];
			}else{
				exit;
			}
		}
		function area(){
			$re= ($this->side1+$this->side2+$this->side3)/2;
			return sqrt( $re * ($re-$this->side1) * ($re - $this->side2) * ($re-$this->side3));
		}
		function perm(){
			return $this->side1+$this->side2+$this->side3;
		}
	}
