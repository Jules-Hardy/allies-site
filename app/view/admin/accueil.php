<?php $title = 'Admin - Accueil'; ?>

<?php ob_start(); ?>

<section>
  <content>
    <h1>Accueil</h1>
    <h2>Les chiffres clés</h2>
    <div class="stat">
      <a href="">
        <div class="block-info alert">
          <h3>48</h3>
          <p>Utilisateurs</p>
        </div>
      </a>
      <a href="#">
        <div class="block-info info">
          <h3>48</h3>
          <p>Utilisateurs</p>
        </div>
      </a>
      <a href="#">
        <div class="block-info success">
          <h3>48</h3>
          <p>Utilisateurs</p>
        </div>
      </a>
    </div>
    <h2>Les derniers utilisateurs</h2>

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
      </tbody>


    </table>
    <div class="text-align-right">
      <a href="../test/index.php" class="button alert button--normal">Tout voir</a>
    </div>


    <h2>Les derniers test</h2>

    <table>
      <thead>
        <tr>
          <th scope="col">Prénom Nom</th>
          <th scope="col">#Test</th>
          <th scope="col">Capteur</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Jules HARDY</th>
          <td>#1</td>
          <td>Température</td>
          <td>
            <a href="../test/seeone.php"><button type="button" class="button button--small info">
                Voir le test
              </button>
          </td>
        </tr>

        <tr>
          <th scope="row">Laurine RECH</th>
          <td>#2</td>
          <td>Tonalité</td>
          <td>
            <a href=""><button type="button" class="button button--small info">
                Voir le test
              </button>
          </td>
        </tr>

        <tr>
          <th scope="row">Paul</th>
          <td>#3</td>
          <td>Stress</td>
          <td>
            <a href=""><button type="button" class="button button--small info">
                Voir le test
              </button>
          </td>
        </tr>
      </tbody>
    </table>

    <div class="text-align-right">
      <a href="../user/index.php" class="button alert button--normal">Tout voir</a>
    </div>


  </content>
  <?php $content = ob_get_clean(); ?>

  <?php require(ROOT.'/app/view/layoutadmin.php'); ?>