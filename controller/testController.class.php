<?php
    class testController{
        function show(){
            $testModal = M('test');
            $data = $testModal->get();

            $testView = V('test');
            $testView->display($data);
        }
    }
?>