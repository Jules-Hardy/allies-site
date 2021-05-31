<?php

return [

  // SITE VITRINE
  '/' => 'PagesController::accueil',
  '/contact' => 'PagesController::contact',

  
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

  '/support' => 'TicketController::affichertouslestickets',
  '/support/nouveau' => 'TicketController::nouveauticket',
  '/support/ticket/:id' => 'TicketController::voirunticket',
  '/support/close/:id' => 'TicketController::supprimerticket',



  // ADMINISTRATION 
  '/admin' => 'Admin\AdminController::accueil',

  '/admin/faq' => 'Admin\FaqController::touteslesquestions',
  '/admin/faq/new' => 'Admin\FaqController::touteslesquestions',
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
  '/admin/user/edit/:id' => 'Admin\UserController::voirprofil',

  '/admin/user/edit' => 'Admin\UserController::touslesutilisateurs',
  '/admin/user/delete/' => 'Admin\UserController::touslesutilisateurs',
  '/admin/user/delete/:id' => 'Admin\UserController::supprimerutilisateur',
  '/admin/user/search' => 'Admin\UserController::recherche',
];