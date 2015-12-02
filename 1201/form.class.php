<?php
	class Form{
		private $action;
		private $method;
		private $target;
        private $shape;
		function __construct($a="index.php",$b="post",$c="_blank"){
			$this->action=$a;
			$this->method=$b;
            $this->shape=isset($_REQUEST["action"]) ? $_REQUEST["action"] : "ju";
		}
		function __toString(){
			$form = '<form action="'.$this->action.'"method="post">';
            switch($this->shape){
            case "ju":
               $form.=$this->getJu();
                break;
            case "san":
                $form.=$this->getSan();
                break;
            case "yuan":
                $form.=$this->getYuan();
                break;
            default:
                $form.="请选择一个形状<br>";
            }
            $form.='<input type="submit" name="sub" value="发射">';
			$form.='</form>';
            return $form;
        }
        private function getJu(){
            $input='<b>请输入 矩形的宽度和高度：</b><p>';
            $input.='宽度:<input type="text" name="kuan" value="'.$_POST['kuan'].'"><br>';
            $input.='高度:<input type="text" name="gao" value="'.$_POST['gao'].'"><br>';
            $input.='<input type="hidden" name="action" value="ju">';
            return $input;
        }
        private function getSan(){
            $input='<b>请输入 三角形的三条边：</b><p>';
            $input.='第一条:<input type="text" name="side1" value="'.$_POST['side1'].'"><br>';
            $input.='第二条:<input type="text" name="side2" value="'.$_POST['side2'].'"><br>';
            $input.='第三条:<input type="text" name="side3" value="'.$_POST['side3'].'"><br>';
            $input.='<input type="hidden" name="action" value="san">';

            return $input;
        }
        private function getYuan(){
            $input='<b>请输入 圆形的半径：</b><p>';
            $input.='半径:<input type="text" name="ban" value="'.$_POST['ban'].'"><br>';
            $input.='<input type="hidden" name="action" value="yuan">';

            return $input;
        }
	}

