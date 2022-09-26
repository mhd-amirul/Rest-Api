<?php
	// $mhs = [
	// 	"nama" => "Muhammad Amirul",
	// 	"nim" => "1857301023",
	// 	"hobi" => [
	// 		"Gaming",
	// 		"Coding",
	// 		"Sport"
	// 	],
	// 	"email" => "amirul@pnl.ac.id"
	// ];
	
	$dbs = new PDO('mysql:host=localhost;dbname=db_rentalmobil_tga', 'root', '');
	$db = $dbs->prepare('SELECT * FROM kriterias');
	$db->execute();
	$mhs = $db->fetchAll(PDO::FETCH_ASSOC);

	$data = json_encode($mhs);
	echo $data;
?>