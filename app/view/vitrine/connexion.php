<?php $title = 'Se connecter'; ?>

<?php ob_start(); ?>
<div id="centre_page">


  <br>
  <div class="cadre_connexion">

    <span id="connexion">CONNEXION </span>
    <br>

    <br>

    <strong>Adresse mail :</strong> <br />

    <input type="text" size="40" />
    <!-- <span class="bordure_texte">charles-arthur.pacton@eleve.isep.fr</span
            > -->
    <br />

    <strong>Mot de passe : </strong> <br />

    <input type="password" size="40" />
    <br>
    <br>
    <a href=""><button class="but_co">ME CONNECTER</button></a>
    <br />



    <a href="mdp_oublie.php" class="taille_text"><u> J'ai oublié mon mot de passe </u> </a>
    <br />
    <a href="inscription.php" class="taille_text"><u> S'inscrire </u> <!-- </span> --><br /></a>



  </div>

  <br>


</div>
<?php $content = ob_get_clean(); ?>

<?php require(ROOT.'/app/view/layoutvitrine.php'); ?>