<?php $title = 'FAQ - Foire aux questions'; ?>

<?php ob_start(); ?>

<div id="carte_FAQ">
  <div class="images">
    <img src="../ressources/images/Stylo.jpg" width="100%" height="200%" alt="photo de fond">

  </div>

  <div id="q_r">
    <!-- essai -->
    <h2 id="titre2"> Foire aux Questions </h2>


    <p class="question">
      Question - Jules - 01/02/2021 <br>
      <br>
      Lorem ipsum dolor sit amet, ligula suspendisse nulla pretium, rhoncus tempor fermentum, enim integer ad
      vestibulum volutpat. Nisl turpis est, vel elit, congue wisi enim nunc ultricies sit, magna tincidunt. Maecenas
      aliquam maecenas ligula nostra, accumsan taciti. Sociis mauris in integer, a dolor netus non dui aliquet,
      sagittis felis sodales, dolor sociis mauris, vel eu libero cras. Faucibus at. Arcu habitasse elementum.

    </p>

    <p class="reponse">

      <span class="test"> Réponse - Paul - 01/02/2021 </span><br>
      <br>
      Lorem ipsum dolor sit amet, ligula suspendisse nulla pretium, rhoncus tempor fermentum, enim integer ad
      vestibulum volutpat. Nisl turpis est, vel elit, congue wisi enim nunc ultricies sit, magna tincidunt. Maecenas
      aliquam maecenas ligula nostra, accumsan taciti. Sociis mauris in integer, a dolor netus non dui aliquet,
      sagittis felis sodales, dolor sociis mauris, vel eu libero cras. Faucibus at. Arcu habitasse elementum.


    </p>


    <p class="question">

      Question - Jules - 01/02/2021 <br>
      <br>
      Lorem ipsum dolor sit amet, ligula suspendisse nulla pretium, rhoncus tempor fermentum, enim integer ad
      vestibulum volutpat. Nisl turpis est, vel elit, congue wisi enim nunc ultricies sit, magna tincidunt. Maecenas
      aliquam maecenas ligula nostra, accumsan taciti. Sociis mauris in integer, a dolor netus non dui aliquet,
      sagittis felis sodales, dolor sociis mauris, vel eu libero cras. Faucibus at. Arcu habitasse elementum.

    </p>


    <p class="reponse">

      <span class="test"> Réponse - Paul - 01/02/2021 </span><br>
      <br>
      Lorem ipsum dolor sit amet, ligula suspendisse nulla pretium, rhoncus tempor fermentum, enim integer ad
      vestibulum volutpat. Nisl turpis est, vel elit, congue wisi enim nunc ultricies sit, magna tincidunt. Maecenas
      aliquam maecenas ligula nostra, accumsan taciti. Sociis mauris in integer, a dolor netus non dui aliquet,
      sagittis felis sodales, dolor sociis mauris, vel eu libero cras. Faucibus at. Arcu habitasse elementum.

    </p>


    <p class="question">

      Question - Jules - 01/02/2021 <br>
      <br>
      Lorem ipsum dolor sit amet, ligula suspendisse nulla pretium, rhoncus tempor fermentum, enim integer ad
      vestibulum volutpat. Nisl turpis est, vel elit, congue wisi enim nunc ultricies sit, magna tincidunt. Maecenas
      aliquam maecenas ligula nostra, accumsan taciti. Sociis mauris in integer, a dolor netus non dui aliquet,
      sagittis felis sodales, dolor sociis mauris, vel eu libero cras. Faucibus at. Arcu habitasse elementum.

    </p>


    <p class="reponse">

      <span class="test"> Réponse - Paul - 01/02/2021 </span><br>
      <br>
      Lorem ipsum dolor sit amet, ligula suspendisse nulla pretium, rhoncus tempor fermentum, enim integer ad
      vestibulum volutpat. Nisl turpis est, vel elit, congue wisi enim nunc ultricies sit, magna tincidunt. Maecenas
      aliquam maecenas ligula nostra, accumsan taciti. Sociis mauris in integer, a dolor netus non dui aliquet,
      sagittis felis sodales, dolor sociis mauris, vel eu libero cras. Faucibus at. Arcu habitasse elementum.
    </p>

  </div>

</div>
<?php $content = ob_get_clean(); ?>

<?php require(ROOT.'/app/view/layoutvitrine.php'); ?>