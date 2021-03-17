<html>
<?php 
  $navPageName = 'Gérer les membres';
  include '../../includes/head.php';
  include '../../includes/nav.php';?>

<body>
  <section>
    <content>
      <h1>Gérer les membres</h1>
      <h2>Tous les utilisateurs</h2>
      <table>
        <thead>
          <tr>
            <th scope="col">Prénom Nom</th>
            <th scope="col">Rôle</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Jules HARDY</th>
            <td>Gestionnaire</td>
            <td>juleshardy78@gmail.com</td>
            <td>
              <a href="seeone.php"><button type="button" class="button button--small info">
                  Voir le membre
                </button>
            </td>
          </tr>

          <tr>
            <th scope="row">Laurine RECH</th>
            <td>Administrateur</td>
            <td>juleshardy78@gmail.com</td>
            <td>
              <a href=""><button type="button" class="button button--small info">
                  Voir le membre
                </button>
            </td>
          </tr>

          <tr>
            <th scope="row">Machinette</th>
            <td>Utilisateur</td>
            <td>juleshardy78@gmail.com</td>
            <td>
              <a href=""><button type="button" class="button button--small info">
                  Voir le membres
                </button>
            </td>
          </tr>

          <tr>
            <th scope="row">Jules HARDY</th>
            <td>Gestionnaire</td>
            <td>juleshardy78@gmail.com</td>
            <td>
              <a href="seeone.php"><button type="button" class="button button--small info">
                  Voir le membre
                </button>
            </td>
          </tr>

          <tr>
            <th scope="row">Laurine RECH</th>
            <td>Administrateur</td>
            <td>juleshardy78@gmail.com</td>
            <td>
              <a href=""><button type="button" class="button button--small info">
                  Voir le membre
                </button>
            </td>
          </tr>

          <tr>
            <th scope="row">Machinette</th>
            <td>Utilisateur</td>
            <td>juleshardy78@gmail.com</td>
            <td>
              <a href=""><button type="button" class="button button--small info">
                  Voir le membres
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