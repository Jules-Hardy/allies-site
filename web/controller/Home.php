<?php


require_once(DIR . "/controller/Controller.php");


class Home extends Controller
{

    /**
     * Display home page
     */
    public function index() {
      echo "home";
       $this->render("index", []);
    }

}