<!DOCTYPE html>
<html>
<?php include '../includes/head.php'; ?>


<body>
  <?php include '../includes/header.php'; ?>
  <div id="centre_page">
    <div class="cadre_inscription">

      <span id="inscription"> INSCRIPTION </span>
      <br>
      <br>
      <strong>Nom* : </strong> <br />

      <input type="text" />
      <br>

      <strong>Prénom* : </strong> <br />

      <input type="text" />


      <strong>Genre :</strong> <br>


      <input type="checkbox" id="Homme" name="Homme" checked>
      <label for="Homme">Homme</label>

      <input type="checkbox" id="Femme" name="Femme">
      <label for="Femme">Femme</label>


      <br>



      <strong>Adresse mail* :</strong> <br />

      <input type="text" />
      <!-- <span class="bordure_texte">charles-arthur.pacton@eleve.isep.fr</span
          > -->
      <br />
      <strong>Mot de passe* :</strong> <br />

      <input type="password" />
      <!-- <span class="bordure_texte">..........</span> <br /> -->

      <br>
      <strong>Confirmer mot de passe* : </strong> <br />

      <input type="password" />
      <br />




      <input type="checkbox" id="subscribeNews" name="subscribe" value=newsletter">
      <label for="subscribeNews">Je souhaite m'abonner à la newsletter </label>
      <br>
      <input type="checkbox" id="conditions_gle" name="subscribe" value=newsletter">
      <label for="subscribeNews">J'ai lu les conditions générales d'utilisation*</label>
      <br>



      <!-- <button type="submit">Je m'abonne</button>
		  <br> -->


      <a href="" id="essai99"><button class="but_inscription">VALIDER</button></a>
      <br>
      <br>
      <i> * Champs obligatoires </i>
      <br>
      <br>
      <u><i>Conditions génrales</u></i>
    </div>
  </div>

  <?php include '../includes/footer.php'; ?>

</body>

</html>