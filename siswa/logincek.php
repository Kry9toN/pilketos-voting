<?php
include_once "../sambungan.php";

$nama = $_POST['nama'];
$pass = md5($_POST['password']);
$sql = "SELECT * FROM siswa WHERE nama='$nama' AND password='$pass'";
$login=mysqli_query($koneksi,$sql);
$ketemu=mysqli_num_rows($login);
$b=mysqli_fetch_array($login);
if($ketemu>0){
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
		echo 'document.getElementById("salah").innerHTML = "<div class=\'alert alert-danger\' role=\'alert\'>Username dan password anda tidak terdaftar!!</div>"';
	echo '</script>';
}
?>
