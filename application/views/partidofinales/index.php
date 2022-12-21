

<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i>
<b>Gestión De Partido final</b>
</legend>
<hr>
<center>
<a href="<?php echo site_url('partidofinales/nuevo') ?>" class="btn btn-success">
<i class="glyphicon glyphicon-plus"></i>
AGREGAR NUEVO
</a>
</center>
<br>

<?php if ($listadoPartidofinales):?>
<table id="tbl-partidofinales" class=" table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th class="text-center">ID</th>
      <th class="text-center">PAIS1</th>
      <th class="text-center">PAIS2</th>
      <th class="text-center">CIUDAD</th>
      <th class="text-center">FECHA</th>
      <th class="text-center">ACCIONES</th>

    </tr>
  </thead>
  <tbody>
      <?php foreach($listadoPartidofinales->result() as $partidofinalTemporal):?>
            <tr>
                <td class="text-center">
                    <?php echo $partidofinalTemporal->id_pgfi_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $partidofinalTemporal->pais1fi_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $partidofinalTemporal->pais2fi_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $partidofinalTemporal->ciudadfi_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $partidofinalTemporal->fechafi_be; ?>
                </td>




                <td class="text-center">
                    <a href="<?php echo site_url('partidofinales/actualizar')?>/<?php echo $partidofinalTemporal->id_pgfi_be; ?>" class="btn btn-warning">
                        <i class="glyphicon glyphicon-edit"></i>
                        Editar
                    </a>
                    <a href="<?php echo site_url('partidofinales/borrar')?>/<?php echo $partidofinalTemporal->id_pgfi_be; ?>" class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>
                        Eliminar
                    </a>
                </td>
            </tr>
      <?php endforeach; ?>
    </tbody>

</table>
<?php else: ?>
  <h3 class="text-center"><b>NO EXISTEN PARTIDOS FINALES</b></h3>
<?php endif; ?>
</div>


