<?php

include("class.phpmailer.php");
include("class.smtp.php");

	include('conn.php');
	session_start();


	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	function check_input($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
	$nombre=check_input($_POST['nombre']);
	$apellido=check_input($_POST['apellido']);
	$email=check_input($_POST['email']);
	$telefono=check_input($_POST['telefono']);
	$verify=1;

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  		$_SESSION['sign_msg'] = "El formato de su correo electrónico no es correcto.";
  		header('location:registrate.php');
	}

	else{

		$query=mysqli_query($conn,"select * from usuarios where Email='$email'");
		if(mysqli_num_rows($query)>0){
			$_SESSION['sign_msg'] = "Tu E-mail ya se encuenta registrado.";
  			header('location:registrate.php');
		}
		else{
		//depends on how you set your verification code
		$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$code=substr(str_shuffle($set), 0, 12);

        //Registrar usuario
		mysqli_query($conn,"insert into usuarios (Nombre, Apellido, Email, celular, code, verify) values ('$nombre','$apellido','$email', '$telefono', '$code', '$verify')");
		$uid=mysqli_insert_id($conn);
		
		//Crear cartilla para el usuario creado
		mysqli_query($conn,"insert into cartilla (Id_usuario, Finalizada) values ('$uid','no')");

		
		//default value for our verify is 0, means it is unverified

//Envio de correo

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "mail.dada.com.ec";
$mail->Port = 465;
$mail->Username = "smtp@dada.com.ec";
$mail->Password = "nb(uMm,9mi^}";

$mail->From = "info@dada.com.ec";
$mail->FromName = "Kiosko Ecuador";
$mail->Subject = "Kiosko te da la bienvenida a La Ruta del Queso";
$mail->AltBody = "Ingresa y comienza a llenar tu cartilla con los códigos de tus productos Kiosko.";
$mail->MsgHTML("
<html>
				<head>
				<title>Bienvenidos a la Ruta del Queso</title>
				</head>
				<body>
				<h4>Hola ".$nombre .", gracias por registrarte.<br><br> Bienvenido a la ruta del queso en Italia, el concurso que El Kiosko ha creado para ti, por consumir nuestros productos. </h4>
				<p>Los datos de su cuenta son los siguientes:</p>
				<p>Nombre: ".$nombre ." ". $apellido."</p>
				<p>E-mail: ".$email."</p>
				<p>Teléfono: ".$telefono."</p>
				<p>Recuerda revisar los <a href='http://www.dada.com.ec/rutadelqueso/productos_participantes.php'><B>productos participantes en la promoción.</B></a></p>
				<P>Revisa los <a href='http://www.rutadelqueso.ec/terminos_y_condiciones.php'>términos y condiciones</a> del concurso en nuestro sitio web.</P>
				<p>Para participar en el concurso compra los <a href='http://www.rutadelqueso.ec/productos_participantes.php'>productos participantes</a> encuentra los códigos en su interior y llena tu cartilla virtual ingresando a <a href='http://www.rutadelqueso.ec'>www.larutadelqueso.ec</a></p>
				<p>Mientras más cartillas llenes tienes más oportunidad de ganar el sorteo del viaje a Italia en la ruta del queso.</p>
				<p>Además puedes ganar instantáneamente GiftCards de 100 dólares cuando encuentres en el interior del empaque del producto el sticker ganador.</p>
				<p>Gracias por consumir productos El Kiosko, Esperamos seas el ganador del concurso y verte en La Ruta del Queso en Italia.</p>
				</body>
				</html>
");
//$mail->AddAttachment("files/files.zip");
//$mail->AddAttachment("files/img03.jpg");
$mail->AddAddress($email, ".$nombre .. $apellido.");
$mail->IsHTML(true);
 
if(!$mail->Send()) {
  echo "Error: " . $mail->ErrorInfo;
} else {
  echo "Mensaje enviado correctamente";
}

// fin envio de correo





		$_SESSION['sign_msg'] = "Bienvenido a la ruta del Queso de Kiosko, Ingresa y comienza a llenar tus cartillas.";
  		header('location:registrate.php');

  		}
	}
	}
?>