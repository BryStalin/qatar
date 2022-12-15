<legend class="text-center">
<i class="glyphicon glyphicon-plus-sign"></i>
  <b>Nuevo Estadio</b>
</legend>
<form id="frm_nuevo_estadio" class="" enctype="multipart/form-data" action="<?php echo site_url('estadios/guardarEstadios'); ?> " method="post">
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NOMBRE</label>
    </div>
    <div class="col-md-7">
      <input type="text" id="nombre_est_be" name="nombre_est_be" value=""class="form-control" placeholder="Ingrese nombre" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">CAPACIDAD</label>

    </div>
    <div class="col-md-7">
      <input type="number" id="capacidad_est_be" name="capacidad_est_be" value=""class="form-control" placeholder="Ingrese la capacidad" >
    </div>
  </div>
  <br>
  <div class="row">
      <div class="col-md-4 text-right">
        <label for="">FOTO</label>

      </div>
      <div class="col-md-7">
        <input type="file" id="foto_jug_be" name="foto_jug_be" value=""class="form-control" placeholder="Seleccione la fotografia" required accept="image/*">
      </div>
    </div>



    <br>

    <br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button"class="btn btn-primary">
          <i class="glyphicon glyphicon-ok"></i>
          Guardar
        </button>
        <a href="<?php echo site_url('estadios/index'); ?> " class="btn btn-danger">
          <i class="glyphicon glyphicon-remove"></i>
          Cancelar
        </a>
      </div>
    </div>
</form>

<script type="text/javascript">
     $("#frm_nuevo_estadio").validate({
        rules:{
            nombre_equi:{
              required:true,
              minlength:3
            },

            confederacion_equi:{
              required:true,
              minlength:3
            },

        },
        messages:{
            nombre_equi:{
              required:"Por favor ingresse el estadio",
              minlength:"nombre Incorrecto"
            },

            confederacion_equi:{
              required:"Por favor ingrese la capacidad",
              minlength:"capacidad incorrecta"
            },

        },
  });
</script>
