<?php
// koneksi ke database
function koneksi(){
	$conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke DB gagal!");
	mysqli_select_db($conn, "tubes_193040022") or die ("Database Salah!");

	return $conn;
}


function query($query) {
	$conn = koneksi();
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

?>