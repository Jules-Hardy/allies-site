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
    <h2>Tous mes test</h2>
    <button onclick="window.location.href = '/test/new';">Créer un nouveau test</button>
    <table style="width:100%">
      <tr>
        <th>Titre</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
      <tr>
        <td>Sujet</td>
        <td>12/05/2021 à 05h54
        </td>
        <td><a href="/support/ticket/' . $ticket['id'] . '" style="color:blue;"><b>Voir</b></a></td>
      </tr>
    </table>
  </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require(ROOT.'/app/view/layoutvitrine.php'); ?>