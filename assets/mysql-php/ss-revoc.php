<?php

	use PHPMailer\src\PHPMailer;
	use PHPMailer\src\Exception;
	require 'connection-mysql.php';
	$ss = $mysqli->query("SELECT PASS FROM CLIENTES WHERE EMAIL = '".$_POST['email']."';");

	if ($ss->num_rows() > 0):
		# code...
		echo json_encode(array('error' => false));
		$send = true;
	else:
		# code...
		echo json_encode(array('error' => true));
		$send = false;
	endif;

	if ($send):
		# send mail...

	endif;
?>