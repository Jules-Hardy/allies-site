<?php $title = 'Tickets Support - Tous'; ?>
<?php ob_start(); ?>

<h1>Tickets Support</h1>
<h2>Tous les tickets</h2>
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
      <td class="closed">Fermé</td>
      <td>Jules HARDY</td>
      <td>
        <a href=""><button type="button" class="button button--small info">
            Voir
          </button></a>
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