<?php
if(isset($_POST['simpan'])){
	include "../sambungan.php";
	include "../fungsi/upload.php";
	$sandi	=md5($_POST['nama']);
	$nip	=$_POST['nip'];
	$nama	=$_POST['nama'];

	$sql="INSERT INTO guru SET nip='$nip', nama='$nama', password='$sandi', memilih=''";
	$simpan=mysqli_query($koneksi,$sql);
	if($simpan){
		header('Location:index.php?m=guru');
		//echo "berhasil";
	}else{
                var_dump($sql);
		include "?m=guru";
		echo '<script language="JavaScript">';
			echo 'alert("Data Gagal Ditambahkan, kemungkinan username sudah digunakan.")';
		echo '</script>';
		//var_dump($sql);
	}
	echo '<script>window.history.back()</script>';

}else if(isset($_POST['import'])){
include "../sambungan.php";
require '../assets/phpspreadsheet/vendor/autoload.php';

    $arr_file = explode('.', $_FILES['file']['name']);
    $extension = end($arr_file);

    if('csv' == $extension) {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
    } else {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    }

    $spreadsheet = $reader->load($_FILES['file']['tmp_name']);
    $sheetData = $spreadsheet->getActiveSheet()->toArray();
        $sql = "INSERT INTO guru (nip,nama,password,memilih) VALUES";
        for($i = 1;$i < count($sheetData);$i++) {
        $nip = $sheetData[$i]['1'];
        $nama = $sheetData[$i]['2'];
        $pass = md5($sheetData[$i]['2']);
        $sql .= " ('$nip','$nama','$pass',''),";
        }
        $sql = substr($sql, 0, -1);
        $import = mysqli_query($koneksi,$sql);
        if($import){
                header('Location:index.php?m=guru&s=awal');
                //echo "berhasil";
        }else{
                var_dump($sql);
                include "index.php?m=guru&s=awal";
                echo '<script language="JavaScript">';
                        echo 'alert("Data Gagal Ditambahkan.")';
                echo '</script>';
        }
    echo '<script>window.history.back()</script>';
}
?>
