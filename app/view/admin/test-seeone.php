<?php $title = 'Test - Voir un test'; ?>

<?php ob_start(); ?>
<?php 

  //vars[0] = Current Logged User
  //vars[1] = All Users
  //vars[2] = Test
  //vars[3] = Sensors
  //vars[4] = Datas
  $firstname = "";
  function get_sensor($vars, $id){
    foreach($vars[3] as $sensor){
      if($sensor["id"] == $id)return $sensor;
    }
  }

  foreach($vars[1] as $u){
    if($u["id"] == $vars[2]["id_user"]){
      $firstname = $u["firstname"];
    }
  }
?>
<section>

  <content>
    <h1>Gérer le test</h1>
    <h2><?php echo "#",$vars[2]["id"]; ?> : Test de <?php echo $firstname; ?> <span class="role alert">le <?php echo $vars[2]["date"]; ?></span></h2>
    <?php
     foreach($vars[4] as $data){
        if($data["id_test"] != $vars[2]["id"])continue;
        echo(' <div class="container-sensor">
        <h3>Capteur : ' . get_sensor($vars, $data["id_sensor"])["name"].'</h3>
        <p>Heure : ' . $data["date"] . '</p>
        <p>Valeur : ' . $data["value"] . '</p>
      </div>');
    }
    ?>
   
    <div class="data-information">
      <form method="POST">
        <a href="#"><input type="submit" class="button button--normal info" value="Supprimer le test" name="delete"></a>
        <!--<a href="/admin/user/delete/<?= $vars[1]['id'] ?>"><input class="button button--normal alert"
            value="Supprimer le membre" name="delete"></a>-->
      </form>
    </div>

  </content>

  <?php $content = ob_get_clean(); ?>
  <?php require(ROOT.'/app/view/layoutadmin.php'); ?>