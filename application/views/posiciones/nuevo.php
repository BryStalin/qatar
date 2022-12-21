


<legend class="text-center">
<i class="glyphicon glyphicon-plus"></i>
  <b>Nuevo posicion</b>
</legend>
<form id="frm_nuevo_posicion" class="" enctype="multipart/form-data" action="<?php echo site_url('posiciones/guardarPosiciones'); ?> " method="post">
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NOMBRE</label>
    </div>
    <div class="col-md-7">
      <input type="text" id="nombre_pos_be" name="nombre_pos_be" value=""class="form-control" placeholder="Ingrese del nombre" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">PUNTOS</label>

    </div>
    <div class="col-md-7">
      <input type="number" id="puntos_be" name="puntos_be" value=""class="form-control" placeholder="Ingrese INGRESE PUNTOS" >
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">GOLES</label>

    </div>
    <div class="col-md-7">
      <input type="number" id="goles_be" name="goles_be" value=""class="form-control" placeholder="Ingrese ingres goles marcados" >
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
        <a href="<?php echo site_url('posiciones/index'); ?> " class="btn btn-danger">
          <i class="glyphicon glyphicon-remove"></i>
          Cancelar
        </a>
      </div>
    </div>
</form>

<script type="text/javascript">
     $("#frm_nuevo_posicion").validate({
        rules:{
            nombre_pos_be:{
              required:true,
              minlength:3
            },

            puntos_be:{
              required:true,
              minlength:3
            },
            goles_be:{
              required:true,
              minlength:3
            },

        },
        messages:{
            nombre_est_be:{
              required:"Por favor ingrese el nombre",
              minlength:"Nombre Incorrecto"
            },

            puntos_be:{
              required:"Por favor ingreselos puntos",
              minlength:"Capacidad incorrecta"
            },
            goles_be:{
              required:"Por favor ingrese los goles marcados",
              minlength:"marcador incorrecto"
            },

        },
  });
</script>


