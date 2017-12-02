<?php 
 session_start(); 

require_once("../mysql-php/connection.php");


$Nombre=$_POST['nombre'];
$email=$_POST['email'];
$password=$_POST['pwd'];
$Paterno=$_POST['paterno'];
$Materno=$_POST['materno'];
$Vali=getquery('SELECT * from clientes where email="'.$email.'";');
$sal=0;
if(empty($Vali[0]['idUsers']))
{
  
  $NuevoU=IngresarUsuario($Nombre,$Paterno,$Materno,$email,$password);
  $CerrarConexion=closeConn();
  $sal=1;  

}
else
{
	if($Vali[0]['Flag']==1)
	{
		$change=ModificarUsuario($Nombre,$Paterno,$Materno,$email,$password,$Vali[0]['idUsers'],$Edad);
		$cambia=getquery('Update Users set flag=0 where idUsers='.$Vali[0]['idUsers'].';');
		$CerrarConexion=closeConn();
		$sal=1;
	}
	else{
	$CerrarConexion=closeConn();
	$sal=0; }
}
echo $sal;

 ?>