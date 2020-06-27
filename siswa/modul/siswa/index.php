<?php
include_once "sesi.php";

$modul=(isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal': default: include "modul/siswa/profil.php"; break;
	case 'profil': include "modul/siswa/profil.php"; break;
	case 'pilihan': include "modul/siswa/pilihan.php"; break;
}
?>
