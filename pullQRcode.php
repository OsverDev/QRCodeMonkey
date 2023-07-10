<?php


$reqURL = '../qrcode.php?s=qr-h&d=Test3';
$temp = tempnam(sys_get_temp_dir(), 'TMP_');

file_put_contents($temp, file_get_contents("$reqURL"));
//file_put_contents($temp, $content);
header('Content-type: image/png');
echo file_get_contents($temp);
fclose($temp); // this removes the file

?>