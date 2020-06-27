<?php
if(isset($_POST['simpan'])){
	include "../sambungan.php";
	$id=$_POST['nip'];
	$sandi	=md5($_POST['nama']);
	$nama	=$_POST['nama'];

	$sql="UPDATE guru SET nama='$nama', password='$sandi' WHERE nip='$id'";
	$simpan=mysqli_query($koneksi,$sql);
	//var_dump($sql);
	if($simpan){
		header('Location:index.php?m=guru&s=awal');
		//echo "berhasil";
	}else{
		//echo "gagal alias tidak berhasil, kemungkinan username sudah digunakan";
		include "index.php?m=guru&s=awal";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal diupdate, kemungkinan username sudah digunakan.")';
		echo '</script>';
		//var_dump($sql);
	}
}else{
	echo '<script>window.history.back()</script>';
	//echo "apa nih";
}
?>
