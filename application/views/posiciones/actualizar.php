



<div class="row">
  <div class="col-md-12 text-center well">
    <h3><b>ACTUALIZAR POSICIONES</b> </h3>
  </div>
  <br>
  <center>
    <a href="<?php echo site_url('posiciones/index') ?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> REGRESAR</a>
  </center>
  <br><br>
  <div class="row">
    <div class="col-md-12">

      <?php if ($posicionEditar): ?>

        <form class="" action="<?php echo site_url('posiciones/procesarActualizacion'); ?> " method="post">

          <center>
            <input type="hidden" name="id_pos_be" value="<?php echo $posicionEditar->id_pos_be;?>">
          </center>

  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NOMBRE</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="nombre_est_be" value="<?php echo $posicionEditar->nombre_pos_be;?>"class="form-control" placeholder="Ingrese el nombre del estadio" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">PUNTOS</label>

    </div>
    <div class="col-md-7">
      <input type="number" name="capacidad_est_be" value="<?php echo $posicionEditar->puntos_be;?>"class="form-control" placeholder="Ingrese capacidad del estadio" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">GOLES</label>

    </div>
    <div class="col-md-7">
      <input type="number" name="capacidad_est_be" value="<?php echo $posicionEditar->goles;?>"class="form-control" placeholder="Ingrese los goles" required>
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
        <a href="<?php echo site_url('estadios/index'); ?> " class="btn btn-danger">
          <i class="glyphicon glyphicon-ok"></i>
          Cancelar
        </a>
      </div>
    </div>
</form>
<?php else: ?>


        <div class="alert alert-danger">
          <b>NO SE ENCONTRÓ ESTADIOS</b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
