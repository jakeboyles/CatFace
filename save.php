<?php

$saveFile = "uploads/" . uniqid('') . '.png';
file_put_contents($saveFile, base64_decode(str_replace('data:image/png;base64,','',$_POST['img'])));
$data = array('url'=>'uploads/' . basename($saveFile));

die(json_encode(array(
    'success'  => true,
    'data'     => $data
)))
?>