
<div class="row">
  <div class="col-md-12 text-center well">
    <h3><b>ACTUALIZAR PARTIDOOCTAVOS</b> </h3>
  </div>
  <br>
  <center>
    <a href="<?php echo site_url('partidooctavos/index') ?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> REGRESAR</a>
  </center>
  <br><br>
  <div class="row">
    <div class="col-md-12">

      <?php if ($partidooctavoEditar): ?>

        <form class="" action="<?php echo site_url('partidooctavos/procesarActualizacion'); ?> " method="post">

          <center>
            <input type="hidden" name="id_pgoc_be" value="<?php echo $partidooctavoEditar->id_pgoc_be;?>">
          </center>

          <div class="row">
    <div class="col-md-4 text-right" >
      <label for="">PAIS1</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="pais1oc_be"  value="<?php echo $partidooctavoEditar->pais1oc_be;?>" class="form-control" placeholder="Ingrese el Pais " required>
    </div>
  </div>
  <br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS 2</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="pais2oc_be" value="<?php echo $partidooctavoEditar->pais2oc_be;?>" class="form-control" placeholder="Ingrese el Pais" requered>
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">CIUDAD</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="ciudadoc_be" value="<?php echo $partidooctavoEditar->ciudadoc_be;?>" class="form-control" placeholder="Ingrese la ciudad" requered>
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">FECHA</label>
  </div>
  <div class="col-md-7">
    <input type="date" name="fechaoc_be" value="<?php echo $partidooctavoEditar->fechaoc_be;?>" class="form-control" placeholder="Ingrese la fecha" requered>
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
        <a href="<?php echo site_url('partidooctavos/index'); ?> " class="btn btn-danger">
          <i class="glyphicon glyphicon-ok"></i>
          Cancelar
        </a>
      </div>
    </div>
</form>
<?php else: ?>


        <div class="alert alert-danger">
          <b>NO SE ENCONTRO GRUPOS/b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>

