<?php $title = 'FAQ - Toutes les questions'; ?>

<?php ob_start(); ?>
<section>
  <content>
    <h1>Gérer la FAQ</h1>
    <h2>Toutes les questions</h2>
    <table>
      <thead>
        <tr>
          <th scope="col">Question</th>
          <th scope="col">Auteur</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Comment me connecter à mon espace client ?</th>
          <td>Jules</td>
          <td>
            <a href="seeone.php"><button type="button" class="button button--small info">
                Voir la question
              </button>
          </td>
        </tr>

        <tr>
          <th scope="row">Comment faire ca ?</th>
          <td>Laurine</td>
          <td>
            <a href="seeone.php"><button type="button" class="button button--small info">
                Voir la question
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