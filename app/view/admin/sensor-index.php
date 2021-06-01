<?php $title = 'Tous les capteurs'; ?>

<?php ob_start(); ?>

<h1>Gérer les capteurs</h1>
<h2>Les chiffres clés</h2>
<div class="stat">
  <a href="#">
    <div class="block-info alert">
      <h3>4</h3>
      <p>Capteurs actifs</p>
    </div>
  </a>
  <a href="#">
    <div class="block-info info">
      <h3>48</h3>
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
  <a href="#">
    <div class="block-action info">
      <h4>Gérer les capteurs</h4>
    </div>
  </a>
  <a href="#">
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
    <tr>
      <th scope="row">Jules</th>
      <td>#2</td>
      <td>12/02/2021</td>
      <td>
        <a href="seeone.php"><button type="button" class="button button--small info">
            Voir le test
          </button>
      </td>
    </tr>
    <tr>
      <th scope="row">Jules</th>
      <td>#2</td>
      <td>12/02/2021</td>
      <td>
        <a href="seeone.php"><button type="button" class="button button--small info">
            Voir le test
          </button>
      </td>
    </tr>
    <tr>
      <th scope="row">Jules</th>
      <td>#2</td>
      <td>12/02/2021</td>
      <td>
        <a href="seeone.php"><button type="button" class="button button--small info">
            Voir le test
          </button>
      </td>
    </tr>
  </tbody>
</table>

<div class="text-align-right">
  <a href="../sensor/seeall.php" class="button alert button--normal">Tout voir</a>
</div>

</content>

<?php $content = ob_get_clean(); ?>
<?php require(ROOT.'/app/view/layoutadmin.php'); ?>