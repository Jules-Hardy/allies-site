<?php $title = 'Tous les tests'; ?>

<?php ob_start(); ?>
<?php 
function get_user_for($vars, $id){
  foreach($vars[2] as $u){
    if($u["id"] == $id)return $u;
  }
}
?>
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
      <?php 
        foreach($vars[1] as $test){
      ?>
        <tr>
            <th scope="row"><?php echo get_user_for($vars, $test["id_user"])["firstname"];?></th>
            <td><?php echo "#",$test["id"]; ?></td>
            <td><?php echo $test["date"]; ?></td>
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