
<div class="row">
  <div class="col-md-12 text-center well">
    <h3><b>ACTUALIZAR PARTIDO SEMIFINAL</b> </h3>
  </div>
  <br>
  <center>
    <a href="<?php echo site_url('partidosemis/index') ?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> REGRESAR</a>
  </center>
  <br><br>
  <div class="row">
    <div class="col-md-12">

      <?php if ($partidosemiEditar): ?>

        <form class="" action="<?php echo site_url('partidosemis/procesarActualizacion'); ?> " method="post">

          <center>
            <input type="hidden" name="id_pgse_be" value="<?php echo $partidosemiEditar->id_pgse_be;?>">
          </center>

          <div class="row">
    <div class="col-md-4 text-right" >
      <label for="">PAIS1</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="pais1se_be"  value="<?php echo $partidosemiEditar->pais1se_be;?>" class="form-control" placeholder="Ingrese el Pais " required>
    </div>
  </div>
  <br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS 2</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="pais2se_be" value="<?php echo $partidosemiEditar->pais2se_be;?>" class="form-control" placeholder="Ingrese el Pais" requered>
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">CIUDAD</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="ciudadse_be" value="<?php echo $partidosemiEditar->ciudadse_be;?>" class="form-control" placeholder="Ingrese la ciudad" requered>
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">FECHA</label>
  </div>
  <div class="col-md-7">
    <input type="date" name="fechase_be" value="<?php echo $partidosemiEditar->fechase_be;?>" class="form-control" placeholder="Ingrese la fecha" requered>
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
        <a href="<?php echo site_url('partidosemis/index'); ?> " class="btn btn-danger">
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


