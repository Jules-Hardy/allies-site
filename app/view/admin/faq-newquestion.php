<?php $title = 'FAQ - Ajouter une question'; ?>

<?php ob_start(); ?>

<section>
  <content>
    <h1>Ajouter une question</h1>
    <!-- Contenu à mettre de la page -->
    <div class="data-information">
      <form action="" method="POST">
        <label>Question :</label><br> <textarea name="question"></textarea></br>
        <label>Réponse :</label><br> <textarea name="answer"></textarea></br>

        <input type="submit" name="modify" class="button button--normal info" value="Créer">
      </form>
    </div>
  </content>

  <?php $content = ob_get_clean(); ?>
  <?php require(ROOT.'/app/view/layoutadmin.php'); ?>