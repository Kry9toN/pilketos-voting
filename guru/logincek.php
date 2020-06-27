<?php
include_once "../sambungan.php";

$nip = $_POST['nip'];
$pass = md5($_POST['password']);
$sql = "SELECT * FROM guru WHERE nip='$nip' AND password='$pass'";
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
		echo 'alert ("Username/Password ada yang salah, atau akun anda belum Aktif")';
	echo '</script>';
}
?>
