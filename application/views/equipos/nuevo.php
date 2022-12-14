<legend class="text-center">
<i class="glyphicon glyphicon-plus"></i>
  <b>Nuevo Equipo</b>
</legend>
<form id="frm_nuevo_equipo" class="" enctype="multipart/form-data" action="<?php echo site_url('equipos/guardarEquipos'); ?> " method="post">
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">EQUIPO</label>
    </div>
    <div class="col-md-7">
      <input type="text" id="nombre_equi" name="nombre_equi" value=""class="form-control" placeholder="Ingrese Equipo" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">CONFEDERACION</label>

    </div>
    <div class="col-md-7">
      <input type="text" id="confederacion_equi" name="confederacion_equi" value=""class="form-control" placeholder="Ingrese la confederacion" >
    </div>
  </div>
  <br>
  <div class="row">
      <div class="col-md-4 text-right">
        <label for="">FOTO</label>

      </div>
      <div class="col-md-7">
        <input type="file" id="imagen_equi" name="imagen_equi" value=""class="form-control" placeholder="Seleccione la fotografia" required accept="image/*">
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
        <a href="<?php echo site_url('equipos/index'); ?> " class="btn btn-danger">
          <i class="glyphicon glyphicon-remove"></i>
          Cancelar
        </a>
      </div>
    </div>
</form>

<script type="text/javascript">
     $("#frm_nuevo_equipo").validate({
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
              required:"Por favor ingresse el equipo",
              minlength:"Equipo Incorrecto"
            },
         
            confederacion_equi:{
              required:"Por favor ingrese la confederacion",
              minlength:"Confederacion incorrecta"
            },
           
        },
  });
</script>