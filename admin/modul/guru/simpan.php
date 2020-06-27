<?php
if(isset($_POST['simpan'])){
	include "../sambungan.php";
	include "../fungsi/upload.php";
	$sandi	=md5($_POST['nama']);
	$nip	=$_POST['nip'];
	$nama	=$_POST['nama'];

	$sql="INSERT INTO guru SET nip='$nip', nama='$nama', password='$sandi', memilih=''";
	$simpan=mysqli_query($koneksi,$sql);
	if($simpan){
		header('Location:index.php?m=guru');
		//echo "berhasil";
	}else{
                var_dump($sql);
		include "?m=guru";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal Ditambahkan, kemungkinan username sudah digunakan.")';
		echo '</script>';
		//var_dump($sql);
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>
