<?php
    require_once('head.php'); 
    require('pdf/fpdf.php');
    require('conexion.php');

    //error_reporting(E_ALL ^ E_NOTICE); 
    error_reporting(0); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

    
   class PDF extends FPDF
   {
    
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('LogoIset.png',10,8,33);
        // Arial bold 15
        $this->SetFont('Arial','B',20);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(60,25,'Inscripciones 2021',0,0,'C');
        // Salto de línea
        $this->Ln(20);
    }
    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10, iconv('UTF-8', 'ISO-8859-1','Página '.$this->PageNo().'/{nb}'),0,0,'C');
    }
   }
    $carrera = $_POST["carrera"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
    $edad = $_POST["edad"];
    $nacionalidad = $_POST["nacionalidad"];
    $tituloSecundario = $_POST["tituloSecundario"];
    $nroDeRegistro = $_POST["nroDeRegistro"];
    $expedidoPor = $_POST["expedidoPor"];
    $direccion = $_POST["direccion"];
    $telefonoFijo = $_POST["telefonoFijo"];
    $celular = $_POST["celular"];
    $correoElectronico = $_POST["correoElectronico"];
    //$diaTurno = '20201009';
    //$horaTurno = '09:30';
    //$result = pg_query($db_connection, "Insert into Registros (nombre,apellido,email,dni,diaturno,horaturno,carrera)values('"+$nombre+"','"+$apellido+"','"+$correoElectronico+"',"+$dni+",'"+$diaTurno+"','"+$horaTurno+"','"+$carrera+"'");

    //$query = "Insert into Registros (nombre,apellido,email,dni,diaturno,horaturno,carrera)values('dario','swidzinski','dsw@hotmail.com',2,'20191220','10:15','progrmacion')";
    $query = "Insert into Registros (nombre,apellido,email,dni,carrera,edad,nacionalidad,titulosecundario,celular)
    values('".$nombre."','".$apellido."','".$correoElectronico."',".$dni.",'".$carrera."','".$edad."','".$nacionalidad."','".$titulosecundario."','".$celular."')";
    $result = mysqli_query($link, $query);

    //echo "$query";

    //creacion del objeto de la clase heredad
    //$pdf = new FPDF();
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();

    $pdf->SetFont('arial','B',10);

    $pdf->Ln(30);
    $pdf->Cell(80,10,'Carrera: ',0,0,'L');
    $pdf->Cell(80,10,iconv('UTF-8', 'ISO-8859-1', $carrera),1,1,'L');

    $pdf->Cell(80,10,'Nombre: ',0,0,'L');
    $pdf->Cell(80,10,iconv('UTF-8', 'ISO-8859-1',$nombre),1,1,'L');

    $pdf->Cell(80,10,'Apellido: ',0,0,'L');
    $pdf->Cell(80,10,iconv('UTF-8', 'ISO-8859-1',$apellido),1,1,'L');

    $pdf->Cell(80,10,'DNI: ',0,0,'L');
    $pdf->Cell(80,10,$dni,1,1,'L');
    $pdf->Cell(80,10,'Edad: ');
    $pdf->Cell(80,10,$edad,1,1,'L');
    $pdf->Cell(80,10,'Nacionalidad: ',0,0,'L');
    $pdf->Cell(80,10,iconv('UTF-8', 'ISO-8859-1',$nacionalidad),1,1,'L');
    $pdf->Cell(80,10,iconv('UTF-8', 'ISO-8859-1','Título Secundario: '),0,0,'L');
    $pdf->Cell(80,10,iconv('UTF-8', 'ISO-8859-1',$tituloSecundario),1,1,'L');
    $pdf->Cell(80,10,'Nro de Registro: ',0,0,'L');
    $pdf->Cell(80,10,$nroDeRegistro,1,1,'L');
    $pdf->Cell(80,10,'Expedido Por: ',0,0,'L');
    $pdf->Cell(80,10,iconv('UTF-8', 'ISO-8859-1',$expedidoPor),1,1,'L');
    $pdf->Cell(80,10,iconv('UTF-8', 'ISO-8859-1', 'Dirección: '),0,0,'L');
    $pdf->Cell(80,10,iconv('UTF-8', 'ISO-8859-1',$direccion),1,1,'L');
    $pdf->Cell(80,10,'Telefono Fijo: ',0,0,'L');
    $pdf->Cell(80,10,$telefonoFijo,1,1,'L');
    $pdf->Cell(80,10,'Celular: ',0,0,'L');
    $pdf->Cell(80,10,$celular,1,1,'L');
    $pdf->Cell(80,10,iconv('UTF-8', 'ISO-8859-1','Correo Electrónico: '),0,0,'L');
    $pdf->Cell(80,10,$correoElectronico,1,1,'L');
    $pdf->Cell(80,30,'Firma',0,0,'L');
    $pdf->Cell(80,30,'',1,1,'L');

    //$pdf->Output();
    $archivoPdf = $pdf->Output('','S'); 


    // Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'inscripcioniset@gmail.com';                     // SMTP username
    $mail->Password   = 'aca va la clave';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('inscripcioniset@gmail.com');
    //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress($correoElectronico);               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Datos aspirante 2021 ISET';
    $mail->Body    = '¡Hola! <br>Gracias por realizar tu preinscripción. En este correo se encuentran los datos que nos indicaste. <br><b>ISET - Mar del Plata</b>';
    $mail->AltBody = 'Gracias por realizar tu preinscripción. En este correo se encuentran los datos que nos indicaste.';
    $mail->AddStringAttachment($archivoPdf,'preinscripcionISET.pdf','base64');

    $mail->send();
    echo '<div class="container mt-5 text-center">
     <h1 class="mt-5">Tu solicitud fue enviada con éxito</h1>
     <p>Gracias por completar tu preiscripción.<br>
     Te enviamos una copia de los datos ingresados a la dirección de correo que nos indicaste :) </p><br><br>
             <a class="btn btn-primary" href="./index.php">Realizar otra inscripción</a>
    </div>';
} catch (Exception $e) {
    echo "La inscripción no se pudo realizar :(  Error: {$mail->ErrorInfo}";
}



?>


