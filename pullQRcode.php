<?php


$content = file_get_contents('https://qrcodes.myjson.site/qrcode.php?s=qr-h&d=Test3');
file_put_contents('img.png', $content);

header('Content-type: image/png');
echo file_get_contents('img.png');


?>