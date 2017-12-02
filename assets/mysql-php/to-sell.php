<?php 
	session_start();
	require 'connection-mysql.php';
	$usuarios = $mysqli->query("CALL altaJuego('".$_SESSION['user']."','".$_POST['title']."','".$_POST['price']."','".$_POST['status']."','".$_POST['platform']."','".$_POST['description']."','NULL');");
	$result = $usuarios->fetch_row();
	//echo $result[0];
	if ($result[0] == 1):
		# code...
		echo json_encode(array('error' => false));
	else:
		# code...
		echo json_encode(array('error' => true));
	endif;
?>