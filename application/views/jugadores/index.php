
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
                    <?php echo $jugadorTemporal->id_jug; ?>
                </td>
                <td class="text-center">
                    <?php echo $jugadorTemporal->nombre_jug; ?>
                </td>
                <td class="text-center">
                    <?php echo $jugadorTemporal->apellido_jug; ?>
                </td>
                <td class="text-center">
                    <?php echo $jugadorTemporal->edad_jug; ?>
                </td>
                <td class="text-center">
                    <?php echo $jugadorTemporal->club_jug; ?>
                </td>
                <td class="text-center">
                    <?php echo $jugadorTemporal->posicion_jug; ?>
                </td>
                <td class="text-center">
                    <?php echo $jugadorTemporal->numero_jug; ?>
                </td>
                <td>
                <?php if ($jugadorTemporal->foto_jug!=""): ?>
                    <a href="<?php echo base_url('uploads/equipos').'/'.$jugadorTemporal->foto_jug; ?>"
                      target="_blank">
                      <img src="<?php echo base_url('uploads/equipos').'/'.$jugadorTemporal->foto_jug; ?>"
                      width="50px" height="50px"
                      alt="">
                    </a>
                  <?php else: ?>
                    N/A
                  <?php endif; ?>
                </td>
                <td class="text-center">
                    <a href="<?php echo site_url('jugadores/actualizar')?>/<?php echo $jugadorTemporal->id_jug; ?>" class="btn btn-warning">
                        <i class="glyphicon glyphicon-edit"></i>
                        Editar
                    </a>
                    <a href="<?php echo site_url('jugadores/borrar')?>/<?php echo $jugadorTemporal->id_jug; ?>" class="btn btn-danger" onclick="return confirm ('Estas seguro de que quieres eliminar')">
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