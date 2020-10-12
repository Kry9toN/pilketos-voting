<?php
if(isset($_POST['simpan'])){
	include "../sambungan.php";
	include "../fungsi/upload.php";
	$nama	=$_POST['nama'];
	$nis	=$_POST['nis'];
	$idkelas=$_POST['idkelas'];
    $pass=password_hash($_POST['nis'], PASSWORD_DEFAULT);

	$sql="INSERT INTO siswa SET nis='$nis', nama='$nama', password='$pass', idkelas='$idkelas'";
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
        $sql = "INSERT INTO siswa (nis,nama,password,idkelas) VALUES";
	for($i = 1;$i < count($sheetData);$i++) {
        $nis = $sheetData[$i]['1'];
        $nama = $sheetData[$i]['2'];
        $pass = md5($sheetData[$i]['1']);
        $kelas = $sheetData[$i]['3'];
        $sql .= " ('$nis','$nama','$pass','$kelas'),";
        }
        $sql = substr($sql, 0, -1);
        $import = mysqli_query($koneksi,$sql);
        if($import){
                header('Location:index.php?m=siswa&s=awal');
                //echo "berhasil";
        }else{
                var_dump($sql);
                include "index.php?m=siswa&s=awal";
                echo '<script language="JavaScript">';
                        echo 'alert("Data Gagal Ditambahkan.")';
                echo '</script>';
        }
    echo '<script>window.history.back()</script>';
}
?>

