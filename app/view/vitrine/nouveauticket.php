<?php $title = 'Ouvrir un ticket'; ?>

<?php ob_start(); ?>
<style>
form {
  width: 100%;
}

textarea {
  width: 50%;
}

input {
  background-color: #39565c;
  color: white;
  font-size: 15px;
  padding: 10px 30px 10px 30px;
}
</style>


<div id="carte_FAQ">
  <div class="images">
    <img id="pilotes" src="../ressources/images/Stylo.jpg">
  </div>

  <div id="q_r">
    <!-- essai -->
    <h2 id="titre2"> Créer un ticket </h2>

    <form action="" name="create" id="create" method="POST">
      <br>
      <label>Titre :</label><br> <textarea style="resize: none; width:20%" form="create" name="title"></textarea>
      <br /><br />
      <label>Contenu :</label><br> <textarea form="create" name="content"></textarea><br />
      <br>
      <input type="submit" name="modify" class="button button--normal info" value="Créer">
    </form>
  </div>
</div>
<?php $content = ob_get_clean(); ?> <?php require(ROOT.'/app/view/layoutvitrine.php'); ?>