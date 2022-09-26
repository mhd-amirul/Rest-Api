<?php 

$data = file_get_contents('data.json');
$mhs = json_decode($data, true);

var_dump($mhs);
echo "<br>".$mhs[0]["hobi"]["hobi1"];
 ?>