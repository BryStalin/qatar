



<legend class="text-center">
    <i class="glyphicon glyphicon-user"> </i>
    <b>Gestion posiciones</b>
</legend>
<hr>

<center>

    <a href="<?php echo site_url('posiciones/nuevo'); ?> " class="btn btn-succeess">
        <i class="glyphicon glyphicon-plus"></i>
            Agregar Nuevo
    </a>

</center>
<br><br>
<?php if ($listadoPosiciones): ?>
    <table id="tbl-posiciones" class="table table-striped table-bordered table-hover">

    <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">PUNTOS</th>
        <th class="text-center">GOLES</th>
        <th class="text-center">ACCIONES</th>

    </tr>
    </thead>
    <tbody>
        <?php foreach($listadoPosiciones->result() as $posicionTemporal):?>
            <tr>
                <td class="text-center">
                    <?php echo $posicionTemporal->id_pos_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $posicionTemporal->nombre_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $posicionTemporal->puntos_be; ?>
                </td>
                <td class="text-center">
                    <?php echo $posicionTemporal->goles_be; ?>
                </td>


                <td class="text-center">
                    <a href="<?php echo site_url('posiciones/actualizar')?>/<?php echo $estadioTemporal->id_pos_be; ?>" class="btn btn-warning">
                        <i class="glyphicon glyphicon-edit"></i>
                        Editar
                    </a>
                    <a href="<?php echo site_url('posiciones/borrar')?>/<?php echo $posicionTemporal->id_pos_be; ?>" class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>
                        Eliminar
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
  <?php else: ?>
  <h3><b>No existen posiciones</b></h3>
<?php endif; ?>



<script type="text/javascript">
  $("#tbl-estadios").DataTable();
</script>
<br><br>
<h1 class="text-center">POSICIONES</h1>
<BR></BR>

<div class="container marketing">

<!-- Three columns of text below the carousel -->



<!-- START THE FEATURETTES -->

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 col-md-push-5">
    <h2 class="featurette-heading ">Al Thumama</h2>
    <p class="lead">Con goles de Hernández y de Kolo Muani, el elenco europeo se impuso ante el conjunto africano y se medirá ante la Albiceleste en el encuentro cumbre de Catar 2022.</p>
  </div>
  <div class="col-md-5 col-md-pull-7">
    <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="<?php echo base_url(); ?>/assets/images/Al Thumama.png"data-holder-rendered="true">
  </div>
</div>
<br><br>
<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 col-md-push-5">
    <h2 class="featurette-heading">Al JANOUB</h2>
    <p class="lead">Lionel Scaloni volvió a acertar con sus modificaciones y su selección se metió en la final de la Copa Mundial de Catar 2022.</p>
  </div>
  <div class="col-md-5 col-md-pull-7">
    <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="<?php echo base_url(); ?>/assets/images/al janoub.png" data-holder-rendered="true">
  </div>
</div>
<br><br>
<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 col-md-push-5">
    <h2 class="featurette-heading">Bin Ali</h2>
    <p class="lead">FIFA+ destaca los récords de la Copa Mundial de la FIFA que pertenecen a Lionel Messi y los que persigue.</p>
  </div>
  <div class="col-md-5 col-md-pull-7">
    <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="<?php echo base_url(); ?>/assets/images/bin ali.png" data-holder-rendered="true">
  </div>
</div>
<hr class="featurette-divider">
<div class="row featurette">
  <div class="col-md-7 col-md-push-5">
    <h2 class="featurette-heading">Educational</h2>
    <p class="lead">FIFA+ destaca los récords de la Copa Mundial de la FIFA que pertenecen a Lionel Messi y los que persigue.</p>
  </div>
  <div class="col-md-5 col-md-pull-7">
    <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="<?php echo base_url(); ?>/assets/images/Education.png" data-holder-rendered="true">
  </div>
</div>




</div>
