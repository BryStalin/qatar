
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
                    <?php echo $equipoTemporal->id_equipos; ?>
                </td>
                <td class="text-center">
                    <?php echo $equipoTemporal->nombre_equi; ?>
                </td>
                <td class="text-center">
                    <?php echo $equipoTemporal->confederacion_equi; ?>
                </td>
                <td>
                <?php if ($equipoTemporal->imagen_equi!=""): ?>
                    <a href="<?php echo base_url('uploads/equipos').'/'.$equipoTemporal->imagen_equi; ?>"
                      target="_blank">
                      <img src="<?php echo base_url('uploads/equipos').'/'.$equipoTemporal->imagen_equi; ?>"
                      width="50px" height="50px"
                      alt="">
                    </a>
                  <?php else: ?>
                    N/A
                  <?php endif; ?>
                </td>
                <td class="text-center">
                    <a href="<?php echo site_url('equipos/actualizar')?>/<?php echo $equipoTemporal->id_equipos; ?>" class="btn btn-warning">
                        <i class="glyphicon glyphicon-edit"></i>
                        Editar
                    </a>
                    <a href="<?php echo site_url('equipos/borrar')?>/<?php echo $equipoTemporal->id_equipos; ?>" class="btn btn-danger" onclick="return confirm ('Estas seguro de que quieres eliminar')">
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