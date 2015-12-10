<?php
	class FileUpload  {
		// 用于对上传文件初始化 --->构造函数
		// 指定上传文件的路径，指定文件的类型，限制文件大小，文件名随机取等
		// 让用户可以不用按位置传参数，后面参数给值同时不需要将前面的参数给值
		private $filepath;
		private $allowtype=array('gif','jpg','png','php');
		private $maxsize=6666666;
		private $randname=true;
		function __construct($option=array()){
			foreach($option as $key=>$val){
				$key=strtolower($key);
				// 查看用户参数中数组的下表是否和成员属性名相同
				if(!in_array($key,get_class_vars(get_class($this)))){
					continue;
				}
				$this->SetOption($key,$val);// 这里不能直接赋值,$key 与$val 不是一个在方法中的值.
			}
		}
		// 用来给用户都提供的变量参数赋值
		private function SetOption($key,$val){
			$this->$key=$val;
		}
		private function CheckFilePath(){
		}
		private function CheckFileType(){
		}
		private function CheckFileSize(){
		}
		private function SetFileName(){
		}
		// 用来上传一个文件
		function uploadFile(){
		}
		//用于获取上传文件后的
		function GetFileName(){
		}
		function GetErrorMsg(){
		}
	}
