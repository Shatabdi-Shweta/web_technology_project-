<?php
    require_once('db.php');

function show_employee_details(){
    $conn = dbConnection();
    $sql = "select * from employees";
    $result = mysqli_query($conn,$sql);
    
    $employees= [];

    while($employee = mysqli_fetch_assoc($result)){
        array_push($employees, $employee);
    }

    
    return $employees;
}

function deleteEmployee($Id){
    $conn = dbConnection();
    $sql = "DELETE FROM employees WHERE id={$Id}";

    if(mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}


function show_products_list(){
    $conn = dbConnection();
    $sql = "select * from products";
    $result = mysqli_query($conn,$sql);
    $products = [];
    while($product = mysqli_fetch_assoc($result)){
        array_push($products,$product);
    }
    return $products;
}

function deleteProduct($Id){
    $conn = dbConnection();
    $sql = "DELETE FROM products WHERE id={$Id}";

    if(mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}


?>