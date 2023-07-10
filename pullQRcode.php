<?php


$content = file_get_contents('https://qrcodes.myjson.site/qrcode.php?s=qr-h&d=Test3');
echo $temp = tmpfile();
file_put_contents($temp, $content);
//header('Content-type: image/png');
echo file_get_contents($temp);
fclose($temp); // this removes the file

?>