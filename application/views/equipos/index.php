
<legend class="text-center">
    <i class="glyphicon glyphicon-user"> </i>
    <b>Gestion Equipos</b>
</legend>
<hr>

<center>

    <a href="<?php echo site_url('equipos/nuevo'); ?> " class="btn btn-succeess">
        <i class="glyphicon glyphicon-plus"></i>
            Agregar Nuevo
    </a>
    
</center>
<br><br>
<?php if ($listadoEquipos): ?>
    <table id="tblequipos" class="table table-striped table-bordered table-hover">

    <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">CONFEDERACION</th>
        <th class="text-center">FOTO</th>
        <th class="text-center">ACCIONES</th>
 
    </tr>
    </thead>
    <tbody>
        <?php foreach($listadoEquipos->result() as $equipoTemporal):?>
            <tr>
                <td class="text-center">
                    <?php echo $equipoTemporal->id_equipos_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $equipoTemporal->nombre_equi_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $equipoTemporal->confederacion_equi_be; ?>
                </td>
                <td>
                <?php if ($equipoTemporal->imagen_equi_be!=""): ?>
                    <a href="<?php echo base_url('uploads/equipos').'/'.$equipoTemporal->imagen_equi_be; ?>"
                      target="_blank">
                      <img src="<?php echo base_url('uploads/equipos').'/'.$equipoTemporal->imagen_equi_be; ?>"
                      width="50px" height="50px"
                      alt="">
                    </a>
                  <?php else: ?>
                    N/A
                  <?php endif; ?>
                </td>
                <td class="text-center">
                    <a href="<?php echo site_url('equipos/actualizar')?>/<?php echo $equipoTemporal->id_equipos_be; ?>" class="btn btn-warning">
                        <i class="glyphicon glyphicon-edit"></i>
                        Editar
                    </a>
                    <a href="<?php echo site_url('equipos/borrar')?>/<?php echo $equipoTemporal->id_equipos_be; ?>" class="btn btn-danger" onclick="return confirm ('Estas seguro de que quieres eliminar')">
                        <i class="glyphicon glyphicon-trash"></i>
                        Eliminar
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
  <?php else: ?>
  <h3><b>No existen Equipos</b></h3>
<?php endif; ?>



<script type="text/javascript">
  $("#tblequipos").DataTable();
</script>
<br><br>
<h1 class="text-center">EQUIPOS</h1>
<br><br>
<div class="container">

    <div class="row">
        <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/brasil.png" alt="...">
      <h3 class="text-center">Brasil</h3>
    </a>
  </div>
  
  <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/arg.png" alt="...">
      <h3 class="text-center">Argentina</h3>
    </a>
  </div>
  <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
        <img src="<?php echo base_url(); ?>/assets/images/camerun.png" alt="...">
        <h3 class="text-center">Camerun</h3>
    </a>
  </div>
  <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/australia.png" alt="...">
      <h3 class="text-center">Australia</h3>
    </a>
</div>
<div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
        <img src="<?php echo base_url(); ?>/assets/images/canada.png" alt="...">
        <h3 class="text-center">Canada</h3>
    </a>
</div>
<div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
        <img src="<?php echo base_url(); ?>/assets/images/ecuador.png" alt="...">
        <h3 class="text-center">Ecuador</h3>
    </a>
</div>


        <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/francia.png" alt="...">
      <h3 class="text-center">Francia</h3>
    </a>
  </div>
  
  <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/japon.png" alt="...">
      <h3 class="text-center">Japon</h3>
    </a>
  </div>
  <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
        <img src="<?php echo base_url(); ?>/assets/images/mexico.png" alt="...">
        <h3 class="text-center">Mexico</h3>
    </a>
  </div>
  <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/portugal.png" alt="...">
      <h3 class="text-center">Portugal</h3>
    </a>
    </div>

        <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/brasil.png" alt="...">
      <h3 class="text-center">Brasil</h3>
    </a>
  </div>
  
  <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/senegal.png" alt="...">
      <h3 class="text-center">Senegal</h3>
    </a>
  </div>
  
</div>
</div>

<div class="container">

    <div class="row">
        <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/brasil.png" alt="...">
      <h3 class="text-center">Brasil</h3>
    </a>
  </div>
  
  <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/arg.png" alt="...">
      <h3 class="text-center">Argentina</h3>
    </a>
  </div>
  <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
        <img src="<?php echo base_url(); ?>/assets/images/camerun.png" alt="...">
        <h3 class="text-center">Camerun</h3>
    </a>
  </div>
  <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/australia.png" alt="...">
      <h3 class="text-center">Australia</h3>
    </a>
</div>
<div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
        <img src="<?php echo base_url(); ?>/assets/images/canada.png" alt="...">
        <h3 class="text-center">Canada</h3>
    </a>
</div>
<div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
        <img src="<?php echo base_url(); ?>/assets/images/ecuador.png" alt="...">
        <h3 class="text-center">Ecuador</h3>
    </a>
</div>


        <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/francia.png" alt="...">
      <h3 class="text-center">Francia</h3>
    </a>
  </div>
  
  <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/japon.png" alt="...">
      <h3 class="text-center">Japon</h3>
    </a>
  </div>
  <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
        <img src="<?php echo base_url(); ?>/assets/images/mexico.png" alt="...">
        <h3 class="text-center">Mexico</h3>
    </a>
  </div>
  <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/portugal.png" alt="...">
      <h3 class="text-center">Portugal</h3>
    </a>
    </div>

        <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/brasil.png" alt="...">
      <h3 class="text-center">Brasil</h3>
    </a>
  </div>
  
  <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/senegal.png" alt="...">
      <h3 class="text-center">Senegal</h3>
    </a>
  </div>
  
</div>
</div>