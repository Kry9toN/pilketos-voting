<!DOCTYPE html>
<html>
<body>
<center>
<img style = "width: 8%; ; " src="https://www.w3schools.com/images/stop.gif"  alt=""  />
<h1> SUDAH AKU BILANG <h1/>
<p> disini kosong, sudah berapa kali bapak ngomong kek gini <p>

<br>

<h1>Data Capture</h1>
<?php
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else if(isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    } else if(isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    } else if(isset($_SERVER['HTTP_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    } else if(isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    } else {
        $ipaddress = 'UNKNOWN';
    }
echo '<h4> IP: '.$ipaddress.'</h4>';

$useragen = $_SERVER['HTTP_USER_AGENT'];
echo '<h4> User: '.$useragen.'</h4>';

	include "../sambungan.php";
	include "../fungsi/upload.php";

	$sql="INSERT INTO logadmin SET ip='$ipaddress', useragen='$useragen'";
	$simpan=mysqli_query($koneksi,$sql);
?>
</center>
<script>
function openWin()
{
myWindow=window.open("","","width=200,height=100");
myWindow.document.write("<p>NGENGKEL</p>");
}

setTimeout(function(){alert("Virus/Malware has ben ijected on your device"); }, 2000);
</script>

</body>
</html>
