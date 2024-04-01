<?php
    include_once '../model/db.php';

    $Id = $_POST['id'];
    $Employee_name = $_POST['employee_name'];
    $Contact_no= $_POST['contact_no'];
    $user_name= $_POST['username'];
    $password = $_POST['password'];
    
    
    $conn = dbConnection();
    $query = "UPDATE employees set  employee_name='{$Employee_name}', contact_no='{$Contact_no}', 
           username='{$user_name}', password='{$password}' where id='{$Id}'";
    $data = mysqli_query($conn, $query);

    echo $data;

?>