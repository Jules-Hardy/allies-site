<?php $title = 'Mon profil'; ?>

<?php ob_start(); ?>
<div id="image_profil">
  <img id="img-profil" src="../ressources/images/imagepp.jpg">
  <img src="images/<?=$image_imagepp?>" />
</div>

<div id="bouton_modifier">
  <button class="bouton_modifier">MODIFIER</button>
</div>
<form action="" method="POST" id="update" name="update">
<div id="remplir_champs">
  <div id="remplir_prenom">
    <p>Prénom</p>
    <input type="text" form="update"  name="firstname" size="80" value="<?=$vars[0]['firstname'];?>"/>
  </div>
  <div id="remplir_nom">
    <p>Nom</p>
    <input type="text" form="update"  name="lastname" size="80"value="<?=$vars[0]['lastname'];?>" />
  </div>
  <div id="remplir_age">
    <p>Email</p>
    <input type="mail" form="update"  name="email" size="80" value="<?=$vars[0]['email'];?>"/>
  </div>
  <div id="remplir_tel">
    <p>Mot de passe</p>
    <input name="password" form="update" type="password" size="80" value="********" />
    <button form="update" type="submit" id="modify" class="bouton_modifier">MODIFIER LE PROFIL</button>

  </div>
</div>
</form>
<script>
  document.getElementById("modify").addEventListener("click", function(e){
    e.preventDefault();
    document.getElementById("update").submit();
  });
</script>

<?php $content = ob_get_clean(); ?>

<?php require(ROOT.'/app/view/layoutvitrine.php'); ?>