<?php


$ch = curl_init('https://qrcodes.myjson.site/qrcode.php?s=qr-h&d=https://www.echowho.com/pair/sdfsg2h121wq');
$fp = fopen('/temp/img.png', 'wb');
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);

echo file_get_contents('/temp/img.png');

?>