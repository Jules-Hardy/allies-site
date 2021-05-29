<?php $title = 'Ouvrir un ticket'; ?>

<?php ob_start(); ?>

<div id="centre_page">
  <br>
  <br>
  <br>
  <br>
  <br>

  <div class="cadre_inscription">
  <form action="" method="POST">
    <br>
    <strong>Ajouter votre tiquet : </strong> <br />

    <input type="text" name="message" />
    <br>


    <a href="" id="essai99"><button class="valider">VALIDER</button></a>
    </form>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>










  <?php $content = ob_get_clean(); ?>

  <?php require(ROOT.'/app/view/layoutvitrine.php'); ?>