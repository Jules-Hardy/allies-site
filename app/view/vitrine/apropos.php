<?php $title = 'A propos'; ?>

<?php ob_start(); ?>

<div id="blanc">


  <img id="teamworking" src="../ressources/images/teamworking.png">


  <div id="espace">
  </div>
  <p>Circa hos dies Lollianus primae lanuginis adulescens, Lampadi filius ex praefecto, exploratius causam Maximino
    spectante, convictus codicem noxiarum artium nondum per aetatem firmato consilio descripsisse, exulque mittendus, ut
    sperabatur, patris inpulsu provocavit ad principem, et iussus ad eius comitatum duci, de fumo, ut aiunt, in flammam
    traditus Phalangio Baeticae consulari cecidit funesti carnificis manu.Circa hos dies Lollianus primae lanuginis
    adulescens, Lampadi filius ex praefecto, exploratius causam Maximino spectante, convictus codicem noxiarum artium
    nondum per aetatem firmato consilio descripsisse, exulque mittendus, ut sperabatur, patris inpulsu provocavit ad
    principem, et iussus ad eius comitatum duci, de fumo, ut aiunt, in flammam traditus Phalangio Baeticae consulari
    cecidit funesti carnificis manu.</p>
  <br>



  <h2>Notre équipe:</h2>


  <div id="ligneun">



    <div class="photo">
      <img src="../ressources/images/clem.png" alt="" width="120" height="120">
      <p>Clémence</p>
    </div>



    <div class="photo">
      <img src="../ressources/images/laurine.png" alt="" width="120" height="120">
      <p>Laurine</p>
    </div>


    <div class="photo">
      <img src="../ressources/images/charles-arthur.png" alt="" width="120" height="120">
      <p>Charles-Arthur</p>
    </div>

  </div>



  <div id="lignedeux">

    <div class="photo">
      <img src="../ressources/images/jules.png" alt="" width="120" height="120">
      <p>Jules</p>
    </div>

    <div class="photo">
      <img src="../ressources/images/paul.png" alt="" width="120" height="120">
      <p>Paul</p>
    </div>

    <div class="photo">
      <img src="../ressources/images/antoine.png" alt="" width="120" height="120">
      <p>Antoine</p>
    </div>

  </div>


  <img id="travailenequipe" src="../ressources/images/travailenequipe.png">


  <div id="texteun">
    <p>Circa hos dies Lollianus primae lanuginis adulescens, Lampadi filius ex praefecto, exploratius causam Maximino
      spectante, convictus codicem noxiarum artium
      nondumper aetatem firmato consilio descripsisse, exulque mittendus, ut sperabatur, patris inpulsu provocavit ad
      principem, et iussus ad eius comitatum duci,
      fumo, ut aiunt, in flammam traditus Phalangio Baeticae consulari cecidit funesti carnificis manu.</p>
  </div>


  <div id="textedeux">
    <p>Circa hos dies Lollianus primae lanuginis adulescens, Lampadi filius ex praefecto, exploratius causam Maximino
      spectante, convictus codicem noxiarum artium
      nondumper aetatem firmato consilio descripsisse, exulque mittendus, ut sperabatur, patris inpulsu provocavit ad
      principem, et iussus ad eius comitatum duci,
      fumo, ut aiunt, in flammam traditus Phalangio Baeticae consulari cecidit funesti carnificis manu.</p>

  </div>


  <div id="dernierephoto">
    <img src="../ressources/images/travailenequipe.png">
  </div>

</div>

<?php $content = ob_get_clean(); ?>

<?php require(ROOT.'/app/view/layoutvitrine.php'); ?>