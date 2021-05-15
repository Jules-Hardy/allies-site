<?php $title = 'Tickets support'; ?>
<?php ob_start(); ?>

<content>
  <h1>Tickets Support</h1>
  <h2>Les derniers tickets support</h2>
  <table>
    <thead>
      <tr>
        <th scope="col">Titre du ticket</th>
        <th scope="col">Etat</th>
        <th scope="col">Auteur</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Je désire être mis en relation avec un admin</th>
        <td class="open">Ouvert</td>
        <td>Jules HARDY</td>
        <td>
          <a href="seeone.php"><button type="button" class="button button--small success">
              Répondre
            </button></a>
          <a href=""><button type="button" class="button button--small alert">
              Supprimer
            </button></a>
        </td>
      </tr>
      <tr>
        <th scope="row">Je désire être mis en relation avec un admin</th>
        <td class="answered">Répondu</td>
        <td>Jules HARDY</td>
        <td>
          <a href=""><button type="button" class="button button--small success">
              Répondre
            </button></a>
          <a href=""><button type="button" class="button button--small alert">
              Supprimer
            </button></a>
        </td>
      </tr>

      <tr>
        <th scope="row">Je désire être mis en relation avec un admin</th>
        <td class="answered">Répondu</td>
        <td>Jules HARDY</td>
        <td>
          <a href=""><button type="button" class="button button--small success">
              Répondre
            </button></a>
          <a href=""><button type="button" class="button button--small alert">
              Supprimer
            </button></a>
        </td>
      </tr>
      <tr>
        <th scope="row">Je désire être mis en relation avec un admin</th>
        <td class="open">Ouvert</td>
        <td>Jules HARDY</td>
        <td>
          <a href=""><button type="button" class="button button--small success">
              Répondre
            </button></a>
          <a href=""><button type="button" class="button button--small alert">
              Supprimer
            </button></a>
        </td>

      </tr>
    </tbody>
  </table>
  <div class="text-align-right">
    <a href="seeall.php" class="button info button--normal">Tout voir</a>
  </div>
  <h2>Les derniers tickets fermés</h2>
  <table>
    <thead>
      <tr>
        <th scope="col">Titre du ticket</th>
        <th scope="col">Etat</th>
        <th scope="col">Auteur</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Je désire être mis en relation avec un admin</th>
        <td class="closed">Fermé</td>
        <td>Jules HARDY</td>
        <td>
          <a href=""><button type="button" class="button button--small info">
              Voir
            </button></a>
        </td>
      </tr>
      <tr>
        <th scope="row">Je désire être mis en relation avec un admin</th>
        <td class="closed">Fermé</td>
        <td>Jules HARDY</td>
        <td>
          <a href=""><button type="button" class="button button--small info">
              Voir
            </button></a>
        </td>
      </tr>
      <tr>
        <th scope="row">Je désire être mis en relation avec un admin</th>
        <td class="closed">Fermé</td>
        <td>Jules HARDY</td>
        <td>
          <a href=""><button type="button" class="button button--small info">
              Voir
            </button></a>
        </td>
      </tr>
      </tfoot>
  </table>
</content>


<?php $content = ob_get_clean(); ?>
<?php require(ROOT.'/app/view/layoutadmin.php'); ?>