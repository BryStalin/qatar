<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
<b>Nuevo Partido Cuarto </b>
</legend>
<form id="fmr_nuevo_partidocuarto" class="" enctype="multipart/form-data" action="<?php echo site_url('partidocuartos/guardarPartidocuartos'); ?> " method="post">


<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS1</label>
  </div>
  <div class="col-md-7">
    <input type="text" id="pais1cu_be" name="pais1cu_be" value="" class="form-control" placeholder="Ingrese el pais" >
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS2</label>
  </div>
  <div class="col-md-7">
    <input type="text" id="pais2cu_be"  name="pais2cu_be" value="" class="form-control" placeholder="Ingrese el pais" >
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">CIUDAD</label>
  </div>
  <div class="col-md-7">
    <input type="text" id="ciudadcu_be"  name="ciudadcu_be" value="" class="form-control" placeholder="Ingrese la ciudad" >
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">FECHA</label>
  </div>
  <div class="col-md-7">
    <input type="date" id="fechacu_be"  name="fechacu_be" value="" class="form-control" placeholder="Ingrese la fecha" >
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
        <a href="<?php echo site_url('partidocuartos/index'); ?> " class="btn btn-danger">
          <i class="glyphicon glyphicon-remove"></i>
          Cancelar
        </a>
      </div>
    </div>
</form>
<script type="text/javascript">
     $("#frm_nuevo_partidocuarto").validate({
        rules:{
            pais1cu_be:{
              required:true,
              minlength:3
            },
            pais2cu_be:{
              required:true,
              minlength:3
            },
            ciudadcu_be:{
              required:true,
              minlength:3
            },
            fechacu_be:{
              required:true,
              minlength:3
            },

        },
        messages:{

            pais1cu_be:{
              required:"Por favor ingrese pais",
              minlength:"pais Incorrecto"
            },
            pais2cu_be:{
              required:"Ingrese pais ",
              maxlength:"pais Incorrecto"
            },
            ciudadcu_be:{
              required:"Ingrese ciudad ",
              maxlength:"ciudad Incorrecto"
            },
            fechacu_be:{
              required:"Ingrese fecha ",
              maxlength:"fecha Incorrecto"
            },

        },
  });
</script>


