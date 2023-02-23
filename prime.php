<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> PRIME NUMBER </h1>
    <?php
    $num=25;
    $count=0;
    for($i=1;$i<=$num;$i++){
        if(($num%$i)==0)
        {
            $count++;
        }
    }
    if($count<=3)
    {
        echo"$num is a prime number.";
    }
    else{
        echo"$num is not a prime number.";
    }
    ?>  
    
</body>
</html>