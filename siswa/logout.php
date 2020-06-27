<?php
session_start();
unset($_SESSION['idskasis']);
unset($_SESSION['namaskasis']);
unset($_SESSION['kelasskasis']);
echo "<script>window.location='../'</script>";	
//session_destroy();
//  unset($_SESSION["sessidpks"]);
?>
