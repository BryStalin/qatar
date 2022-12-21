

<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i>
<b>Gestión De Partidos Cuartos</b>
</legend>
<hr>
<center>
<a href="<?php echo site_url('partidocuartos/nuevo') ?>" class="btn btn-success">
<i class="glyphicon glyphicon-plus"></i>
AGREGAR NUEVO
</a>
</center>
<br>

<?php if ($listadoPartidocuartos):?>
<table id="tbl-partidocuarto" class=" table-striped table-bordered table-hover">
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
      <?php foreach($listadoPartidocuartos->result() as $partidocuartoTemporal):?>
            <tr>
                <td class="text-center">
                    <?php echo $partidocuartoTemporal->id_pgcu_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $partidocuartoTemporal->pais1cu_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $partidocuartoTemporal->pais2cu_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $partidocuartoTemporal->ciudadcu_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $partidocuartoTemporal->fechacu_be; ?>
                </td>




                <td class="text-center">
                    <a href="<?php echo site_url('partidocuartos/actualizar')?>/<?php echo $partidocuartoTemporal->id_pgcu_be; ?>" class="btn btn-warning">
                        <i class="glyphicon glyphicon-edit"></i>
                        Editar
                    </a>
                    <a href="<?php echo site_url('partidocuartos/borrar')?>/<?php echo $partidocuartoTemporal->id_pgcu_be; ?>" class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>
                        Eliminar
                    </a>
                </td>
            </tr>
      <?php endforeach; ?>
    </tbody>

</table>
<?php else: ?>
  <h3><b>NO EXISTEN PARTIDO CUARTOS</b></h3>
<?php endif; ?>
</div>


