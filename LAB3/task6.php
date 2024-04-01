<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>find number from array</title>
</head>
<body>
    <?php
    $numbers = array(23,5,2,67,89,24,56);
    //$length = count($numbers);
    $numberToFound = $_REQUEST['num'];
    $found = false;
    for($i = 0; $i<count($numbers); $i++)
    {
        if($numbers[$i] == $numberToFound)
        {
            $found = true;
            break;
        }
    }
    if($found)
    {
        echo "found";
            
    }else{
         echo "not found";
            
     }
    ?>
</body>
</html>