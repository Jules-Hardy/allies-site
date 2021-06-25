<?php $title = 'Tous les capteurs'; ?>
<?php ob_start(); ?>
<?php 
  $activesCapteurs = 0;
  $numberOfTest = sizeof($vars[2]);
  $allTests = $vars[2];
  krsort($allTests);
  foreach($vars[1] as $capteur){
    if($capteur["is_active"] == 1)$activesCapteurs++;
  }

  function user_from_id($vars, $id){
    foreach($vars[4] as $u){
      if($u["id"] == $id)return $u;
    }
    return "a";
  }
?>
<section>

  <content>
    <h1>Gérer les capteurs</h1>
    <h2>Les chiffres clés</h2>
    <div class="stat">
      <a href="#">
        <div class="block-info alert">
          <h3><?php echo $activesCapteurs; ?></h3>
          <p>Capteurs actifs</p>
        </div>
      </a>
      <a href="/admin/test">
        <div class="block-info info">
          <h3><?php echo $numberOfTest; ?></h3>
          <p>Tests effectués</p>
        </div>
      </a>
      <a href="#">
        <div class="block-info success">
          <h3>4</h3>
          <p>Utilisateurs testés</p>
        </div>
      </a>
    </div>

    <div class="container-actions">
      <a href="/admin/sensor/all">
        <div class="block-action info">
          <h4>Gérer les capteurs</h4>
        </div>
      </a>
      <a href="/admin/test">
        <div class="block-action alert">
          <h4>Gérer les tests</h4>
        </div>
      </a>
    </div>


    <h2>Les derniers tests réalisés</h2>

    <table>
      <thead>
        <tr>
          <th scope="col">Utilisateur</th>
          <th scope="col">#Test</th>
          <th scope="col">Date</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        foreach($allTests as $test){
      ?>
        <tr>
          <th scope="row"><?php echo user_from_id($vars, $test["id_user"])["firstname"]; ?></th>
          <td>#<?php echo $test['id']; ?></td>
          <td><?php echo $test['date']; ?></td>
          <td>
            <a href="/admin/test/<?php echo $test['id']; ?>"><button type="button" class="button button--small info">
                Voir le test
              </button>
          </td>
        </tr>
        <?php
        }
      ?>
      </tbody>
    </table>

    <div class="text-align-right">
      <a href="/admin/test" class="button alert button--normal">Tout voir</a>
    </div>

  </content>

  <?php $content = ob_get_clean(); ?>
  <?php require(ROOT.'/app/view/layoutadmin.php'); ?>