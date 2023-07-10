<?php


$content = file_get_contents('../qrcode.php?s=qr-h&d=Test2');
file_put_contents('../test/img.png', $content);

header('Content-type: image/png');
echo file_get_contents('../test/img.png');

?>