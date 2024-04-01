<?php
    include_once '../model/usermodel.php';

    $Id = $_REQUEST["id"];

    $result = deleteEmployee($Id);
    if($result=TRUE){
        echo "success";
    }else{
        echo "failed";
    }
?>