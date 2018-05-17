<?php
	//require_once("../../../../wp-blog-header.php");
	//require_once('../../../../wp-load.php');
	$response = array();
	$codigo = (isset($_REQUEST['codigo'])) ? filter_var($_REQUEST['codigo'], FILTER_SANITIZE_STRING) : null ;
	$name = (isset($_REQUEST['name'])) ? filter_var($_REQUEST['name'], FILTER_SANITIZE_STRING) : null ;
	$email = (isset($_REQUEST['email'])) ? filter_var($_REQUEST['email'], FILTER_SANITIZE_EMAIL) : null ;
	$city =  (isset($_REQUEST['city'])) ? filter_var($_REQUEST['city'], FILTER_SANITIZE_STRING) : null ;
	$phone =  (isset($_REQUEST['phone'])) ? filter_var($_REQUEST['phone'], FILTER_SANITIZE_STRING) : null ;
	$message = (isset($_REQUEST['message'])) ? filter_var($_REQUEST['message'], FILTER_SANITIZE_STRING) : null ;

if ($name!=null && $phone!=null && $email!=null && $message!=null) {


	$msg="<table><thead><th colspan='2'>Un nuevo mensaje ha sido enviado desde el portal web:</th></thead>
	<tbody>
	<tr><td><strong>Codigo: </strong></td><td>".$codigo."</td></tr>
	<tr><td><strong>Nombre: </strong></td><td>".$name."</td></tr>
	<tr><td><strong>E-Mail: </strong></td><td>".$email."</td></tr>
	<tr><td><strong>Ciudad: </strong></td><td>".$city."</td></tr>
	<tr><td><strong>Tel&eacute;fono:</strong></td><td>".$phone."</td></tr>
	<tr><td><strong>Mensaje: </strong></td><td>".$message."</td></tr>
	</tbody>
	</table>
	";
	$title = "Nuevo mensaje de interese en CGR";
	$to = 'administracion@cgrbiotecnologia.com';

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$headers .= 'To: '.$to.'' . "\r\n";
	$headers .= 'From: Servicio Al Cliente <info@cgr.com>' . "\r\n";

	if(mail( $to, $title, $msg, $headers)){
		$response['message'] = "exito";
		$response['success'] = true;
	}
	else{
		$response['message'] = "error";
		$response['success'] = false;
	}
}
echo json_encode($response);
