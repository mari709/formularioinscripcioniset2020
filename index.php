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
    <title>Inscripciones ISET 2021</title>
    <link rel="icon" href="./LogoIset.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/styles.css">
</head>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <!-- <a class="navbar-brand"></a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
<!--           <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://github.com/mari709/formularioinscripcioniset2020">Proyecto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://iset-bue.infd.edu.ar/">Plataforma</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://es-la.facebook.com/isetmdq/">Facebook</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="pt-5 mt-5 text-center">
    <h1>Instituto Superior de Estudios Técnicos</h1>
    <img src="LogoIset.png" alt="logo iset" width="200"  />
  </header>

  <div class="contenedor">
    <form action="results2.php" method="post" class="p-4 mb-4">
      <div class="container-fluid">
      <h2 class="text-center"><span class="badge">Ficha de inscripción<span></h2>
      <div class="form-group">  
        <label for="carrera">Selecciona la carrera </label>
          <select class="form-control" name="carrera">
            <option>Tecnicatura en Análisis en calidad alimentos</option>
            <option>Instrumentación quirúrgica</option>
            <option>Tecnicatura en programación(CETEC)</option>
            <option>Tecnicatura en Análisis de sistemas(CETEC)</option>
            <option>Enfermería</option>         
          </select>
      </div>
      <div class="form-group">
        <label for="nombre">Nombre/s*</label>
        <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre/s" required>
      </div>  
      <div class="form-group">
        <label for="apellido">Apellido/s*</label>
        <input class="form-control" type="text" name="apellido" id="apellido" placeholder="Ingresa tu apellido" required>
      </div>
      <div class="form-group">
        <label for="dni">DNI*</label>
        <input class="form-control" type="number" name="dni" id="dni" placeholder="Ingresa tu número de DNI" required>
      </div>
      <div class="form-group">
        <label for="edad">Edad</label>
        <input class="form-control" type="number" min="17" max="99" name="edad" id="edad" placeholder="Ingresa tu edad">
      </div>
      <div class="form-group">
        <label for="nacionalidad">Nacionalidad</label>
        <input class="form-control" type="text" name="nacionalidad" id="nacionalidad" placeholder="Ingresa tu nacionalidad" >
      </div>
      <div class="form-group">
        <label for="direccion">Direccion*</label>
        <input class="form-control" type="text" name="direccion" id="direccion" placeholder="Ingresa tu dirección" required>
      </div>
      <div class="form-group">
        <label for="celular">Celular*</label>
        <input class="form-control" type="number" name="celular" id="celular" placeholder="Ingresa tu número de telefono Celular" required>
      </div>
      <div class="form-group">
        <label for="telefonoFijo">Telefono fijo</label>
        <input class="form-control" type="number" name="telefonoFijo" id="telefonoFijo">
      </div>
      <div class="form-group form-group-secundaria">
        <label for="tituloSecundario">Titulo secundario</label>
        <input class="form-control" type="text" name="tituloSecundario" id="tituloSecundario">
      </div>
      <div class="form-group">
        <label for="nroDeRegistro">Nro. de registro de Titulo Secundario</label>
        <input class="form-control" type="number" name="nroDeRegistro" id="nroDeRegistro">
      </div>
      <div class="form-group">
        <label for="expedidoPor">Expedido por<small> - Institución que expide el título secundario (Ejemplo: Escuela Tecnica n°5)</small></label>
        <input class="form-control" type="text" name="expedidoPor" id="expedidoPor">
      </div>
      <div class="form-group">
        <label for="correoElectronico">Email* <small>Allí te enviaremos tu comprobante de preinscripción</small></label>
        <input class="form-control" type="email" name="correoElectronico" id="correoElectronico" required placeholder="Ingresa tu dirección de correo electronico" >
      </div>
        <br>
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
