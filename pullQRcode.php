<?php


$content = file_get_contents('https://qrcodes.myjson.site/qrcode.php?s=qr-h&d=Test1');
file_put_contents('../test/img.png', $content);

header('Content-type: image/png');
echo file_get_contents('../test/img.png');

?>