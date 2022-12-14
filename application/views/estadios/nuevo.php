


<legend class="text-center">
<i class="glyphicon glyphicon-plus"></i>
  <b>Nuevo Estadio</b>
</legend>
<form id="frm_nuevo_estadio" class="" enctype="multipart/form-data" action="<?php echo site_url('estadios/guardarEstadios'); ?> " method="post">
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NOMBRE</label>
    </div>
    <div class="col-md-7">
      <input type="text" id="nombre_est" name="nombre_est" value=""class="form-control" placeholder="Ingrese del estadio" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">CAPACIDAD</label>

    </div>
    <div class="col-md-7">
      <input type="number" id="capacidad_est" name="capacidad_est" value=""class="form-control" placeholder="Ingrese capacidad de estadio" >
    </div>
  </div>
  <br>
  
  
  <br>
  <div class="row">
      <div class="col-md-4 text-right">
        <label for="">FOTOGRAFIA</label>

      </div>
      <div class="col-md-7">
        <input type="file" id="foto_jug" name="foto_jug" value=""class="form-control" placeholder="Seleccione la fotografia" required accept="image/*">
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
            nombre_est:{
              required:true,
              minlength:3
            },
            
            capcidad_est:{
              required:true,
              minlength:3
            },
          
        },
        messages:{
            nombre_est:{
              required:"Por favor ingrese el estadio",
              minlength:"Nombre Incorrecto"
            },
         
            capacidad_est:{
              required:"Por favor ingrese la capacidad",
              minlength:"Capacidad incorrecta"
            },
           
        },
  });
</script>