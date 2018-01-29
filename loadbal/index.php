<?php
$x=$_GET["x"];
$y=$_GET["y"];
$counter_name="counter.txt";

if (!file_exists($counter_name)) 
{
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);
$counterVal++;
$f=fopen($counter_name,"w");
fwrite($f,$counterVal);
fclose($f);
if($counterVal%2==1)
{
	echo file_get_contents("http://10.0.0.2/?x=$x&y=$y");
}
else
{
	echo 2*file_get_contents("http://10.0.0.3/?x=$x&y=$y");
	echo "\n";
}


?>
