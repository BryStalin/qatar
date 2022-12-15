<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
<b>Nuevo Grupo </b>
</legend>
<form id="fmr_nuevo_grupo" class="" action="<?php echo site_url('grupos/guardarAsignatura'); ?> " method="post">
  <div class="row">
    <div class="col-md-4 text-right" >
      <label for="">GRUPO</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="nombre_be" id="nombre_be" value="" class="form-control" placeholder="Ingrese el nombre del grupo " >
    </div>
  </div>
  <br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="pais1_be" id="pais1_be" value="" class="form-control" placeholder="Ingrese el pais" >
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="pais2_be" id="pais2_be" value="" class="form-control" placeholder="Ingrese el pais" >
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="pais3_be"  id="pais3_be" value="" class="form-control" placeholder="Ingrese el pais" >
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="pais4_be" id="pais4_be" value="" class="form-control" placeholder="Ingrese el pais" >
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
        <a href="<?php echo site_url('grupos/index'); ?> " class="btn btn-danger">
          <i class="glyphicon glyphicon-remove"></i>
          Cancelar
        </a>
      </div>
    </div>
</form>
<script type="text/javascript">
     $("#frm_nuevo_grupo").validate({
        rules:{
            nombre_be:{
              required:true,
              maxlength:1
            },
            
            pais1_be:{
              required:true,
              minlength:3
            },
            pais2_be:{
              required:true,
              minlength:3
            },
            pais3_be:{
              required:true,
              minlength:3
            },
            pais4_be:{
              required:true,
              minlength:3
            },
          
        },
        messages:{
            nombre_be:{
              required:"Ingrese Grupo ",
              maxlength:"Nombre Incorrecto"
            },
         
            pais1_be:{
              required:"Por favor ingrese pais",
              minlength:"Nombre Incorrect"
            },
            pais2_be:{
              required:"Por favor ingrese pais",
              minlength:"Nombre Incorrect"
            },
            pais3_be:{
              required:"Por favor ingrese pais",
              minlength:"Nombre Incorrect"
            },
            pais4_be:{
              required:"Por favor ingrese pais",
              minlength:"Nombre Incorrect"
            },
  

           
        },
  });
</script>
