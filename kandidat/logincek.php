<?php
include_once "../sambungan.php";

$user = mysqli_real_escape_string($_POST['username']);
$pass = $_POST['password'];
$sql = "SELECT * FROM kandidat WHERE username='$user' AND aktif='Y'";
$login=mysqli_query($koneksi,$sql);
$ketemu=mysqli_num_rows($login);
$b=mysqli_fetch_array($login);
if($ketemu>0){
	if(password_verify($pass, $b['password'])){
		session_start();
		$_SESSION['idkkasis'] 		= $b['idkandidat'];
		$_SESSION['userkkasis']		= $b['username'];
		$_SESSION['namakkasis']		= $b['nama'];
		$_SESSION['visikkasis'] 	= $b['visi'];
		$_SESSION['misikkasis'] = $b['misi'];
		if($b['foto']==""){
			$_SESSION['fotokkasis'] = "0.jpg";
		}else{
			$_SESSION['fotokkasis'] = $b['foto'];
		}
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
