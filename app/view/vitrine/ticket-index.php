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
      <?php foreach($vars[1] as $ticket){
      ?>
      <tr>
        <td><?php echo $ticket["subject"]; ?></td>
        <?php 
          $color = $ticket["status"] == 0 ? "red" : ($ticket["is_answered"] == 1 ? "orange" : "green");
        ?>
        <td><?php echo $ticket["create_date"]; ?> - <font color="<?php echo $color; ?>"><b><?php echo($ticket["status"] == 0 ? "Fermé" : ($ticket["is_answered"] == 1 ? "Répondu" : "Ouvert")); ?></b></font>
          </green>
        </td>
        <?php if($ticket["status"] == 1){
          echo('<td><a href="/support/ticket/' . $ticket['id'] . '" style="color:blue;"><b>Répondre</b></a> | <a href="/support/ticket/' . $ticket['id'] . '" style="color:red;"><b>Fermer</b></a></td>');
        }else{
          echo('<td><a href="/support/ticket/' . $ticket['id'] . '" style="color:green;"><b>Voir</b></a>');
        }
        ?>
      </tr>
      <?php
      }
      ?>
    </table>
  </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require(ROOT.'/app/view/layoutvitrine.php'); ?>