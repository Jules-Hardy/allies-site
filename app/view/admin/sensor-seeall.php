<?php $title = 'Tous les capteurs'; ?>

<?php ob_start(); ?>

<section>

  <content>
    <h1>Gérer les capteurs</h1>
    <h2>Tous les capteurs</h2>
    <table>
      <thead>
        <tr>
          <th scope="col">Capteur</th>
          <th scope="col">#id</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Température</th>
          <td>#2</td>
          <td>
            <a href="/admin/test/1"><button type="button" class="button button--small info">
                Gérer le test
              </button>
          </td>
        </tr>
        <tr>
          <th scope="row">Jules</th>
          <td>#2</td>
          <td>12/02/2021</td>
          <td>
            <a href="/admin/test/1"><button type="button" class="button button--small info">
                Voir le test
              </button>
          </td>
        </tr>
        <tr>
          <th scope="row">Jules</th>
          <td>#2</td>
          <td>12/02/2021</td>
          <td>
            <a href="/admin/test/1"><button type="button" class="button button--small info">
                Voir le test
              </button>
          </td>
        </tr>
      </tbody>
    </table>


    <div class="pagination">
      <ul id="pagination-flickr">
        <li class="previous-off">« Précédent</li>
        <li class="active">1</li>
        <li><a href="/?page=2">2</a></li>
        <li><a href="/?page=3">3</a></li>
        <li><a href="/?page=4">4</a></li>
        <li><a href="/?page=5">5</a></li>
        <li><a href="/?page=6">6</a></li>
        <li><a href="/?page=7">7</a></li>
        <li class="next"><a href="/?page=2">Suivant »</a></li>
      </ul>
    </div>

  </content>

  <?php $content = ob_get_clean(); ?>
  <?php require(ROOT.'/app/view/layoutadmin.php'); ?>