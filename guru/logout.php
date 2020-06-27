<?php
session_start();
unset($_SESSION['idgkasis']);
unset($_SESSION['namagkasis']);
echo "<script>window.location='../'</script>";
//session_destroy();
//  unset($_SESSION["sessidpks"]);
?>
