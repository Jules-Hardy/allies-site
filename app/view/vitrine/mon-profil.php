<?php $title = 'Mon profil'; ?>

<?php ob_start(); ?>
<div id="image_profil">
  <img id="img-profil" src="../ressources/images/imagepp.jpg">
  <img src="images/<?=$image_imagepp?>" />
</div>

<div id="bouton_modifier">
  <button class="bouton_modifier">MODIFIER</button>
</div>

<div id="remplir_champs">
  <div id="remplir_prenom">
    <p>Prénom</p>
    <input type="text" size="80" />
  </div>
  <div id="remplir_nom">
    <p>Nom</p>
    <input type="text" size="80" />
  </div>
  <div id="remplir_age">
    <p>Âge</p>
    <input type="text" size="80" />
  </div>
  <div id="remplir_tel">
    <p>Téléphone</p>
    <input type="text" size="80" />
  </div>
  <div id="remplir_mail">
    <p>Adresse mail</p>
    <input type="text" size="80" />
  </div>
  <div id="remplir_adresse">
    <p>Adresse postale</p>
    <input type="text" size="80" />
  </div>
  <div id="remplir_ville">
    <p>Ville</p>
    <input type="text" size="80" />
  </div>
  <div id="remplir_poste">
    <p>Code Postal</p>
    <input type="text" size="80" />
  </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require(ROOT.'/app/view/layoutvitrine.php'); ?>