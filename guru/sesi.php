<?php
if(empty($_SESSION['idgkasis']) AND empty($_SESSION['namagkasis'])){
	header('location:login.php');
}
?>
