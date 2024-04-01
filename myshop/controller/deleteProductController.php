<?php
    include_once '../model/usermodel.php';

    $Id = $_REQUEST["id"];

    $result = deleteProduct($Id);
    if($result=TRUE){
        echo "success";
    }else{
        echo "failed";
    }
?>