

<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i>
<b>Gestión De partidogrupos</b>
</legend>
<hr>
<center>
<a href="<?php echo site_url('partidogrupos/nuevo') ?>" class="btn btn-success">
<i class="glyphicon glyphicon-plus"></i>
AGREGAR NUEVO
</a>
</center>
<br>

<?php if ($listadoPartidogrupos):?>
<table id="tbl-partidogrupo" class=" table-striped table-bordered table-hover">
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
      <?php foreach($listadoPartidogrupos->result() as $partidogrupoTemporal):?>
            <tr>
                <td class="text-center">
                    <?php echo $partidogrupoTemporal->id_pg_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $partidogrupoTemporal->pais1_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $partidogrupoTemporal->pais2_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $partidogrupoTemporal->ciudad_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $partidogrupoTemporal->fecha_be; ?>
                </td>




                <td class="text-center">
                    <a href="<?php echo site_url('partidogrupos/actualizar')?>/<?php echo $partidogrupoTemporal->id_pg_be; ?>" class="btn btn-warning">
                        <i class="glyphicon glyphicon-edit"></i>
                        Editar
                    </a>
                    <a href="<?php echo site_url('partidogrupos/borrar')?>/<?php echo $partidogrupoTemporal->id_pg_be; ?>" class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>
                        Eliminar
                    </a>
                </td>
            </tr>
      <?php endforeach; ?>
    </tbody>

</table>
<?php else: ?>
  <h3><b>NO EXISTEN PARTIDOGRUPOS</b></h3>
<?php endif; ?>
</div>


