<?php

// koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $sql);
    $rows =[];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $row;
}
function cari($keyword) {
    $query ="SELECT *FROM resep
                WHERE 
            nama_resep  ='$keyword'
            ";
    return query($query)
}