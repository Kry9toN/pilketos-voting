<?php
if(isset($_POST['simpan'])){
	include_once "../sambungan.php";
	$id=$_POST['nis'];
	$sandi	=md5($_POST['nama']);
	$nama	=$_POST['nama'];
	$idkelas=$_POST['kelas'];

	$sql="UPDATE siswa SET nama='$nama', idkelas='$idkelas', password='$sandi' WHERE nis='$id'";
	$simpan=mysqli_query($koneksi,$sql);
	//var_dump($sql);
	if($simpan){
		header('Location:index.php?m=siswa');
		//echo "berhasil";
	}else{
		//echo "gagal alias tidak berhasil";
		include "index.php?m=siswa&s=awal";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal diupdate.")';
		echo '</script>';
		//var_dump($sql);
	}
}else{
	echo '<script>window.history.back()</script>';
	//echo "apa nih";
}
?>
