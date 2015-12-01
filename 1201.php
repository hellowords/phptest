<?php
class Discover{
    var $name;
    public  $email;
    static  $phone;
    const   HOST="localhost";
    function __construct($a,$b,$c){
        $this->name=$a;
        $this->email=$b;        
        self::$phone=$c;
    }
    function say(){
        echo "my name is {$this->name}<br>";
    }
    }
class Check extends Discover{
    public  $school;
    public  $girl;
    function  make($a,$b){
        $this->school=$a;
        $this->girl=$b;
        echo "{$this->school} is my workplaece<br>";
        echo self::$phone;
        echo $this->girl;
    }
    function say($a){
        parent::say();
        $this->girl=$a;
        echo "$this->girl<br>";
    }
    function __toString(){
        return "tostring<br>";
    }
}
$n=new Check("n","",9090);
$m=new Check("name","hi@hi.com",886699);
$n->say("lulu");
$m->make("cdn",6969);
echo DIscover::HOST;
echo $n;
