<?php
    $Id= $_GET['id'];

?>

<html lang="en">
<head>
    <title>Edit Employee</title>
</head>
<body>
        <form action="../controller/editProductController.php" method="post">
            <fieldset>
            Id: <input type="number" name='id' value="<?=$Id?>"/> <br>
            Product_name: <input type="text" name='product_name' value=""/> <br>
            Quantity: <input type="number" name='quantity' value=""/> <br>
            Price: <input type="number" name='price' value=""/> <br>
           
            <input type="submit" name='submit' value="update"/> <br>
            </fieldset>
        </form>
</body>
</html>