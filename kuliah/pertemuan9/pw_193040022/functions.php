<?php
	// koneksi ke database
	function koneksi(){
		$conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke DB gagal!");
		mysqli_select_db($conn, "pw_193040022") or die ("Database Salah!");

		return $conn;
	}


	function query($sql) {
		$conn = koneksi();
		$result = mysqli_query($conn, $sql);

		$rows = [];
		while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
		}
		return $rows;
	}
?>