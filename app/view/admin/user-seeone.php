<?php $title = 'Utilisateurs - Modifier'; ?>

<?php ob_start(); ?>

<section>
  <content>
    <h1>Modifier un membre</h1>
    <h2>Membre <?= $vars['id'] ?> - <?= $vars['firstname'] ?> <?= $vars['lastname'] ?> <span class="role alert">ROLE A
        FAIRE</span></h2>

    <div class="data-information">
      <form method="POST">
        <label name="firstname">Prénom : <input type="text" value="<?= $vars['firstname'] ?> "></label><br>
        <label>Nom : <input type="text" value="<?= $vars['lastname'] ?> "></label><br>
        <label>Adresse email : <input type="email" value="<?= $vars['email'] ?> "></label></br>
        <label>Mot de passe : <input type="password" value="**********"></label>
        <br>

        <label for="role">Rôle :</label>
        <select name="role" id="role">
          <option value="administrateur" <?php if($vars['role'] == '2'){echo 'selected="selected"';}?>>Administrateur
          </option>
          <option value="gestionnaire" <?php if($vars['role'] == '1'){echo 'selected="selected"';}?>>Gestionnaire
          </option>
          <option value="utilisateur" <?php if($vars['role'] == '0'){echo 'selected="selected"';}?>>Utilisateur</option>
        </select><br>
        <a href="/admin/user/edit/<?= $vars['id'] ?>"><input type="submit" class="button button--normal info"
            value="Modifier le membre" name="modify"></a>
        <a href="/admin/user/delete/<?= $vars['id'] ?>"><input class="button button--normal alert"
            value="Supprimer le membre" name="delete"></a>
      </form>
    </div>

  </content>


  <?php $content = ob_get_clean(); ?>
  <?php require(ROOT.'/app/view/layoutadmin.php'); ?>