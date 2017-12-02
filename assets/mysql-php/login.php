<?php 
	session_start();
	require 'connection-mysql.php';
	$usuarios = $mysqli->query("call inicioSesion('".$_POST['email']."','".$_POST['password']."');");
	$result = $usuarios->fetch_row();
	//echo $result[0];
	if ($result[0] == 1):
		# code...
		echo json_encode(array('error' => false));
		$_SESSION['user'] = $_POST['email'];
	else:
		# code...
		echo json_encode(array('error' => true));
	endif;
?>