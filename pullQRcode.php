<?php


$content = file_get_contents('https://qrcodes.myjson.site/qrcode.php?s=qr-h&d=https://www.echowho.com/pair/sdfsg2h121wq');
file_put_contents('/my/folder/flower.jpg', $content);

?>