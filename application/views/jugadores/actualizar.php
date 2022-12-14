<div class="row">
  <div class="col-md-12 text-center well">
    <h3><b>ACTUALIZAR JUGADORES</b> </h3>
  </div>
  <br>
  <center>
    <a href="<?php echo site_url('jugadores/index') ?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> REGRESAR</a>
  </center>
  <br><br>
  <div class="row">
    <div class="col-md-12">

      <?php if ($jugadorEditar): ?>

        <form class="" action="<?php echo site_url('jugadores/procesarActualizacion'); ?> " method="post">
          
          <center> 
            <input type="hidden" name="id_jug" value="<?php echo $jugadorEditar->id_jug;?>">
          </center>

  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NOMBRE</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="nombre_jug" value="<?php echo $jugaddrEditar->nombre_jug;?>"class="form-control" placeholder="Ingrese el nombre del jugador" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">APELLIDO</label>

    </div>
    <div class="col-md-7">
      <input type="text" name="apellido_jug" value="<?php echo $jugadorEditar->apellido_jug;?>"class="form-control" placeholder="Ingrese el apellido del jugador" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">EDAD</label>

    </div>
    <div class="col-md-7">
      <input type="number" name="edad_jug" value="<?php echo $jugadorEditar->edad_jug;?>"class="form-control" placeholder="Ingrese la edad del jugador" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">CLUB</label>

    </div>
    <div class="col-md-7">
      <input type="text" name="club_jug" value="<?php echo $jugadorEditar->club_jug;?>"class="form-control" placeholder="Ingrese el club del jugador" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">POSICION</label>

    </div>
    <div class="col-md-7">
      <input type="text" name="posicion_jug" value="<?php echo $jugadorEditar->posicion_jug;?>"class="form-control" placeholder="Ingrese la posicion del jugador" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NUMERO</label>

    </div>
    <div class="col-md-7">
      <input type="number" name="numero_jug" value="<?php echo $jugadorEditar->numero_jug;?>"class="form-control" placeholder="Ingrese el numero del jugador" required>
    </div>
  </div>
  <br>

    
    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button"class="btn btn-warning">
          <i class="glyphicon glyphicon-ok"></i>
          Actualizar
        </button>
        <a href="<?php echo site_url('jugadores/index'); ?> " class="btn btn-danger">
          <i class="glyphicon glyphicon-ok"></i>
          Cancelar
        </a>
      </div>
    </div>
</form>
<?php else: ?>


        <div class="alert alert-danger">
          <b>NO SE ENCONTRÓ JUGADORES</b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>