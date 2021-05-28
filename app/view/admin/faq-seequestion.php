<?php $title = 'FAQ - Editer une question'; ?>

<?php ob_start(); ?>

<section>
  <content>
    <h1>Modifier une question</h1>
    <h2><?php echo "#", $vars[1]["id"]; ?> : <?php echo $vars[1]["question"]; ?><span class="role alert">par <?php echo $vars[2]["firstname"]; ?></span></h2>
    <!-- Contenu à mettre de la page -->
    <div class="data-information">
      <form action="" method="POST">
        <label>Question :</label><br> <textarea name="question"><?php echo $vars[1]["question"]; ?></textarea></br>
        <label>Réponse :</label><br> <textarea name="answer"><?php echo $vars[1]["answer"]; ?></textarea></br>

        <input type="submit" name="modify" class="button button--normal info" value="Modifier la question">
        <input type="submit" name="delete" class="button button--normal alert" value="Supprimer la question">
      </form>
    </div>
  </content>

  <?php $content = ob_get_clean(); ?>
  <?php require(ROOT.'/app/view/layoutadmin.php'); ?>