

<legend class="text-center">
  <i class="glyphicon glyphicon-user"></i>
<b>Gestión De Grupos</b>
</legend>
<hr>
<center>
<a href="<?php echo site_url('grupos/nuevo') ?>" class="btn btn-success">
<i class="glyphicon glyphicon-plus"></i>
AGREGAR NUEVO
</a>
</center>
<br>

<?php if ($listadoHoteles):?>
<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th class="text-center">ID</th>
      <th class="text-center">GRUPO</th>
      <th class="text-center">PAIS</th>
      <th class="text-center">PAIS</th>
      <th class="text-center">PAIS</th>
      <th class="text-center">PAIS</th>
      <th class="text-center">ACCIONES</th>
    
    </tr>
  </thead>
  <tbody>
      <?php foreach($listadoHoteles->result() as $hotelTemporal):?>
            <tr>
                <td class="text-center">
                    <?php echo $hotelTemporal->id_grupo; ?>
                </td>
                <td class="text-center">
                    <?php echo $hotelTemporal->nombre; ?>
                </td>
                <td class="text-center">
                    <?php echo $hotelTemporal->pais1; ?>
                </td>
                <td class="text-center">
                    <?php echo $hotelTemporal->pais2; ?>
                </td>
                <td class="text-center">
                    <?php echo $hotelTemporal->pais3; ?>
                </td>
                <td class="text-center">
                    <?php echo $hotelTemporal->pais4; ?>
                </td>
                


              
                <td class="text-center">
                    <a href="<?php echo site_url('grupos/actualizar')?>/<?php echo $hotelTemporal->id_grupo; ?>" class="btn btn-warning">
                        <i class="glyphicon glyphicon-edit"></i>
                        Editar
                    </a>
                    <a href="<?php echo site_url('grupos/borrar')?>/<?php echo $hotelTemporal->id_grupo; ?>" class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>
                        Eliminar
                    </a>
                </td>
            </tr>
      <?php endforeach; ?>
    </tbody>

</table>
<?php else: ?>
  <h3><b>NO EXISTEN GRUPOS</b></h3>
<?php endif; ?>
</div>

 