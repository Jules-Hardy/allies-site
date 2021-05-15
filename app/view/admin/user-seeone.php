<?php $title = 'Utilisateurs - Modifier'; ?>

<?php ob_start(); ?>
<content>
  <h1>Modifier un membre</h1>
  <h2>Membre #1 - Jules HARDY <span class="role alert">Administrateur</span></h2>

  <div class="data-information">
    <form action="getform.php" method="get">
      <label>Prénom : <input type="text" value="Jules"></label><br>
      <label>Nom : <input type="text" value="HARDY"></label><br>
      <label>Adresse email : <input type="email" value="juleshardy78@gmail.com"></label></br>
      <label>Mot de passe : <input type="password" value="**********"></label>
      <br>

      <label for="pet-select">Rôle :</label>
      <select name="pets" id="pet-select">
        <option value="administrateur">Administrateur</option>
        <option value="gestionnaire">Gestionnaire</option>
        <option value="utilisateur">Utilisateur</option>
      </select><br>
      <input type="submit" class="button button--normal info" value="Modifier le membre">
      <input type="submit" class="button button--normal alert" value="Supprimer le membre">
    </form>
  </div>

</content>


<?php $content = ob_get_clean(); ?>
<?php require(ROOT.'/app/view/layoutadmin.php'); ?>