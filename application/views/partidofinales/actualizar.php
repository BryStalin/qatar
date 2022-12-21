
<div class="row">
  <div class="col-md-12 text-center well">
    <h3><b>ACTUALIZAR PARTIDO FINAL</b> </h3>
  </div>
  <br>
  <center>
    <a href="<?php echo site_url('partidofinales/index') ?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> REGRESAR</a>
  </center>
  <br><br>
  <div class="row">
    <div class="col-md-12">

      <?php if ($partidofinalEditar): ?>

        <form class="" action="<?php echo site_url('partidofinales/procesarActualizacion'); ?> " method="post">

          <center>
            <input type="hidden" name="id_pgfi_be" value="<?php echo $partidooctavoEditar->id_pgfi_be;?>">
          </center>

          <div class="row">
    <div class="col-md-4 text-right" >
      <label for="">PAIS1</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="pais1fi_be"  value="<?php echo $partidooctavoEditar->pais1fi_be;?>" class="form-control" placeholder="Ingrese el Pais " required>
    </div>
  </div>
  <bfi
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS 2</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="pais2fi_be" value="<?php echo $partidooctavoEditar->pais2fi_be;?>" class="form-control" placeholder="Ingrese el Pais" requered>
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">CIUDAD</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="ciudadfi_be" value="<?php echo $partidooctavoEditar->ciudadfi_be;?>" class="form-control" placeholder="Ingrese la ciudad" requered>
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">FECHA</label>
  </div>
  <div class="col-md-7">
    <input type="date" name="fechafi_be" value="<?php echo $partidooctavoEditar->fechafi_be;?>" class="form-control" placeholder="Ingrese la fecha" requered>
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
        <a href="<?php echo site_url('partidofinales/index'); ?> " class="btn btn-danger">
          <i class="glyphicon glyphicon-ok"></i>
          Cancelar
        </a>
      </div>
    </div>
</form>
<?php else: ?>


        <div class="alert alert-danger">
          <b>NO SE ENCONTRO FINAL/b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>


