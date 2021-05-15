<?php

return [
  '/' => '',
  '/faq' => 'PagesController::faq',
  '/:id/:test' => 'PagesController::index',

  '/admin' => 'Admin\AdminController::accueil',
  '/admin/ticket/:id' => 'Admin\AdminController::index'
];