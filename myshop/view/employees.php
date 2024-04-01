<?php
    require_once '../controller/sessionCheck.php';
    include_once('../model/reportAndAnalysisModel.php');
    $employees = show_employee_details();
?>

<html>
<head>
<title>Employeelist</title>
</head>
<body>

<table border=1>
    <tr>
        <td>Employee Name</td>
        <td>Contact No</td>
        <td>User Name</td>
        <td>Password</td>   
        <td>Action</td>
       
    <tr>
<?php for($i=0; $i<count($employees); $i++){?>
    <tr>
        <td><?=$employees[$i]['serial']?></td>
        <td><?php echo $employees[$i]['employee_name']?></td>
        <td><?php echo $employees[$i]['contact_no']?></td>
        <td><?php echo $employees[$i]['username']?></td>
        <td><?php echo $employees[$i]['password']?></td> 
        <td>
            <a href="editEmployee.php?serial=<?=$employees[$i]['id']?>">Edit </a> |
            <a href="../controller/deleteEmployeeController.php?serial=<?=$employees[$i]['id']?>">Delete </a> |
        </td>
    <tr>
<?php } ?>
<a href="home.php"><button>Return Home</button></a>

</table>

</body>
</html>