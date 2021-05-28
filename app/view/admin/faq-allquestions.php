<?php $title = 'FAQ - Toutes les questions'; ?>
<?php
  function get_author_faq($vars, $id){
    foreach($vars[2] as $u){
      if($u["id"] == $id)return $u["firstname"];
    }
    return "";
  }
?>
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
      <?php 
      foreach($vars[1] as $faq){
      ?>
        <tr>
          <th scope="row"><?php echo $faq["question"]; ?></th>
          <td><?php echo get_author_faq($vars, $faq["id_author"]); ?></td>
          <td>
            <a href="/admin/faq/modify/<?php echo $faq['id']; ?>"><button type="button" class="button button--small info">
                Voir la question
              </button>
          </td>
        </tr>
      <?php
      }
      ?>
      
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