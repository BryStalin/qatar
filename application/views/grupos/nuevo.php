<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
<b>Nuevo Grupo </b>
</legend>
<form class="" action="<?php echo site_url('grupos/guardarAsignatura'); ?> " method="post">
  <div class="row">
    <div class="col-md-4 text-right" >
      <label for="">GRUPO</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="nombre"  value="" class="form-control" placeholder="Ingrese el nombre del grupo " required>
    </div>
  </div>
  <br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="pais1" value="" class="form-control" placeholder="Ingrese el pais" requered>
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="pais2" value="" class="form-control" placeholder="Ingrese el pais" requered>
  </div>
</div>
<br>
<!-- datos -->
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="pais3" value="" class="form-control" placeholder="Ingrese el pais" requered>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4 text-right" >
    <label for="">PAIS</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="pais4" value="" class="form-control" placeholder="Ingrese el pais" requered>
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
</table>
