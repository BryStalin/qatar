

<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i>
<b>Gestión De Partido Octavos</b>
</legend>
<hr>
<center>
<a href="<?php echo site_url('partidooctavos/nuevo') ?>" class="btn btn-success">
<i class="glyphicon glyphicon-plus"></i>
AGREGAR NUEVO
</a>
</center>
<br>

<?php if ($listadoPartidooctavos):?>
<table id="tbl-partidooctavos" class=" table-striped table-bordered table-hover">
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
      <?php foreach($listadoPartidooctavos->result() as $partidooctavoTemporal):?>
            <tr>
                <td class="text-center">
                    <?php echo $partidooctavoTemporal->id_pgoc_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $partidooctavoTemporal->pais1oc_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $partidooctavoTemporal->pais2oc_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $partidooctavoTemporal->ciudadoc_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $partidooctavoTemporal->fechaoc_be; ?>
                </td>




                <td class="text-center">
                    <a href="<?php echo site_url('partidooctavos/actualizar')?>/<?php echo $partidooctavoTemporal->id_pgoc_be; ?>" class="btn btn-warning">
                        <i class="glyphicon glyphicon-edit"></i>
                        Editar
                    </a>
                    <a href="<?php echo site_url('partidooctavos/borrar')?>/<?php echo $partidooctavoTemporal->id_pgoc_be; ?>" class="btn btn-danger">
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


