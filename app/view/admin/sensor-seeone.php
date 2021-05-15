<?php $title = 'Capteur - Editer'; ?>

<?php ob_start(); ?>
<content>
  <h1>Gérer les capteurs</h1>
  <h2>Modifier le capteur #2 : Température</h2>

</content>


<?php $content = ob_get_clean(); ?>
<?php require(ROOT.'/app/view/layoutadmin.php'); ?>