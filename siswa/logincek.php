<?php
include_once "../sambungan.php";

$nama = mysqli_real_escape_string($koneksi,$_POST['nama']);
$pass = $_POST['password'];
$sql = "SELECT * FROM siswa WHERE nama='$nama'";
$login=mysqli_query($koneksi,$sql);
$ketemu=mysqli_num_rows($login);
$b=mysqli_fetch_array($login);
if($ketemu>0){
	if(password_verify($pass, $b['password'])){
		session_start();
		$_SESSION['idskasis'] 		= $b['nis'];
		$_SESSION['namaskasis']		= $b['nama'];
		$idkelas=$b['idkelas'];
		$sql2 = "SELECT * FROM kelas WHERE idkelas='$idkelas'";
		$aksi=mysqli_query($koneksi,$sql2);
		$c=mysqli_fetch_array($aksi);
		$_SESSION['kelasskasis'] 	= $c['kelas'];
		header('location: index.php?m=awal');
	}else{
		include "login.php";
        echo '<script language="javascript">';
            echo 'document.getElementById("salah").innerHTML = "<div class=\'alert alert-danger\' role=\'alert\'>Password anda salah!!</div>"';
        echo '</script>';
	}
}else{
	include "login.php";
  echo '<script language="javascript">';
		echo 'document.getElementById("salah").innerHTML = "<div class=\'alert alert-danger\' role=\'alert\'>Username dan password anda tidak terdaftar!!</div>"';
	echo '</script>';
}
?>
