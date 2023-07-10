<?php


$content = file_get_contents('https://qrcodes.myjson.site/qrcode.php?s=qr-h&d=https://www.echowho.com/pair/sdfsg2h121wq');
file_put_contents('../test/img.png', $content);

file_get_contents('../test/img.png');

?>