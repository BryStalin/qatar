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

        <form  id="frm_actualizar" class="" enctype="multipart/form-data" action="<?php echo site_url('equipos/procesarActualizacion'); ?> " method="post">
          
          <center> 
            <input type="hidden" name="id_equipos_be" value="<?php echo $equipoEditar->id_equipos_be;?>">
          </center>

  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">EQUIPO</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="nombre_equi_be" id="nombre_equi_be" value="<?php echo $equipoEditar->nombre_equi_be;?>"class="form-control" placeholder="Ingrese el nombre del equipo" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">CONFEDERACION</label>

    </div>
    <div class="col-md-7">
      <input type="text" name="confederacion_equi_be" id="confederacion_equi_be" value="<?php echo $equipoEditar->confederacion_equi_be;?>"class="form-control" placeholder="Ingrese la confederacion" >
    </div>
  </div>
  <br>
  <div class="row">
      <div class="col-md-4 text-right">
        <label for="">FOTO</label>

      </div>
      <div class="col-md-7">
        <input type="file"  name="imagen_equi_be" value="<?php echo $equipoEditar->imagen_equi_be;?>"class="form-control" placeholder="Seleccione la fotografia" required accept="image/*">
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

<script type="text/javascript">
     $("#frm_actualizar").validate({
        rules:{
            nombre_equi_be:{
              required:true,
              minlength:3
            },
            
            confederacion_equi_be:{
              required:true,
              minlength:3
            },
            imagen_equi_be:{
              required:true,
            
            },
          
        },
        messages:{
            nombre_equi_be:{
              required:"Por favor ingresse el equipo",
              minlength:"Equipo Incorrecto"
            },
         
            confederacion_equi_be:{
              required:"Por favor ingrese la confederacion",
              minlength:"Confederacion incorrecta"
            },
            imagen_equi_be:{
              required:"Por favor ingrese imagen",
              
            },
           
        },
  });
</script>