<?php $title = 'Statistiques'; ?>

<?php ob_start(); ?>

<h2>Vos résultats: </h2>

<div>
  <h3>Sudation corporelle</h3>
  <h3>Rythme cardiaque</h3>
  <h3>Tonalité</h3>
  <h3>Température</h3>
</div>

<?php $content = ob_get_clean(); ?>

<?php require(ROOT.'/app/view/layoutvitrine.php'); ?>