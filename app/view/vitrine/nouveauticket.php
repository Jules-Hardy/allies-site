<?php $title = 'Ouvrir un ticket'; ?>

<?php ob_start(); ?>

<div id="centre_page">
  <div class="cadre_inscription">
    <form action="" method="POST">
      <br>
      <strong>Créer un ticket </strong> <br />
      <label>Titre :</label><br> <textarea name="title"></textarea> <br />
      <label>Contenu :</label><br> <textarea name="content"></textarea><br />
      <br>
      <input type="submit" name="modify" class="button button--normal info" value="Créer">
    </form>
  </div>
  <?php $content = ob_get_clean(); ?>

  <?php require(ROOT.'/app/view/layoutvitrine.php'); ?>