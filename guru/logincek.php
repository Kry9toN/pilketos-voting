<?php
include_once "../sambungan.php";

$nama = mysqli_real_escape_string($_POST['nama']);
$pass = $_POST['password'];
$sql = "SELECT * FROM guru WHERE nama='$nama'";
$login=mysqli_query($koneksi,$sql);
$ketemu=mysqli_num_rows($login);
$b=mysqli_fetch_array($login);
if($ketemu>0){
	if(password_verify($pass, $b['password'])){
		session_start();
		$_SESSION['idgkasis'] 		= $b['nip'];
		$_SESSION['namagkasis']		= $b['nama'];
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
		echo 'document.getElementById("salah").innerHTML = "<div class=\'alert alert-danger\' role=\'alert\'>Username anda tidak terdaftar!!</div>"';
	echo '</script>';
}
?>
