<?php $title = 'Ouvrir un ticket'; ?>

<?php ob_start(); ?>

<div id="centre_page">
  <br>
  <br>
  <br>
  <br>
  <br>

  <div class="cadre_inscription">
    <br>
    <strong>Ajouter votre tiquet : </strong> <br />

    <input type="text" />
    <br>


    <a href="" id="essai99"><button class="valider">VALIDER</button></a>

  </div>
  <br>
  <br>
  <br>
  <br>
  <br>










  <?php $content = ob_get_clean(); ?>

  <?php require(ROOT.'/app/view/layoutvitrine.php'); ?>