<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEAP YEAR</title>
</head>
<body>
    <h1> LEAP YEAR </h1>
    <?php
    $year=2012;
    if((0 == $year % 4)&& (0 != $year %100)|| (0 == $year % 400))
    {
        echo "$year is a leap year";
    }
    else{
        echo "$year is not a leap year";
    }
    ?>
    
</body>
</html>