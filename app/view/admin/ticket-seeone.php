<?php $title = 'Tickets support - Répondre au ticket'; ?>

<?php ob_start(); ?>
<?php

  function get_author_for_ticket($vars, $id){
    foreach($vars as $u){
      if($u['id'] == $id)return $u;
    }
  }

  function get_author_for_message($vars, $id){
    foreach($vars as $u){
      if($u['id'] == $id)return $u;
    }
  }

  function is_admin($ticket, $message){
    return $message["id_sender"] != $ticket["id_author"];
  }
  ?>
<section>

  <content>
    <h1>Détails du ticket</h1>

    <div class="messages-container">
      <div class="ticket-info">
        <h2>Ticket <?php echo "#",$vars[1]["id"],": ",$vars[1]["subject"]; ?></h2>
        <ul>
          <li>Auteur : <?php $u = get_author_for_ticket($vars[2], $vars[1]["id_author"]); echo $u['firstname'],' ',$u['lastname'];?></li>
          <li>Date : <?php echo $vars[1]['create_date']; ?></li>
          <li>Status : <?php echo $vars[1]["status"] == 2 ? "Fermé" : ($vars[1]['is_answered'] == 1 ? 'Répondu' : 'Ouvert');?></li>
          <?php if($vars[1]['status'] != 2)echo('<li><a class="closed" href="">Fermer le ticket</a></li>');?>
        </ul>
      </div>
      <?php 
        foreach($vars[3] as $rep){
      ?>
 <div class="message message--<?php echo(is_admin($vars[1], $rep) ? 'right' : 'left'); ?>">
        <div class="message-info">
          <ul>
            <li>Auteur : <?php echo get_author_for_message($vars[2], $rep["id_sender"])['firstname']; ?></li>
            <li>le <?php echo $rep["sent_date"]; ?></li>
          </ul>
        </div>
        <div class="message-content">
          <p><?php echo $rep['content']; ?></p>
        </div>
      </div>
      <?php
        }
      ?>
      <form action="" name="send" id="send" method="POST" id="send">
        <div class="reponse">
          <textarea type="text" name="message" form="send" class="contenu-message" placeholder="Votre réponse"></textarea>
          <button id="foC" type="submit" class="btn-link"><i class="material-icons">send</i></button>
        </div>
      </form>

    </div>
      <script>
        document.getElementById('foC').addEventListener('click', (e) => {
          e.preventDefault();
          document.getElementById('send').submit();
        });
        function sendMsg(){
        }
      </script>
  </content>


  <?php $content = ob_get_clean(); ?>
  <?php require(ROOT.'/app/view/layoutadmin.php'); ?>