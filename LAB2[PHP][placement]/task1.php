<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area and Perimeter of Rectangle</title>
</head>
<body>
    <?php
    $length = $_POST['length'];
    $width  = $_POST['width'];

    echo "the area of rectangle = " .$length*$width, " <br>" ;
    echo "the perimeter of rectangle = ".(2*($length+$width)),"<br>" ;
    ?>
</body>
</html>