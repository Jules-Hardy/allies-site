<html>
<!-- On ajoute le head de chaque page commun et la barre de navigation -->
<?php 
  $navPageName = 'Gérer la FAQ';
  include '../../includes/head.php';
  include '../../includes/nav.php';?>

<body>
  <section>
    <content>
      <h1>Modifier une question</h1>
      <h2>#2 : Comment me connecter à mon compte ? <span class="role alert">par Jules</span></h2>
      <!-- Contenu à mettre de la page -->
      <div class="data-information">
        <form action="getform.php" method="get">
          <label>Question :</label><br> <textarea>Comment me connecter à mon compte ?</textarea></br>
          <label>Réponse :</label><br> <textarea>Blabla</textarea></br>

          <input type="submit" class="button button--normal info" value="Modifier la question">
          <input type="submit" class="button button--normal alert" value="Supprimer la question">
        </form>
      </div>
    </content>
    <!-- Footer -->
    <?php include '../../includes/footer.php';?>
    <!-- Fin Footer -->
  </section>
</body>

</html>