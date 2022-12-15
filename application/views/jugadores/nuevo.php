
<legend class="text-center">
<i class="glyphicon glyphicon-plus"></i>
  <b>Nuevo Jugador</b>
</legend>
<form id="frm_nuevo_jugador" class="" enctype="multipart/form-data" action="<?php echo site_url('jugadores/guardarJugadores'); ?> " method="post">
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NOMBRE</label>
    </div>
    <div class="col-md-7">
      <input type="text" id="nombre_jug_be" name="nombre_jug_be" value=""class="form-control" placeholder="Ingrese el nombre del jugador" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">APELLIDO</label>

    </div>
    <div class="col-md-7">
      <input type="text" id="apellido_jug_be" name="apellido_jug_be" value=""class="form-control" placeholder="Ingrese el apellido" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">EDAD</label>

    </div>
    <div class="col-md-7">
      <input type="number" id="edad_jug_be" name="edad_jug_be" value=""class="form-control" placeholder="Ingrese la edad" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">CLUB</label>

    </div>
    <div class="col-md-7">
      <input type="text" id="club_jug_be" name="club_jug_be" value=""class="form-control" placeholder="Ingrese el club" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">POSICION</label>

    </div>
    <div class="col-md-7">
      <input type="text" id="posicion_jug_be" name="posicion_jug_be" value=""class="form-control" placeholder="Ingrese la posicion del jugador" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NUMERO</label>

    </div>
    <div class="col-md-7">
      <input type="number" id="numero_jug_be" name="numero_jug_be" value=""class="form-control" placeholder="Ingrese el numero del jugador" >
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
        <a href="<?php echo site_url('jugadores/index'); ?> " class="btn btn-danger">
          <i class="glyphicon glyphicon-remove"></i>
          Cancelar
        </a>
      </div>
    </div>
</form>

<script type="text/javascript">
     $("#frm_nuevo_jugador").validate({
        rules:{
            nombre_jug_be:{
              required:true,
              minlength:3
            },
            
            apellido_jug_be:{
              required:true,
              minlength:3
            },
            edad_jug_be:{
              required:true,
              minlength:3
            },
            club_jug_be:{
              required:true,
              minlength:3
            },
            posicion_jug_be:{
              required:true,
              minlength:3
            },
          
        },
        messages:{
            nombre_jug_be:{
              required:"Por favor ingrese el nombre",
              minlength:"Nombre Incorrecto"
            },
         
            apellido_jug_be:{
              required:"Por favor ingreseel apellido",
              minlength:"Apellido incorrecta"
            },
            edad_jug_be:{
              required:"Por favor ingrese la edad",
              minlength:"Edad incorrecta"
            },
            club_jug_be:{
              required:"Por favor ingrese el club",
              minlength:"Club incorrecta"
            },
            posicion_jug_be:{
              required:"Por favor ingrese posiscion",
              minlength:"Posicion incorrecta"
            },
           
        },
  });
</script>