<?php
abstract class Shape{
    public $shapename;
    abstract function area();
    abstract function perm();

		protected function vali($value,$message="形状"){
			if($value=="" || !is_numeric($value) || $value<0){
				echo '<font color="red">'.$message.'必须为非负数，并且不能不写！ </font><br>';
				return false;
			}else{
				return true;
			}
		}
}
