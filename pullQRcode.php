<?php




$reqURL = 'https://qrcodes.myjson.site/qrcode.php?s=qr-h&d=https://www.echowho.com/pair/sdfsg2h121wq';
$temp = tempnam(sys_get_temp_dir(), 'TMP_');

file_put_contents($temp, file_get_contents("$reqURL"));

header('Content-type: image/png');
echo file_get_contents($temp);
//echo $reqURL;
fclose($temp); // this removes the file

?>