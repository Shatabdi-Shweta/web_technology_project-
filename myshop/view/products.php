<html>
<head>
<title>Productlist</title>
</head>
<body>

<table border=1>
    <tr>
        <td>Product Name</td>
        <td>Quantity</td>
        <td>Price</td>  
        <td>Action</td>
       
    <tr>
<?php for($i=0; $i<count($produts); $i++){?>
    <tr>
        <td><?=$produts[$i]['serial']?></td>
        <td><?php echo $produts[$i]['product_name']?></td>
        <td><?php echo $produts[$i]['quantity']?></td>
        <td><?php echo $produts[$i]['price']?></td>
        <td>
            <a href="editDonor.php?serial=<?=$produts[$i]['serial']?>">Edit </a> |
            <a href="../controller/deleteDonorController.php?serial=<?=$produts[$i]['serial']?>">Delete </a> |
        </td>
    <tr>
<?php } ?>
<a href="home.php"><button>Return Home</button></a>

</table>

</body>
</html>