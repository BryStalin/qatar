

<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i>
<b>Gestión De Partido semifinal</b>
</legend>
<hr>
<center>
<a href="<?php echo site_url('partidosemis/nuevo') ?>" class="btn btn-success">
<i class="glyphicon glyphicon-plus"></i>
AGREGAR NUEVO
</a>
</center>
<br>

<?php if ($listadoPartidosemis):?>
<table id="tbl-partidosemis" class=" table-striped table-bordered table-hover">
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
      <?php foreach($listadoPartidosemis->result() as $partidosemiTemporal):?>
            <tr>
                <td class="text-center">
                    <?php echo $partidosemiTemporal->id_pgse_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $partidosemiTemporal->pais1se_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $partidosemiTemporal->pais2se_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $partidosemiTemporal->ciudadse_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $partidosemiTemporal->fechase_be; ?>
                </td>




                <td class="text-center">
                    <a href="<?php echo site_url('partidosemis/actualizar')?>/<?php echo $partidosemiTemporal->id_pgse_be; ?>" class="btn btn-warning">
                        <i class="glyphicon glyphicon-edit"></i>
                        Editar
                    </a>
                    <a href="<?php echo site_url('partidosemis/borrar')?>/<?php echo $partidosemiTemporal->id_pgse_be; ?>" class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>
                        Eliminar
                    </a>
                </td>
            </tr>
      <?php endforeach; ?>
    </tbody>

</table>
<?php else: ?>
  <h3 class="text-center"><b>NO EXISTEN PARTIDOS OCTAVOS</b></h3>
<?php endif; ?>
</div>

