<?php


$reqURL = 'qrcode.php?';
$temp = tempnam(sys_get_temp_dir(), 'TMP_');


// Create a stream
$opts = array(
    'http'=>array(
      'method'=>"GET",
      'header'=>"Accept-language: en\r\n" .
                "Cookie: foo=bar\r\n",
        ""
    )
  );
  
  $context = stream_context_create($opts);
  
  // Open the file using the HTTP headers set above
  $file = file_get_contents('http://www.example.com/', false, $context);

file_put_contents($temp, file_get_contents("$reqURL"));
//file_put_contents($temp, $content);
header('Content-type: image/png');
echo file_get_contents($temp);
fclose($temp); // this removes the file

?>