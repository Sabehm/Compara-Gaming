<?php
$puta=$_POST['input'];
session_start();
$putita = str_replace(" ", "%20", $puta);
$_SESSION['game']=$putita;
echo 1;
?>