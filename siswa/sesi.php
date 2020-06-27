<?php
if(empty($_SESSION['idskasis']) AND empty($_SESSION['namaskasis'])){
	header('location:login.php');
}
?>
