<?php

echo "<h3>explode function</h3>";
echo "<br/>";
$hari = "senin selasa rabu kamis jumat sabtu minggu";
$data = explode(" " , $hari);

print_r($data);

echo "<br/>";
echo " Data 1 = " . $data[0];
echo "<br/>";
echo " Data 2 = " . $data[1];
echo "<br/>";
echo " Data 3 = " . $data[2];
echo "<br/>";
echo " Data 4 = " . $data[3];
echo "<br/>";
echo " Data 5 = " . $data[4];
echo "<br/>";
echo " Data 5 = " . $data[5];
echo "<br/>";
echo " Data 5 = " . $data[6];
echo "<br/>";
echo "<h3>implode function</h3>";
echo "<br/>";
$implode = implode(",", $data);

// tampilkan kalimat sebelum implode
echo " Sebelum Implode ";
print_r($hari);
echo "";
echo "<br/>";
// tampilkan kalimat sesudah perintah implode dengan tanda ,
echo " Sesudah Implode ";
echo " $implode ";
?>