<?php $title = 'Capteur - Editer'; ?>

<?php ob_start(); ?>

<section>
  <content>
    <h1>Gérer les capteurs</h1>
    <h2>Modifier le capteur <?php echo "#",$vars[1]; ?> : <?php echo $vars[2]["name"]; ?></h2>

  </content>


  <?php $content = ob_get_clean(); ?>
  <?php require(ROOT.'/app/view/layoutadmin.php'); ?>