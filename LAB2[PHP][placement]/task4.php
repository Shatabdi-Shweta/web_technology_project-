<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>find largest number</title>
</head>
<body>
    <?php
    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];
    $num3 = $_REQUEST['num3'];

    if($num1>$num2 && $num1>$num3)
    {
        echo "number 1 is the largest...";
    }
    elseif($num2>$num1 && $num2>$num3)
    {
        echo "number 2 is the largest...";
    }
    else{
        echo "number 3 is the largest...";
    }
    ?>
</body>
</html>