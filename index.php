<?php
require 'vendor/autoload.php';

 // 第一步 浏览器 -> 调用控制器，发出指令 

    // 第二步 控制器 -> 按指令选取一个合适的模型 

    // 第三步 模型   -> 按控制器指令取相应数据 

    // 第四步 控制器 -> 按指令选取相应视图 

    // 第五步 视图   -> 把第三步的数据按用户想要的样子显示出来

    require_once('controller/testController.class.php');
    require_once('model/testModel.class.php');
    require_once('view/testView.class.php');

    $testController=new testController();
    $testController->show();

    
echo 'hello111';
?>
