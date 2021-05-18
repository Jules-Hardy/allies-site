<?php

namespace App\Controller\Admin;

use App\Core\AbstactController;

class FaqController extends AbstactController
{
  
  public function touteslesquestions()
  {
    $this->render('admin', 'faq-allquestions');
  }

  public function modifier()
  {
    $this->render('admin', 'faq-seequestion');
  }
}