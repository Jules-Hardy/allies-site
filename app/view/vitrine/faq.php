<?php $title = 'FAQ - Foire aux questions'; ?>
<?php 
  function get_author_for_faq($vars, $id){
    $us = $vars[2];
    foreach($us as $u){
      if($u["id"] == $id["id"])return $u;
    }
  }
?>
<?php ob_start(); ?>

<div id="carte_FAQ">
  <div class="images">
    <img src="../ressources/images/Stylo.jpg" width="100%" height="200%" alt="photo de fond">

  </div>

  <div id="q_r">
    <!-- essai -->
    <h2 id="titre2"> Foire aux Questions </h2>

    <?php foreach($vars[1] as $faq){
    ?>
       <p class="question">
          <b>Question</b> - <?php echo get_author_for_faq($vars, $faq)["firstname"]; ?> - <?php echo $faq["create_time"]; ?> <br>
      <br>
      <?php echo $faq["question"]; ?>
    </p>
    <p class="reponse">

      <span class="test"><b>Réponse</b></span><br>
      <br>
        <?php echo $faq["answer"]; ?>
      </p>

    <?php
    } ?>

  </div>

</div>
<?php $content = ob_get_clean(); ?>

<?php require(ROOT.'/app/view/layoutvitrine.php'); ?>