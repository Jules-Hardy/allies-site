<?php

namespace App\Core;

class Request
{
  public $url;
  public $path;

  public function __construct()
  {
    $url = rtrim($_SERVER['PATH_INFO'] ?? '', '/');
    // Si l'url est vide alors on considère qu'on est à la racine
    // On remplace donc l'url par / pour matcher nos routes correctement
    $this->url = empty($url) ? '/' : $url;
    $this->path = explode('/', $this->url);
  }
}