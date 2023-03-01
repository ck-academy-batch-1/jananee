<!DOCTYPE html>
<html>
<body>
<?php

echo "Today is " . date("l");
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
?>
<br/>
<hr>
<?php
echo "The time is " . date("h:i:sa");
?>
<br/>
<hr>
&copy; 2010-<?php echo date("Y");?>
<?php
$t=mktime(3, 27, 00, 3, 1, 2023);
echo "Created date is " . date("Y-m-d h:i:sa", $t);
?>
<br/>
<hr>
<?php
$d=strtotime("3.27pm march 2023");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
<hr>
<?php
date_default_timezone_set("asia/kolkata");
echo "its time now  " . date("h:i:sa");
?>

</body>
</html>


