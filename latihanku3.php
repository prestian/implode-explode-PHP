<?php

echo "<h3>implode function</h3>";
echo "<br/>";

$arr = array ('I','am','study','php');  
$space_separated = implode(" ", $arr);  
$comma_separated = implode(" , ", $arr);  
$slash_separated = implode(" / ", $arr);  
$dot_separated = implode(" . ", $arr);  
$hyphen_separated = implode(" - ", $arr);  
echo $space_separated.'<br>';  
echo $comma_separated.'<br>';  
echo $slash_separated.'<br>';  
echo $dot_separated.'<br>';  
echo $hyphen_separated;
echo '<br>'

?>  
