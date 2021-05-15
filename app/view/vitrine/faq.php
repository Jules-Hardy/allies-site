<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p>Derniers billets du blog :</p>

<?php $body = ob_get_clean(); ?>

<?php require('layout.php'); ?>