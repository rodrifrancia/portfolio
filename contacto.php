<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
include_once "PHPMailer/src/SMTP.php";
include_once "PHPMailer/src/PHPMailer.php";
$pg = "contacto";
$msj= "";
function guardarCorreo($correo)
{
	$archivo = fopen("mails.txt","a+");
	fwrite($archivo, $correo . ";\n\r");
	fclose($archivo);
}
if($_POST){ /* es postback */
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $asunto = $_POST["txtAsunto"];
    $mensaje = $_POST["txtMensaje"];

    if($nombre != "" && $correo != ""){
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "mail.dominio.com"; // SMTP a utilizar
        $mail->Username = "info@dominio.com.ar"; // Correo completo a utilizar
        $mail->Password = "aqui va la clave de tu correo";
        $mail->Port = 25;
        $mail->From = "info@dominio.com.ar"; //Desde la cuenta donde enviamos
        $mail->FromName = "Tu nombre a mostrar";
        $mail->IsHTML(true);
        $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );

        //Destinatarios
        $mail->addAddress($correo);
        $mail->addBCC("otrocorreo@gmail.com"); //Copia oculta
        $mail->Subject = utf8_decode("Contacto página Web");
        $mail->Body = "Recibimos tu consulta, te responderemos a la brevedad.";
        if(!$mail->Send()){
            $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
        }
        $mail->ClearAllRecipients(); //Borra los destinatarios

        //Envía ahora un correo a nosotros con los datos de la persona
        $mail->addAddress("info@dominio.com.ar");
        $mail->Subject = utf8_decode("Recibiste un mensaje desde tu página Web");
        $mail->Body = "Te escribio $nombre cuyo correo es $correo, con el asunto $asunto y el siguiente mensaje:<br><br>$mensaje";
       
		if($mail->Send()){ /* Si fue enviado correctamente redirecciona */
			
            header('Location: confirmacion-envio.php');
        } else {
            $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
        }    
    } else {
        $msg = "Complete todos los campos";
    }

}
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contacto</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap">
	<link rel="stylesheet" href="css/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900&display=swap">
	<link rel="stylesheet" href="css/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>

<body>
	<header>
		<?php
		include_once("menu.php");
		?>
	</header>
	<section id="contacto">
		<div class="container">
			<?php if(isset ($msg)&& $msg !=""): ?>
				<div class="row">
					<div class="col-12">
						<div class="alert alert-danger" role="alert">
							<?php echo $msg; ?>
						</div>
					</div>
				</div>
			<?php endif;?>
			<div class="row">
				<div class="col-12 py-4">
					<h1>¡Trabajemos juntos!</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-6 py-5">
					<h2>Para más detalles sobre mi trabajo
						podés ver mi Linkedin, descargar mi CV
						o mandarme un mensaje.</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-10 ">
					<form action="" method="POST">
						<div class="row">
							<div class="col-sm-6 col-12 py-2">
								<input type="text" placeholder="NOMBRE" name="txtNombre" class="form-control">
							</div>
							<div class="col-sm-6 col-12 py-2">
								<input type="email" placeholder="CORREO" name="txtCorreo" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-12 py-2">
								<input type="text" placeholder="ASUNTO" name="txtAsunto" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-12 py-2">
								<textarea placeholder="MENSAJE" name="txtMensaje" class="form-control" ></textarea>
							</div>
						</div>
						<div class="row">
							<div class="my-2 mx-auto mb-5">
								<button class="btn" type="submit">ENVIAR</button>
							</div>
						</div>
					</form>

				</div>

			</div>
		</div>
	</section>
	<?php
	include_once("footer.php");
	?>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>