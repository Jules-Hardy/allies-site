<?php $title = 'Tous les tickets'; ?>
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
    <h2>Tous les tickets</h2>
    <button onclick="window.location.href = '/support/nouveau';">Ouvrir un nouveau ticket</button>
    <table style="width:100%">
      <tr>
        <th>Titre</th>
        <th>Date et status</th>
        <th>Action</th>
      </tr>
      <tr>
        <td>Test titre</td>
        <td>12 mai 2021 - <font color="green"><b>ouvert</b></font>
          </green>
        </td>
        <td><a href="" style="color:blue;"><b>Répondre</b></a> | <a href="" style="color:red;"><b>Fermer</b></a></td>
      </tr>
      <tr>
        <td>Test titre</td>
        <td>12 mai 2021 - <font color="orange"><b>répondu</b></font>
          </green>
        </td>
        <td><a href="" style="color:blue;"><b>Répondre</b></a> | <a href="" style="color:red;"><b>Fermer</b></a></td>
      </tr>
      <tr>
        <td>Test titre</td>
        <td>12 mai 2021 - <font color="red"><b>fermé</b></font>
          </green>
        </td>
        <td><a href="" style="color:blue;"><b>Voir</b></a></td>
      </tr>
    </table>




  </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require(ROOT.'/app/view/layoutvitrine.php'); ?>