<?php 
    //控制器函数
    function C($name,$method){
        require_once('controller/'.$name.'Controller.class.php');
        //$testController = new testController();
        //$testController -> show();
        //eval('$obj = new '.$name.'Controller():$obj->'.$method.'();');//调用简单但不安全，以下代替
        $controller = $name.'Controller';
        $obj = new $controller();
        $obj -> $method;
    }
    // 模型函数
    function M($name){
        require_once('model/'.$name.'Model.class.php');
        //eval('$obj = new'.$name.'Model();');
        $model = $name."Model";
        $obj = new $Model();
        return $obj;
    }
    // 视图函数
    function V($name){
        require_once('view/'.$name.'View.class.php');
        eval('$obj=new '.$name.'View();');
        return $obj;
     }
?>