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
<?php 
function get_sensor_name($vars, $id){
    foreach($vars[3] as $sensor){
        if($sensor["id"] == $id)return $sensor;
    }
}
?>
<img id="pilotes" src="../ressources/images/pilotes.png">

<div id="carte_FAQ">

  <div id="q_r">
    <h2>Information du test <?php echo "#",$vars[2]["id"]; ?></h2>
    <table style="width:100%">
      <tr>
        <th>Capteur</th>
        <th>Date</th>
        <th>Valeur</th>
      </tr>
      <?php 
      foreach($vars[1] as $data){
        ?>
         <tr>
        <td><?php echo get_sensor_name($vars, $data["id_sensor"])["name"]; ?></td>
        <td><?php echo $data["date"]; ?>
        </td>
        <td><?php echo $data["value"]; ?></td>
      </tr>
        <?php
      }
      ?>
     
    </table>
  </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require(ROOT.'/app/view/layoutvitrine.php'); ?>