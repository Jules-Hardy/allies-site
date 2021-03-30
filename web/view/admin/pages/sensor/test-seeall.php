<html>
<?php 
  $navPageName = 'Gérer les capteurs';
  include '../../includes/head.php';
  include '../../includes/nav.php';?>

<body>
  <section>
    <content>
      <h1>Gérer les capteurs</h1>
      <h2>Tous les tests</h2>
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

    <?php include '../../includes/footer.php';?>
  </section>
</body>

</html>