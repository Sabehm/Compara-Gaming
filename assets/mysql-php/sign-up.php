<?php 
	require 'connection-mysql.php';
	$signup = $mysqli->query("CALL altaCliente('".$_POST['email']."','".$_POST['name']."','".$_POST['firstn']."','".$_POST['surn']."','".$_POST['password']."');");
	$result = $signup->fetch_row();
	//echo $result[0];
	if ($result[0] == 1):
		# code...
		echo json_encode(array('error' => false));
	else:
		# code...
		echo json_encode(array('error' => true));
	endif;
?>