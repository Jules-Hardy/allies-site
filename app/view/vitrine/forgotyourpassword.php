<?php $title = 'Mot de passe oublié'; ?>

<?php ob_start(); ?>

<div id="centre_page">

  <br>
  <!-- <div id="carte_connexion"> -->
  <div class="cadre_connexion_2">
    Nous venons de vous envoyer un mot de passe de récupération dans votre
    boite mail.
    <br /><br />
    Un lien vous renverra sur la page de de connexion depuis laquelle vous
    pourrez de nouveau vous connecter.
  </div>
  <br>

</div>
<?php $content = ob_get_clean(); ?>

<?php require(ROOT.'/app/view/layoutvitrine.php'); ?>