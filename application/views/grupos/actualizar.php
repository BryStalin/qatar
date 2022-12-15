<div class="row">
  <div class="col-md-12 text-center well">
    <h3><b>ACTUALIZAR GRUPOS</b> </h3>
  </div>
  <br>
  <center>
    <a href="<?php echo site_url('grupos/index') ?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> REGRESAR</a>
  </center>
  <br><br>
  <div class="row">
    <div class="col-md-12">

      <?php if ($estudianteEditar): ?>

        <form class="" action="<?php echo site_url('grupos/procesarActualizacion'); ?> " method="post">

          <center>
            <input type="hidden" name="id_grupo_be" value="<?php echo $estudianteEditar->id_grupo_be;?>">
          </center>

          <div class="row">
    <div class="col-md-4 text-right" >
      <label for="">GRUPO</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="nombre_be"  value="<?php echo $estudianteEditar->nombre_be;?>" class="form-control" placeholder="Ingrese el nombre del Hotel " required>
    </div>
  </div>
  <br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS 1</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="pais1_be" value="<?php echo $estudianteEditar->pais1_be;?>" class="form-control" placeholder="Ingrese el Pais" requered>
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS 2</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="pais2_be" value="<?php echo $estudianteEditar->pais2_be;?>" class="form-control" placeholder="Ingrese el Pais" requered>
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS 3</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="pais3_be" value="<?php echo $estudianteEditar->pais3_be;?>" class="form-control" placeholder="Ingrese el Pais" requered>
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS 4</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="pais4_be" value="<?php echo $estudianteEditar->pais4_be;?>" class="form-control" placeholder="Ingrese el Pais" requered>
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
        <a href="<?php echo site_url('grupos/index'); ?> " class="btn btn-danger">
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
