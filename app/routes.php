<?php

return [
  '/' => '',
  '/faq' => '',
  '/:id/:test' => 'PagesController::index',

  '/admin' => 'Admin\AdminController::index',
  '/admin/ticket/:id' => 'Admin\AdminController::index'
];