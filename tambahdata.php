<?php

	include 'conn.php';
	
	
	$idmakanan = $_POST['idmakanan'];
	$namamakanan = $_POST['namamakanan'];
	$jenismakanan = $_POST['jenismakanan'];
	$asalmakanan = $_POST['asalmakanan'];

	$connect->query("INSERT INTO makanan(id_makanan, nama_makanan, jenis_makanan, asal_makanan, ) VALUES ('".$idmakanan."','".$namamakanan."','".$jenismakanan."','".$asalmakanan."')")
	
	
	

?>