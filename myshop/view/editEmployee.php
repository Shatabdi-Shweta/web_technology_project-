<?php
    $Id= $_GET['id'];

?>

<html lang="en">
<head>
    <title>Edit Employee</title>
</head>
<body>
        <form action="../controller/editEmployeeController.php" method="post">
            <fieldset>
            Id: <input type="number" name='id' value="<?=$Id?>"/> <br>
            Employee_name: <input type="text" name='employee_name' value=""/> <br>
            Contact_No: <input type="number" name='contact_no' value=""/> <br>
            User_name: <input type="date" name='username' value=""/> <br>
            Password: <input type="password" name='password' value=""/> <br>
            
            <input type="submit" name='submit' value="update"/> <br>
            </fieldset>
        </form>
</body>
</html>