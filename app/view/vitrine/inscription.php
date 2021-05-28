<?php $title = 'S\'inscire'; ?>

<?php ob_start(); ?>
<div id="centre_page">
  <br>
  <div class="cadre_inscription">
  <form action="" method="POST">
  <?php 
    if(sizeof($vars) > 0){
      $error = $vars[0];
      echo "<p class='error'>",$error,"</p>";
    }
  ?>
    <span id="inscription"> INSCRIPTION </span>
    <br>
    <br>
    <strong>Nom* : </strong> <br />

    <input type="text" required name="lastname" size="50" />
    <br>

    <strong>Prénom* : </strong> <br />

    <input type="text" required name="firstname" size="50" /><br>


    <strong>Genre :</strong> <br>


    <input type="checkbox" id="Homme" class="radioCheck" onclick="check(this);" name="Homme" checked>
    <label for="Homme">Homme</label>

    <input type="checkbox"  class="radioCheck" onclick="check(this);" id="Femme" name="Femme">
    <label for="Femme">Femme</label>


    <br>



    <strong>Adresse mail* :</strong> <br />

    <input type="text"  required name="email" size="50" />
    <!-- <span class="bordure_texte">charles-arthur.pacton@eleve.isep.fr</span
          > -->
    <br />
    <strong>Mot de passe* :</strong> <br />

    <input type="password" required name="password" size="50" />
    <!-- <span class="bordure_texte">..........</span> <br /> -->

    <br>
    <strong>Confirmer mot de passe* : </strong> <br />

    <input type="password" required name="password2" size="50" />
    <br />




    <input type="checkbox" id="subscribeNews" name="subscribe" value="newsletter">
    <label for="subscribeNews">Je souhaite m'abonner à la newsletter </label>
    <br>
    <input type="checkbox" id="conditions_gle" name="checkCond" required value="checkCond">
    <label for="subscribeNews">J'ai lu les conditions générales d'utilisation*</label>
    <br>



    <!-- <button type="submit">Je m'abonne</button>
		  <br> -->


    <a href="" id="essai99"><button class="but_inscription">VALIDER</button></a>
    </form>
    <br>
    <br>
    <i> * Champs obligatoires </i>
    <br>
    <br>
    <u><i>Conditions génrales</u></i>
  </div>
  <br>

</div>
<script>
function check(input)
    {
    	
    	var checkboxes = document.getElementsByClassName("radioCheck");
    	
    	for(var i = 0; i < checkboxes.length; i++)
    	{
    		//uncheck all
    		if(checkboxes[i].checked == true)
    		{
    			checkboxes[i].checked = false;
    		}
    	}
    	
    	//set checked of clicked object
    	if(input.checked == true)
    	{
    		input.checked = false;
    	}
    	else
    	{
    		input.checked = true;
    	}	
    }
</script>
<?php $content = ob_get_clean(); ?>

<?php require(ROOT.'/app/view/layoutvitrine.php'); ?>