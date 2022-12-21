<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
<b>Nuevo Partidogrupo </b>
</legend>
<form id="fmr_nuevo_partidogrupo" class="" enctype="multipart/form-data" action="<?php echo site_url('partidogrupos/guardarPartidogrupos'); ?> " method="post">


<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS1</label>
  </div>
  <div class="col-md-7">
    <input type="text" id="pais1_be" name="pais1_be" value="" class="form-control" placeholder="Ingrese el pais" >
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS2</label>
  </div>
  <div class="col-md-7">
    <input type="text" id="pais2_be"  name="pais2_be" value="" class="form-control" placeholder="Ingrese el pais" >
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">CIUDAD</label>
  </div>
  <div class="col-md-7">
    <input type="text" id="ciudad_be"  name="ciudad_be" value="" class="form-control" placeholder="Ingrese la ciudad" >
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">FECHA</label>
  </div>
  <div class="col-md-7">
    <input type="date" id="fecha_be"  name="fecha_be" value="" class="form-control" placeholder="Ingrese la fecha" >
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
        <a href="<?php echo site_url('partidogrupos/index'); ?> " class="btn btn-danger">
          <i class="glyphicon glyphicon-remove"></i>
          Cancelar
        </a>
      </div>
    </div>
</form>
<script type="text/javascript">
     $("#frm_nuevo_partidogrupo").validate({
        rules:{
            pais1_be:{
              required:true,
              minlength:3
            },
            pais2_be:{
              required:true,
              minlength:3
            },
            ciudad_be:{
              required:true,
              minlength:3
            },
            fecha_be:{
              required:true,
              minlength:3
            },

        },
        messages:{

            pais1_be:{
              required:"Por favor ingrese pais",
              minlength:"pais Incorrecto"
            },
            pais2_be:{
              required:"Ingrese pais ",
              maxlength:"pais Incorrecto"
            },
            ciudad_be:{
              required:"Ingrese ciudad ",
              maxlength:"ciudad Incorrecto"
            },
            fecha_be:{
              required:"Ingrese fecha ",
              maxlength:"fecha Incorrecto"
            },

        },
  });
</script>


