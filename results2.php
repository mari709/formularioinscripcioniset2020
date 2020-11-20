<?php
    require('pdf/fpdf.php');
    require('conexion.php');
    //error_reporting(E_ALL ^ E_NOTICE); 
    error_reporting(0); 
    
   class PDF extends FPDF
   {

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
    $diaTurno = '20201009';
    $horaTurno = '09:30';
    //$result = pg_query($db_connection, "Insert into Registros (nombre,apellido,email,dni,diaturno,horaturno,carrera)values('"+$nombre+"','"+$apellido+"','"+$correoElectronico+"',"+$dni+",'"+$diaTurno+"','"+$horaTurno+"','"+$carrera+"'");

    //$query = "Insert into Registros (nombre,apellido,email,dni,diaturno,horaturno,carrera)values('dario','swidzinski','dsw@hotmail.com',2,'20191220','10:15','progrmacion')";
    $query = "Insert into Registros (nombre,apellido,email,dni,diaturno,horaturno,carrera)values('".$nombre."','".$apellido."','".$correoElectronico."',".$dni.",'".$diaTurno."','".$horaTurno."','".$carrera."')";
    $result = mysqli_query($link, $query);

    //echo "$query";
    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->SetFont('arial','B',16);
    $pdf->Cell(70,10,'Carrera: ',0,0,'L');
    $pdf->Cell(70,10,iconv('UTF-8', 'ISO-8859-1', $carrera),0,1,'C');
    $pdf->Image('LogoIset.png',10,5,-400);
    $pdf->Ln(30);

    $pdf->SetFont('arial','B',12);
    $pdf->Cell(80,10,'Nombre: ');
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
    $pdf->Cell(80,20,$correoElectronico,1,1,'L');
    $pdf->Cell(80,10,'Firma',0,0,'L');
    $pdf->Cell(80,20,'',1,1,'L');

    $pdf->Output();
?>


