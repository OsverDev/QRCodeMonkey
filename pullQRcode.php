<?php




$reqURL = $_SERVER['DOCUMENT_ROOT'].'/qrcode.php';
$temp = tempnam(sys_get_temp_dir(), 'TMP_');


$getdata = http_build_query(
    array(
     'd'=>'Test4',
     )
    );
    
    $opts = array('http' =>
     array(
        'method'  => 'GET',
        'content' => $getdata
    )
    );
    
    $context  = stream_context_create($opts);
    
    $result = file_get_contents($reqURL, true, $context);

file_put_contents($temp, file_get_contents("$reqURL"));

header('Content-type: image/png');
echo file_get_contents($temp);
//echo $reqURL;
fclose($temp); // this removes the file

?>