<?php

echo "<h3>explode function</h3>";
echo "<br/>";

$data = "I am Study PHP";

$explode = explode(" " , $data);
print_r($explode);

echo "<br/>";
echo "<br/>";
 
echo " Data 1 = " . $explode[0];
echo "<br/>";
echo " Data 2 = " . $explode[1];
echo "<br/>";
echo " Data 3 = " . $explode[2];
echo "<br/>";
echo " Data 4 = " . $explode[3];

?>
