<?php $title = 'Utilisateurs - Modifier'; ?>

<?php ob_start(); ?>

<section>
  <content>
    <h1>Modifier un membre</h1>
    <h2>Membre <?= $vars[1]['id'] ?> - <?= $vars[1]['firstname'] ?> <?= $vars[1]['lastname'] ?> <span class="role alert"><?php echo $vars[1]["roleName"]; ?></span></h2>

    <div class="data-information">
      <form method="POST">
        <label >Prénom : <input name="firstname" type="text" value="<?= $vars[1]['firstname'] ?> "></label><br>
        <label>Nom : <input name="lastname" type="text" value="<?= $vars[1]['lastname'] ?> "></label><br>
        <label>Adresse email : <input name="email" type="email" value="<?= $vars[1]['email'] ?> "></label></br>
        <label>Mot de passe : <input name="password" type="password" value="**********"></label>
        <br>

        <label for="role">Rôle :</label>
        <select name="role" id="role">
          <option value="administrateur" <?php if($vars[1]['role'] == '2'){echo 'selected="selected"';}?>>Administrateur
          </option>
          <option value="gestionnaire" <?php if($vars[1]['role'] == '1'){echo 'selected="selected"';}?>>Gestionnaire
          </option>
          <option value="utilisateur" <?php if($vars[1]['role'] == '0'){echo 'selected="selected"';}?>>Utilisateur</option>
        </select><br>
        <a href="/admin/user/edit/<?= $vars[1]['id'] ?>"><input type="submit" class="button button--normal info"
            value="Modifier le membre" name="modify"></a>
        <!--<a href="/admin/user/delete/<?= $vars[1]['id'] ?>"><input class="button button--normal alert"
            value="Supprimer le membre" name="delete"></a>-->
      </form>
    </div>

  </content>


  <?php $content = ob_get_clean(); ?>
  <?php require(ROOT.'/app/view/layoutadmin.php'); ?>