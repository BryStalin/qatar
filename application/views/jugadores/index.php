
<legend class="text-center">
    <i class="glyphicon glyphicon-user"> </i>
    <b>Gestion Jugadores</b>
</legend>
<hr>

<center>

    <a href="<?php echo site_url('jugadores/nuevo'); ?> " class="btn btn-succeess">
        <i class="glyphicon glyphicon-plus"></i>
            Agregar Nuevo
    </a>
    
</center>
<br><br>
<?php if ($listadoJugadores): ?>
    <table id="tbl-jugadores" class="table table-striped table-bordered table-hover">

    <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">APELLIDO</th>
        <th class="text-center">EDAD</th>
        <th class="text-center">CLUB</th>
        <th class="text-center">POSICION</th>
        <th class="text-center">NUMERO</th>
        <th class="text-center">FOTOGRAFIA</th>
        <th class="text-center">ACCIONES</th>
 
    </tr>
    </thead>
    <tbody>
        <?php foreach($listadoJugadores->result() as $jugadorTemporal):?>
            <tr>
                <td class="text-center">
                    <?php echo $jugadorTemporal->id_jug_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $jugadorTemporal->nombre_jug_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $jugadorTemporal->apellido_jug_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $jugadorTemporal->edad_jug_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $jugadorTemporal->club_jug_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $jugadorTemporal->posicion_jug_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $jugadorTemporal->numero_jug_be ?>
                </td>
                <td>
                <?php if ($jugadorTemporal->foto_jug_be!=""): ?>
                    <a href="<?php echo base_url('uploads/equipos').'/'.$jugadorTemporal->foto_jug_be; ?>"
                      target="_blank">
                      <img src="<?php echo base_url('uploads/equipos').'/'.$jugadorTemporal->foto_jug_be; ?>"
                      width="50px" height="50px"
                      alt="">
                    </a>
                  <?php else: ?>
                    N/A
                  <?php endif; ?>
                </td>
                <td class="text-center">
                    <a href="<?php echo site_url('jugadores/actualizar')?>/<?php echo $jugadorTemporal->id_jug_be; ?>" class="btn btn-warning">
                        <i class="glyphicon glyphicon-edit"></i>
                        Editar
                    </a>
                    <a href="<?php echo site_url('jugadores/borrar')?>/<?php echo $jugadorTemporal->id_jug_be; ?>" class="btn btn-danger" onclick="return confirm ('Estas seguro de que quieres eliminar')">
                        <i class="glyphicon glyphicon-trash"></i>
                        Eliminar
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
  <?php else: ?>
  <h3><b>No existen Jugadores</b></h3>
<?php endif; ?>



<script type="text/javascript">
  $("#tbl-jugadores").DataTable();
</script>
<br><br>
<h1 class="text-center">JUGADORES</h1>
<br><br>
<div class="container">

    <div class="row">
        <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/j2.png" alt="...">
      <h3 class="text-center">Lucas Modric</h3>
    </a>
  </div>
  
  <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/j3.png" alt="...">
      <h3 class="text-center">Gea</h3>
    </a>
  </div>
  <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
        <img src="<?php echo base_url(); ?>/assets/images/j4.png" alt="...">
        <h3 class="text-center">Leonel Messi</h3>
    </a>
  </div>
  <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/j5.png" alt="...">
      <h3 class="text-center">Robert Lewandowski</h3>
    </a>
</div>
<div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
        <img src="<?php echo base_url(); ?>/assets/images/j6.png" alt="...">
        <h3 class="text-center">Keilor Navas</h3>
    </a>
</div>
</div>
<div class="row "> 
<div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
        <img src="<?php echo base_url(); ?>/assets/images/j7.png" alt="...">
        <h3 class="text-center">Karin Benzema</h3>
    </a>
</div>


        <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/j8.png" alt="...">
      <h3 class="text-center">Dominguez</h3>
    </a>
  </div>
  
  <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/j9.png" alt="...">
      <h3 class="text-center">Cristiano Ronaldo</h3>
    </a>
  </div>
  <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
        <img src="<?php echo base_url(); ?>/assets/images/j10.png" alt="...">
        <h3 class="text-center">Luis Suarez</h3>
    </a>
  </div>
  <div class="col-xs-6 col-md-2">
    <a href="#" class="thumbnail">
      <img src="<?php echo base_url(); ?>/assets/images/j11.png" alt="...">
      <h3 class="text-center">Guillermo Ochoa</h3>
    </a>
    </div>
  
</div>
</div>