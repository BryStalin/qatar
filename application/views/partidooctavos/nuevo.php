
<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
<b>Nuevo Partido Octavo </b>
</legend>
<form id="fmr_nuevo_partidooctavo" class="" enctype="multipart/form-data" action="<?php echo site_url('partidooctavos/guardarPartidooctavos'); ?> " method="post">


<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS1</label>
  </div>
  <div class="col-md-7">
    <input type="text" id="pais1oc_be" name="pais1oc_be" value="" class="form-control" placeholder="Ingrese el pais" >
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS2</label>
  </div>
  <div class="col-md-7">
    <input type="text" id="pais2oc_be"  name="pais2oc_be" value="" class="form-control" placeholder="Ingrese el pais" >
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">CIUDAD</label>
  </div>
  <div class="col-md-7">
    <input type="text" id="ciudadoc_be"  name="ciudadoc_be" value="" class="form-control" placeholder="Ingrese la ciudad" >
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">FECHA</label>
  </div>
  <div class="col-md-7">
    <input type="date" id="fechaoc_be"  name="fechaoc_be" value="" class="form-control" placeholder="Ingrese la fecha" >
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
        <a href="<?php echo site_url('partidooctavos/index'); ?> " class="btn btn-danger">
          <i class="glyphicon glyphicon-remove"></i>
          Cancelar
        </a>
      </div>
    </div>
</form>
<script type="text/javascript">
     $("#frm_nuevo_partidooctavo").validate({
        rules:{
            pais1oc_be:{
              required:true,
              minlength:3
            },
            pais2oc_be:{
              required:true,
              minlength:3
            },
            ciudadoc_be:{
              required:true,
              minlength:3
            },
            fechaoc_be:{
              required:true,
              minlength:3
            },

        },
        messages:{

            pais1oc_be:{
              required:"Por favor ingrese pais",
              minlength:"pais Incorrecto"
            },
            pais2oc_be:{
              required:"Ingrese pais ",
              maxlength:"pais Incorrecto"
            },
            ciudadoc_be:{
              required:"Ingrese ciudad ",
              maxlength:"ciudad Incorrecto"
            },
            fechaoc_be:{
              required:"Ingrese fecha ",
              maxlength:"fecha Incorrecto"
            },

        },
  });
</script>
