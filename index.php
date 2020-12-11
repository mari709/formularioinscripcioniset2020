<?php
    require('pdf/fpdf.php');
    require('conexion.php');
    
?>

<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ISET 2020</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos/styles.css">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" >Inscripcion ISET 2020</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><?php /* echo $result; */ ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/nicolaspj/formularioinscripcioniset2020/blob/master/formulario-de-inscripcion.jpeg">Descarga</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://es-la.facebook.com/isetmdq/">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <h1>Instituto Superior de Estudios Técnicos</h1>
    <h2>Ficha de inscripción</h2>
  </header>

  <div class="contenedor">
    <form action="results2.php" method="post" class="p-4 mb-4">
      <div class="container-fluid">
        <label for="carrera">Seleccionar carrera</label>
        <select class="form-control" name="carrera">
          <option>Tecnicatura en Análisis en calidad alimentos</option>
          <option>Instrumentación quirúrgica</option>
          <option>Tecnicatura en programación(CETEC)</option>
          <option>Tecnicatura en Análisis de sistemas(CETEC)</option>
          <option>Enfermería</option>         
        </select>
        <label for="nombre">Nombre/s*</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="apellido">Apellido/s*</label>
        <input type="text" name="apellido" id="apellido" required>
        <label for="dni">DNI*</label>
        <input type="number" name="dni" id="dni" required>
        <label for="edad">Edad</label>
        <input type="number" min="17" max="99" name="edad" id="edad">
        <label for="nacionalidad">Nacionalidad</label>
        <input type="text" name="nacionalidad" id="nacionalidad">
        <label for="tituloSecundario">Titulo secundario</label>
        <input type="text" name="tituloSecundario" id="tituloSecundario">
        <label for="nroDeRegistro">Nro. de registro de Titulo Secundario</label>
        <input type="number" name="nroDeRegistro" id="nroDeRegistro">
        <label for="expedidoPor">Expedido por</label>
        <p><small>Institucion que expide el titulo secundario (Ejemplo: Escuela Tecnica n°5)</small></p>
        <input type="text" name="expedidoPor" id="expedidoPor">
        <label for="direccion">Direccion*</label>
        <input type="text" name="direccion" id="direccion" required>
        <label for="telefonoFijo">Telefono fijo</label>
        <input type="number" name="telefonoFijo" id="telefonoFijo">
        <label for="celular">Celular*</label>
        <input type="number" name="celular" id="celular" required>
        <label for="correoElectronico">Correo electronico*</label>
        <input type="email" name="correoElectronico" id="correoElectronico" required>
        <!-- <label for="firma">Firma: </label><br><br><br><br> -->
        <input type="submit" class="btn btn-primary" name="Enviar" >
      </div>
    </form>
  </div>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="estilos/styles.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   
</body>

</html>
