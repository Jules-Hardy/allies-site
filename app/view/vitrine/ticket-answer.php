<?php $title = 'Ticket - Répondre'; ?>
<?php ob_start(); ?>
<img id="pilotes" src="/ressources/images/pilotes.png">

<div id="carte_FAQ">

  <div id="q_r">
    <!-- essai -->
    <h1 id="titre2"> Répondre au ticket #<?php echo $vars[1]["id"]; ?></h1>
    <h2> Titre du ticket <span style="color:red"><small><a href="/support/close/<?php echo($vars[1]['id']); ?>"> Fermer le ticket</a></small></span></h2>
    <?php foreach($vars[2] as $m){

    ?>
      <p class='<?php echo($m["id_sender"] == $vars[0]["id"] ? 'reponse' : 'question'); ?>'>
      <span class="test"><b><?php echo($m["id_sender"] == $vars[0]["id"] ? 'Vous' : 'Administrateur'); ?></b></span><br>
      <br>
      <?php echo $m["content"]; ?>
      </p>
    <?php
    }
    ?>
  

  </div>
  <?php 
    if($vars[1]["status"] == 1){

  ?> 
 
  <form action="" method="POST" id="fo">
    <div style="display: flex;height: auto;padding: 20px;background-color: white;border-top: solid 1px grey;">
      <textarea type="text" name="message"
        style="flex-grow: 10;order: 0;margin-right: 30px;padding: 15px;overflow: auto;border-radius: 6px;"
        placeholder="Votre réponse"></textarea>
      <button id="foC" class="btn-link"><i class="material-icons">send</i></button>
    </div>
  </form>
  <?php  
  }
  ?>
</div>
<?php $content = ob_get_clean(); ?>

<?php require(ROOT.'/app/view/layoutvitrine.php'); ?>