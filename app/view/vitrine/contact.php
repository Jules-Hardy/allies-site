<?php $title = 'Contact'; ?>

<?php ob_start(); ?>

<?php $content = ob_get_clean(); ?>

<style>
/* Style inputs with type="text", select elements and textareas */
input[type=text],
select,
textarea {
  width: 100%;
  /* Full width */
  padding: 12px;
  /* Some padding */
  border: 1px solid #ccc;
  /* Gray border */
  border-radius: 4px;
  /* Rounded borders */
  box-sizing: border-box;
  /* Make sure that padding and width stays in place */
  margin-top: 6px;
  /* Add a top margin */
  margin-bottom: 16px;
  /* Bottom margin */
  resize: vertical
    /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<div id="carte_FAQ">
  <div class="images">
    <img id="pilotes" src="../ressources/images/Stylo.jpg">
  </div>

  <div id="q_r">
    <h2 id="titre2">Contactez nous...</h2>
    <div class="container">
      <form action="action_page.php">

        <label for="fname">Nom et prénom</label>
        <input type="text" id="fname" name="firstname" placeholder="Votre nom">

        <label for="lname">Email</label>
        <input type="text" id="lname" name="email" placeholder="Votre email">

        <label for="service">Service</label>
        <select id="country" name="service">
          <option value="commercial">Commercial</option>
          <option value="technique">Technique</option>
          <option value="administration">Administration</option>
        </select>

        <label for="subject">Sujet</label>
        <textarea id="subject" name="subject" placeholder="Sujet" style="height:200px"></textarea>

        <input type="submit" value="Envoyer">

      </form>
    </div>
  </div>

</div>

<?php require(ROOT.'/app/view/layoutvitrine.php'); ?>