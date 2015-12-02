<?php
	class Jisuan {
		private $shape;
		function __construct(){
			switch($_POST['action']){
				case 'ju':
					$this->shape=new Ju();
					break;
				case 'san':
					$this->shape=new San();
					break;
				case 'yuan':
					$this->shape=new Yuan();
					break;
				default:
					$this->shape=false;
			}
		}
		function __toString(){
			if($this->shape){
				$res=$this->shape->shapename.'的周长:'.$this->shape->perm().'<br>';
				$res.=$this->shape->shapename.'的面积:'.$this->shape->area().'<br>';

				return $res;
			}else{
				return "484傻";
			}
		}
	}
