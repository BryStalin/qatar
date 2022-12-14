<div class="row">
  <div class="col-md-12 text-center well">
    <h3><b>ACTUALIZAR EQUIPO</b> </h3>
  </div>
  <br>
  <center>
    <a href="<?php echo site_url('equipos/index') ?>" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> REGRESAR</a>
  </center>
  <br><br>
  <div class="row">
    <div class="col-md-12">

      <?php if ($equipoEditar): ?>

        <form class="" action="<?php echo site_url('equipos/procesarActualizacion'); ?> " method="post">
          
          <center> 
            <input type="hidden" name="id_equipos" value="<?php echo $equipoEditar->id_equipos;?>">
          </center>

  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">EQUIPO</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="nombre_equi" value="<?php echo $equipoEditar->nombre_equi;?>"class="form-control" placeholder="Ingrese el nombre del equipo" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">CONFEDERACION</label>

    </div>
    <div class="col-md-7">
      <input type="text" name="confederacion_equi" value="<?php echo $equipoEditar->confederacion_equi;?>"class="form-control" placeholder="Ingrese la confederacion" required>
    </div>
  </div>
  <br>
  
 
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
        <a href="<?php echo site_url('equipos/index'); ?> " class="btn btn-danger">
          <i class="glyphicon glyphicon-ok"></i>
          Cancelar
        </a>
      </div>
    </div>
</form>
<?php else: ?>


        <div class="alert alert-danger">
          <b>NO SE ENCONTRÓ AL EQUIPO</b>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>