<?php 
    //控制器函数
    function C($name,$method){
        require_once('controller/'.$name.'Controller.class.php');
        //$testController = new testController();
        //$testController -> show();
        //eval('$obj = new '.$name.'Controller():$obj->'.$method.'();');//调用简单但不安全，以下代替
        $controller = $name.'Controller';
        $obj = new $controller();
        $obj -> $method();
    }
    // 模型函数
    function M($name){
        require_once('model/'.$name.'Model.class.php');
        //eval('$obj = new'.$name.'Model();');
        $model = $name."Model";
        $obj = new $model();
        return $obj;
    }
    // 视图函数
    function V($name){
        require_once('view/'.$name.'View.class.php');
        eval('$obj=new '.$name.'View();');
        return $obj;
     }
    // 定义过滤函数
    // get_magic_quotes() 判断魔法符号打开的状态
    // addslashes() 转义特殊字符
    // function daddslashes($str){
    //     return (!get_magic_quotes_gpc())?addslashes($str):$str; 
    // }
    // get_magic_quotes_gpc():始终返回 FALSE，因为这个魔术引号功能已经从 PHP 中移除了。所以5.40以后，
    function daddslashes($str){
        //不判断，直接转义
        return addslashes($str);
    }

?>