_be
<legend class="text-center">
    <i class="glyphicon glyphicon-check"> </i>
    <b>Gestion Estadios</b>
</legend>
<hr>

<center>

    <a href="<?php echo site_url('estadios/nuevo'); ?> " class="btn btn-succeess">
        <i class="glyphicon glyphicon-plus"></i>
            Agregar Nuevo
    </a>

</center>
<br><br>
<?php if ($listadoEstadios): ?>
    <table id="tblequipos" class="table table-striped table-bordered table-hover">

    <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">CAPACIDAD</th>
        <th class="text-center">FOTO</th>
        <th class="text-center">ACCIONES</th>

    </tr>
    </thead>
    <tbody>
        <?php foreach($listadoEstadios->result() as $estadioTemporal):?>
            <tr>
                <td class="text-center">
                    <?php echo $estadioTemporal->id_est_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $estadioTemporal->nombre_est_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $estadioTemporal->capacidad_est_be; ?>
                </td>
                <td>
                <?php if ($estadioTemporal->foto_jug_be!=""): ?>
                    <a href="<?php echo base_url('uploads/equipos').'/'.$estadioTemporal->foto_jug_be; ?>"
                      target="_blank">
                      <img src="<?php echo base_url('uploads/equipos').'/'.$estadioTemporal->foto_jug_be; ?>"
                      width="50px" height="50px"
                      alt="">
                    </a>
                  <?php else: ?>
                    N/A
                  <?php endif; ?>
                </td>
                <td class="text-center">
                    <a href="<?php echo site_url('estadios/actualizar')?>/<?php echo $estadioTemporal->id_est_be; ?>" class="btn btn-warning">
                        <i class="glyphicon glyphicon-edit"></i>
                        Editar
                    </a>
                    <a href="<?php echo site_url('estadios/borrar')?>/<?php echo $estadioTemporal->id_est_be; ?>" class="btn btn-danger" onclick="return confirm ('Estas seguro de que quieres eliminar')">
                        <i class="glyphicon glyphicon-trash"></i>
                        Eliminar
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
  <?php else: ?>
  <h3 class="text-center"><b>No existen Estadios</b></h3>
<?php endif; ?>



<script type="text/javascript">
  $("#tblequipos").DataTable();
</script>
