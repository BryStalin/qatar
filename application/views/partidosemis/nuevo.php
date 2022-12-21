<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
<b>Nuevo Partido semifinal</b>
</legend>
<form id="fmr_nuevo_partidosemi" class="" enctype="multipart/form-data" action="<?php echo site_url('partidosemis/guardarPartidosemis'); ?> " method="post">


<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS1</label>
  </div>
  <div class="col-md-7">
    <input type="text" id="pais1se_be" name="pais1se_be" value="" class="form-control" placeholder="Ingrese el pais" >
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS2</label>
  </div>
  <div class="col-md-7">
    <input type="text" id="pais2se_be"  name="pais2se_be" value="" class="form-control" placeholder="Ingrese el pais" >
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">CIUDAD</label>
  </div>
  <div class="col-md-7">
    <input type="text" id="ciudadse_be"  name="ciudadse_be" value="" class="form-control" placeholder="Ingrese la ciudad" >
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">FECHA</label>
  </div>
  <div class="col-md-7">
    <input type="date" id="fechase_be"  name="fechase_be" value="" class="form-control" placeholder="Ingrese la fecha" >
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
        <a href="<?php echo site_url('partidosemis/index'); ?> " class="btn btn-danger">
          <i class="glyphicon glyphicon-remove"></i>
          Cancelar
        </a>
      </div>
    </div>
</form>
<script type="text/javascript">
     $("#frm_nuevo_partidosemi").validate({
        rules:{
            pais1se_be:{
              required:true,
              minlength:3
            },
            pais2se_be:{
              required:true,
              minlength:3
            },
            ciudadse_be:{
              required:true,
              minlength:3
            },
            fechase_be:{
              required:true,
              minlength:3
            },

        },
        messages:{

            pais1se_be:{
              required:"Por favor ingrese pais",
              minlength:"pais Incorrecto"
            },
            pais2se_be:{
              required:"Ingrese pais ",
              maxlength:"pais Incorrecto"
            },
            ciudadse_be:{
              required:"Ingrese ciudad ",
              maxlength:"ciudad Incorrecto"
            },
            fechase_be:{
              required:"Ingrese fecha ",
              maxlength:"fecha Incorrecto"
            },

        },
  });
</script>

