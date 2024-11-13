<?php
include 'conn.php';

$queryResult = $connect -> query("SELECT * FROM makanan");

$result = array(10);

while($fetchData = $queryResult -> fetch_assoc()){
	$result[] = $fetchData;
}

echo json_encode($result);

?>