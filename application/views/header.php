<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

 <!--Para compativilidad con Android y edge-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundial Qatar 2022 </title>

    <!--importando jQuery-->

    <script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>




 <!--importando CDN BOOSSTROP 3-->

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- importacion de jquery_validate? -->
    <script type="text/javascript" src="<?php echo base_url('assets/librerias/validate/jquery.validate.min.js');?>"> </script>
     <script type="text/javascript" src="<?php echo base_url('assets/librerias/validate/additional-methods.min.js');?>"> </script>
     <script type="text/javascript" src="<?php echo base_url('assets/librerias/validate/messages_es_AR.min.js'); ?>"> </script>



     <!-- Importación de DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
</head>
<!-- Pegar debajo del body -->

<body>



    <div class="w-100 p-3">
        <div class="container-fluid">
            <div class="row">
                        <div class="col-md-4 text-center ">
                    <center>

                    <img src="<?php echo base_url(); ?>/assets/images/fifa1.png" alt="logo" >
                    </center>


                </div>
                <div class="col-md-4 text-center ">
                    <center>
                      <br><br>

                    <img src="<?php echo base_url(); ?>/assets/images/fifa3.png" alt="logo" >
                    </center>

                </div>
                <div class="col-md-4 text-center ">
                    <center>
                    <img src="<?php echo base_url(); ?>/assets/images/fifa2.png" alt="logo" >
                    </center>

                        </div>
                    </div>
        </div>
    </div>



    <nav class="navbar navbar-inverse">
      <center>
      <div class="container-fluid" style="background-color: black;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">


      <!-- Para la navegacion y denominamos el nombre  -->
      <a class="navbar-brand" href="<?php echo site_url(); ?>">QATAR 2022</a>


    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">



        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >EQUIPOS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('equipos/index'); ?>">Listado</a></li>
            <li><a href="<?php echo site_url('equipos/nuevo'); ?>">Nuevo</a></li>

          </ul>
        </li>





        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">JUGADORES <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('jugadores/index'); ?>">Listado</a></li>
            <li><a href="<?php echo site_url('jugadores/nuevo'); ?>">Nuevo</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ESTADIOS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('estadios/index'); ?>">Listado</a></li>
            <li><a href="<?php echo site_url('estadios/nuevo'); ?>">Nuevo</a></li>
          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GRUPOS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('grupos/index'); ?>">Listado</a></li>
            <li><a href="<?php echo site_url('grupos/nuevo'); ?>">Nuevo</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TABLA DE POSICIONES <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('tipos/index'); ?>">Listado</a></li>
            <li><a href="<?php echo site_url('tipos/nuevo'); ?>">Nuevo</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OCTAVOS<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('colegios/index'); ?>">Listado</a></li>
            <li><a href="<?php echo site_url('colegios/nuevo'); ?>">Nuevo</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CUARTOS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('cursos/index'); ?>">Listado</a></li>
            <li><a href="<?php echo site_url('cursos/nuevo'); ?>">Nuevo</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SEMIFINAL <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('docentes/index'); ?>">Listado</a></li>
            <li><a href="<?php echo site_url('docentes/nuevo'); ?>">Nuevo</a></li>
          </ul>
        </li>


      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</center>
</nav>
