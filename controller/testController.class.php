<?php
    class testController{
        function show(){
            $testModal = new testModel();
            $data = $testModal->get();

            $testView = new testView();
            $testView->display($data);
        }
    }
?>