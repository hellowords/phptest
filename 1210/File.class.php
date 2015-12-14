<?php
	class FileUpload  {
		// 用于对上传文件初始化 --->构造函数
		// 指定上传文件的路径，指定文件的类型，限制文件大小，文件名随机取等
		// 让用户可以不用按位置传参数，后面参数给值同时不需要将前面的参数给值
		private $filepath;
		private $allowtype=array('gif','jpg','png','php');
		private $maxsize=6666666;
        private $randname=true;
        private $originname; //源文件名
        private $tmpname;   //临时文件名
        private $filetype;  //文件类型
        private $filesize; //文件大小
        private $errornum; //错误代号
		function __construct($option=array()){
			foreach($option as $key=>$val){
				$key=strtolower($key); //检测大小写
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
        private function GetError(){
            $str="上传文件{$this->originname}错误！";
            switch($this->errornum){
            case 4:
                $str.="没有文件被上传";
                break;
            case 3:
                $str.="文件没成功";
                break;
            case 2:
                $str.="文件超过了HTML表单！";
                break;
            case 1:
                $str.="上传文件超过了PHP.ini";
                break;
            default :
                $str.='未知错误';
}
}
        private function CheckFilePath(){
            if(empty($this->filepath)){
                $this->SetOption('errornum',
                continue;

}
		}
		private function CheckFileType(){
		}
		private function CheckFileSize(){
		}
		private function SetFileName(){
		}
		// 用来上传一个文件
        private function uploadFile($fileFiled){
            //检查文件路径
            if(!$this->)
            $name=$_FILES[$fileFiled]['name'];
            $tmp_name=$_FILES[$fileFiled]['tmp_name'];
            $size=$_FILES[$fileFiled]['size'];
            $error=$_FILES[$fileFiled]['error'];
            $this->SetFiles($name,$tmp_name,$size,$error);
        }
        // 设置和$_FILES 有关的内容
        private function SetFiles($name='',$tmp_name='',$size=0,$error=0){
            $this->SetOption('errornum',$error);
            if($error){
                return false;
            }
           // $arrStr=explode('.',$name);
           // $this->SetOption('filetype',strtolower($arrStr[count($arrStr)-1]));
            $this->SetOption('originname',$name);
            $this->SetOption('tmpname',$tmp_name);
            $this->SetOption('filesize',$size);
            return true;
        }
		//用于获取上传文件后的名称
		function GetFileName(){
		}
		function GetErrorMsg(){
		}
	}
