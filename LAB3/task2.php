<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculate vat</title>
</head>
<body>
    <?php
        $priceExcludingVat = $_REQUEST['price'];
        $vat = $_REQUEST['vat'];
        $vatToPay=$priceExcludingVat*$vat;
        $totalPrice=$priceExcludingVat+$vatToPay; 

        echo "vat over the price =".$vatToPay,"<br>";
        echo "total price =".$totalPrice,"<br>";
    ?>
</body>
</html>