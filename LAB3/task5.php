<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>odd number between 10 t0 100</title>
</head>
<body>
    <?php
    echo "odd numbers are : <br>";
    for($i = 10; $i<=100; $i++)
    {
        if($i % 2 == 0)
        {
            echo " ". $i ;
        }
    }
    ?>
</body>
</html>