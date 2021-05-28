<?php $title = 'Se connecter'; ?>

<?php ob_start(); ?>
<div id="centre_page">


  <br>
  <div class="cadre_connexion">

    <span id="connexion">CONNEXION</span>
    <?php 
      if(sizeof($vars) != 0 && $vars[0] != NULL && $vars[0] == "invalid"){
          echo('    <p class="error">Identifiants invalides</p>          ');
      }
    ?>
    <br>

    <br>
    <form action="" method="POST"> 
    <strong>Adresse mail :</strong> <br />

    <input name="mail" type="text" size="40" />
    <!-- <span class="bordure_texte">charles-arthur.pacton@eleve.isep.fr</span
            > -->
    <br />

    <strong>Mot de passe : </strong> <br />

    <input type="password" name="password" size="40" />
    <br>
    <br>
    <a href=""><button class="but_co">ME CONNECTER</button></a>
    <br />

    </form>

    <a href="mdp_oublie.php" class="taille_text"><u> J'ai oublié mon mot de passe </u> </a>
    <br />
    <a href="/inscription" class="taille_text"><u> S'inscrire </u> <!-- </span> --><br /></a>



  </div>

  <br>


</div>
<?php $content = ob_get_clean(); ?>

<?php require(ROOT.'/app/view/layoutvitrine.php'); ?>