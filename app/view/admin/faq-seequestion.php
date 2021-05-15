<?php $title = 'FAQ - Editer une question'; ?>

<?php ob_start(); ?>

<content>
  <h1>Modifier une question</h1>
  <h2>#2 : Comment me connecter à mon compte ? <span class="role alert">par Jules</span></h2>
  <!-- Contenu à mettre de la page -->
  <div class="data-information">
    <form action="getform.php" method="get">
      <label>Question :</label><br> <textarea>Comment me connecter à mon compte ?</textarea></br>
      <label>Réponse :</label><br> <textarea>Blabla</textarea></br>

      <input type="submit" class="button button--normal info" value="Modifier la question">
      <input type="submit" class="button button--normal alert" value="Supprimer la question">
    </form>
  </div>
</content>
<?php $content = ob_get_clean(); ?>
<?php require(ROOT.'/app/view/layoutadmin.php'); ?>