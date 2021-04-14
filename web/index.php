<?php
// On génère une constante contenant le chemin vers la racine publique du projet
// define('ROOT', getcwd());

define('ROOT', str_replace('index.php','',$_SERVER["SCRIPT_FILENAME"]));

require(ROOT.'/model/Model.php');
require(ROOT.'/controller/Controller.php');

// Check si le user et ou non connecté et quel type de compte il
// utilise puis require le controller conrrespondant


$params = explode('/', $_GET['p']);
$controller = $params[0];
$action = isset($params[1]) ? $params[1] : 'index';
require(ROOT.'/controller/'.$controller.'.php');

$controller = new $controller();


if(method_exists($controller, $action)){
  $controller -> $action();
}
else {
  echo "pas non trouvée";
}


?>