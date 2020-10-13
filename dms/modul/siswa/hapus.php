<?php
if(isset($_GET['nis'])){
	include "../sambungan.php";
	$id=$_GET['nis'];
	$sql   = "SELECT * FROM siswa WHERE nis='$id'";
	$hapus = mysqli_query($koneksi,$sql);
	$r     = mysqli_fetch_array($hapus);
	$sql   = "DELETE FROM siswa WHERE nis='$id'";
	$hapus = mysqli_query($koneksi,$sql);
	if($hapus){
		header("Location: ?m=siswa");
	}else{
		include "index.php?m=siswa&s=awal";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal dihapus.")';
		echo '</script>';
	}
}
?>
