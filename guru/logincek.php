<?php
include_once "../sambungan.php";

$nama = $_POST['nama'];
$pass = md5($_POST['password']);
$sql = "SELECT * FROM guru WHERE nama='$nama' AND password='$pass'";
$login=mysqli_query($koneksi,$sql);
$ketemu=mysqli_num_rows($login);
$b=mysqli_fetch_array($login);
if($ketemu>0){
	session_start();
	$_SESSION['idgkasis'] 		= $b['nip'];
	$_SESSION['namagkasis']		= $b['nama'];
	header('location: index.php?m=awal');
}else{
	include "login.php";
	echo '<script language="javascript">';
		echo 'document.getElementById("salah").innerHTML = "<div class=\'alert alert-danger\' role=\'alert\'>Username dan password anda tidak terdaftar!!</div>"';
	echo '</script>';
}
?>
