<?php $title = 'Tous mes tests'; ?>
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
<img id="pilotes" src="../ressources/images/pilotes.png">

<div id="carte_FAQ">

  <div id="q_r">
    <h2>Test #1</h2>
    <div class="container-sensor">
      <h3>Capteur :</h3>
      <p>Heure : ' . $data["date"] . '</p>
      <p>Valeur : ' . $data["value"] . '</p>
    </div>
  </div>


  <?php $content = ob_get_clean(); ?>

  <?php require(ROOT.'/app/view/layoutvitrine.php'); ?>