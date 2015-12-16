<?php
    /*
     * 异常处理：在程序运行过程中发生的意料之外的事情，使用异常改变脚本正常流程
     *
     * try{
     *
     * }catch(){
     *
     * }
    *      如果try中的代码没有问题，则将try执行完之后到catch后执行
    *     如果try中有异常代码，则抛出一个异常对象，抛个catch中的参数
    *     直接跳转到catch代码段中执行，接下去该干嘛干嘛～
    *
    *     Tips: catch 中提示发生了什么异常，需要在catch中解决这个异常
    *           如果解绝不了，在告诉用户。
    *   自己定义一个异常类：
    *       1.自己定义的异常类，必须是Exception(内之类)的子类
    *       2.Exception类中的只有构造方法，和tostring()可以重写，其他都是final
    *
     */
class TryException extends Exception {
    function __construct($message="",$code=0){
        parent:: __construct($message,$code);
        echo "这是TryException累里面的东东"."<br>";
}
}
try{
    echo "<center><h1>try</h1></center>"."</br>";
    $file=fopen("heo.php","r");
    if(!$file)
        throw new TryException("文件打开失败");
    echo "哟～,Wen件貌似打开咯～"."<br>";
}catch(TryException $e){
    echo "catch里面了哦～"."<br>";
    echo $e->getMessage()."<br>";
    touch("heo.php");

}
