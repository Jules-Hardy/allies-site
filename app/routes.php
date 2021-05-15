<?php

return [

  // SITE VITRINE
  '/' => 'PagesController::accueil',

  '/connexion' => 'ConnexionController::connexion',
  '/inscription' => 'ConnexionController::inscription',
  '/oublie' => 'ConnexionController::oublie',
  '/deconnexion' => 'ConnexionController::deconnexion',

  '/faq' => 'PagesController::faq',
  '/mentions' => 'PagesController::mentions',
  '/apropos' => 'PagesController::apropos',

  '/resultats' => 'UserdataController::afficher',

  '/mon-profil' => 'UserController::affichermonprofil',
  '/mon-profil/editer' => 'UserController::editer',

  '/support' => 'TicketController::afficher',
  '/support/nouveau' => 'TicketController::nouveau',
  '/support/ticket' => 'TicketController::afficher',
  '/support/ticket/:id' => 'TicketController::repondre',



  // ADMINISTRATION 
  '/admin' => 'Admin\AdminController::accueil',

  '/admin/faq' => 'Admin\FaqController::touteslesquestions',
  '/admin/faq/modify/:id' => 'Admin\FaqController::modifier',

  '/admin/sensor' => 'Admin\SensorController::touslescapteurs',
  '/admin/sensor/modify' => 'Admin\SensorController::touslescapteurs',
  '/admin/sensor/modify/:id' => 'Admin\SensorController::modifiercapteur',
  '/admin/test' => 'Admin\SensorController::touslestests',
  '/admin/test/modify' => 'Admin\SensorController::touslestests',
  '/admin/test/modify/:id' => 'Admin\SensorController::modifiertest',

  '/admin/ticket' => 'Admin\TicketController::touslestickets',
  '/admin/ticket/answer' => 'Admin\TicketController::touslestickets',
  '/admin/ticket/answer/:id' => 'Admin\TicketController::repondre',

  '/admin/user' => 'Admin\UserController::touslesutilisateurs',
  '/admin/user/edit' => 'Admin\UserController::touslesutilisateurs',
  '/admin/user/edit/:id' => 'Admin\UserController::editerutilisateur',

];