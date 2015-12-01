<?php
	class Form{
		private $action;
		private $method;
		private $target;
		function __construct($a="index,php",$b="post",$c="_blank"){
			$this->action=$a;
			$this->method=$b;
			$this->target=$c;
		}
		function __toString(){
			$form = '<form action="'.$this->action.'"method="post">';
			echo "66666";
			$form.='</form>';
			return $form;
		}
	}

