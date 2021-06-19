<?php $title = 'Capteur - Editer'; ?>

<?php ob_start(); ?>

<section>
  <content>
    <h1>Gérer les capteurs</h1>
    <h2>Modifier le capteur <?php echo "#",$vars[1]; ?> : <?php echo $vars[2]["name"]; ?></h2>
    <div class="data-information">
      <form method="POST">
        <label>Nom du capteur : <input name="firstname" type="text" value="<?= $vars[1]['firstname'] ?> "></label><br>
        <a href="#"><input type="submit" class="button button--normal info" value="Modifier le capteur"
            name="modify"></a>
        <!--<a href="/admin/user/delete/<?= $vars[1]['id'] ?>"><input class="button button--normal alert"
            value="Supprimer le membre" name="delete"></a>-->
      </form>
    </div>
  </content>


  <?php $content = ob_get_clean(); ?>
  <?php require(ROOT.'/app/view/layoutadmin.php'); ?>