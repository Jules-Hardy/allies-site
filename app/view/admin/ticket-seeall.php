<?php $title = 'Tickets Support - Tous'; ?>
<?php ob_start(); ?>
<?php

  function get_author_for_ticket($vars, $id){
    foreach($vars as $u){
      if($u['id'] == $id)return $u;
    }
  }
?>
<section>

  <content>
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
        <?php 
          foreach($vars[1] as $ticket){
        ?>
        <tr>
          <th scope="row"><?php echo $ticket["subject"]; ?></th>
          <td class="<?php echo $ticket['status'] == 2 ? 'closed' : ($ticket['is_answered'] == 1 ? 'answered' : 'open'); ?>"><?php echo $ticket["status"] == 2 ? "Fermé" : ($ticket['is_answered'] == 1 ? 'Répondu' : 'Ouvert');?></td>
          <td><?php $u = get_author_for_ticket($vars[2], $ticket['id_author']); echo $u["firstname"], " ", $u['lastname']; ?></td>
          <td>
          <?php if($ticket['status'] == 2){
            echo ('<a href="/admin/ticket/answer/' . $ticket['id'] . '"><button type="button" class="button button--small info">
            Voir
          </button></a>');
          }else{
            echo(' <a href=""><button type="button" class="button button--small success">
            Répondre
          </button></a>
        <a href=""><button type="button" class="button button--small alert">
            Supprimer
          </button></a>');
          }
            ?>
          </td>
        </tr>
        <?php
          }
        ?>
     
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