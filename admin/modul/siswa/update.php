<?php
if(isset($_POST['simpan'])){
	include_once "../sambungan.php";
	$id=$_POST['nis'];
	$nama	=$_POST['nama'];
	$idkelas=$_POST['kelas'];
        $pass=md5($_POST['nama']);

	$sql="UPDATE siswa SET nama='$nama', password='$pass', idkelas='$idkelas' WHERE nis='$id'";
	$simpan=mysqli_query($koneksi,$sql);
	//var_dump($sql);
	if($simpan){
		header('Location:index.php?m=siswa');
		//echo "berhasil";
	}else{
		//echo "gagal alias tidak berhasil";
                var_dump($sql);
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
