<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
<b>Nuevo Partido final </b>
</legend>
<form id="fmr_nuevo_partidofinal" class="" enctype="multipart/form-data" action="<?php echo site_url('partidofinales/guardarPartidofinales'); ?> " method="post">


<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS1</label>
  </div>
  <div class="col-md-7">
    <input type="text" id="pais1fi_be" name="pais1fi_be" value="" class="form-control" placeholder="Ingrese el pais" >
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS2</label>
  </div>
  <div class="col-md-7">
    <input type="text" id="pais2fi_be"  name="pais2fi_be" value="" class="form-control" placeholder="Ingrese el pais" >
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">CIUDAD</label>
  </div>
  <div class="col-md-7">
    <input type="text" id="ciudadfi_be"  name="ciudadfi_be" value="" class="form-control" placeholder="Ingrese la ciudad" >
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">FECHA</label>
  </div>
  <div class="col-md-7">
    <input type="date" id="fechafi_be"  name="fechafi_be" value="" class="form-control" placeholder="Ingrese la fecha" >
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
        <a href="<?php echo site_url('partidofinales/index'); ?> " class="btn btn-danger">
          <i class="glyphicon glyphicon-remove"></i>
          Cancelar
        </a>
      </div>
    </div>
</form>
<script type="text/javascript">
     $("#frm_nuevo_partidofinal").validate({
        rules:{
            pais1fi_be:{
              required:true,
              minlength:3
            },
            pais2fi_be:{
              required:true,
              minlength:3
            },
            ciudadfi_be:{
              required:true,
              minlength:3
            },
            fechafi_be:{
              required:true,
              minlength:3
            },

        },
        messages:{

            pais1fi_be:{
              required:"Por favor ingrese pais",
              minlength:"pais Incorrecto"
            },
            pais2fi_be:{
              required:"Ingrese pais ",
              maxlength:"pais Incorrecto"
            },
            ciudadfi_be:{
              required:"Ingrese ciudad ",
              maxlength:"ciudad Incorrecto"
            },
            fechafi_be:{
              required:"Ingrese fecha ",
              maxlength:"fecha Incorrecto"
            },

        },
  });
</script>


