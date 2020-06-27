<?php
if(isset($_POST['simpan'])){
	include "../sambungan.php";
	include "../fungsi/upload.php";
	$nama	=$_POST['nama'];
	$nis	=$_POST['nis'];
	$idkelas=$_POST['idkelas'];
        $pass=md5($_POST['nama'];

	$sql="INSERT INTO siswa SET nis='$nis', nama='$nama', password='$pass', idkelas='$idkelas', memilih=''";
	$simpan=mysqli_query($koneksi,$sql);
	if($simpan){
		header('Location:index.php?m=siswa&s=awal');
		//echo "berhasil";
	}else{
                var_dump($sql);
		include "index.php?m=siswa&s=awal";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal Ditambahkan.")';
		echo '</script>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>
