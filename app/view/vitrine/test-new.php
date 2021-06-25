<?php $title = 'Nouveau test'; ?>
<?php ob_start(); ?>
<style>
table,
th,
td {
  border: 1px solid black;
}

table,
th,
td {
  border: 1px solid black;
  border-collapse: collapse;
}

th,
td {
  padding: 15px;
}

th {
  text-align: left;
}

table {
  border-spacing: 5px;
}

a {
  text-decoration: none;
}

button {
  padding: 10px;
  background-color: grey;
  color: white;
  margin-bottom: 20px;
}
</style>

<script>
/* -- -- -- Début -- -- -- */
var cpt = 10;
var x;

function decompte() {
  if (cpt >= 0) {
    if (cpt > 1) {
      var sec = " secondes.";
    } else {
      var sec = " seconde.";
    }
    document.getElementById("Crono").innerHTML = "Redirection dans " + cpt + sec;
    cpt--;
    x = setTimeout("decompte()", 1000);
  } else {
    clearTimeout(x);
  }
}
/* -- -- -- Fin -- -- -- */
</script>

<body onload="decompte();">

  <div id="Crono"></div>

</body>

<img id="pilotes" src="../ressources/images/pilotes.png">

<div id="carte_FAQ">

  <div id="q_r">
    <h2>Création d'un test</h2>
    <p>Bienvenue, le test va bientôt commencer. Pour cela, nous vous invitons à vous référer à la carte.</p>
    <p>Lorsque vous aurez terminé, merci de cliquer sur le bouton ci-dessous</p>

  </div>


  <?php $content = ob_get_clean(); ?>

  <?php require(ROOT.'/app/view/layoutvitrine.php'); ?>