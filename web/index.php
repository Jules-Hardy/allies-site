<html><?php
// On génère une constante contenant le chemin vers la racine publique du projet
define("DIR", getcwd());

// On appelle le modèle et le contrôleur principaux
//require_once(ROOT.'model/Model.php');
require_once(DIR.'/controller/Controller.php');

// Check si le user et ou non connecté et quel type de compte il
// utilise puis require le controller conrrespondant


session_start();
$params = explode('/', $_GET['p']);
try {
    if ($params[0] != "") {

        $controller = ucfirst($params[0]);
        $action = isset($params[1]) ? $params[1] : 'index';
        if (!file_exists(DIR . '/controller/'  . '.php')) {
            header("Location: /");
            exit();
        }
        if (method_exists($controller, $action)) {
            unset($params[0]);
            unset($params[1]);
            call_user_func_array([$controller, $action], $params);
        } else {
            http_response_code(404);
            echo "La page recherchée n'existe pas";
        }
    } else {
        require_once(DIR . "/controller/home.php");

        echo "home";
        $home = new Home();
        $home->index();
    }
}
catch (\PDOException $e) {
    require_once(DIR . '/controller/Error.php');
    $controller = new Controller\ErrorC();
    $controller->pdo($e);
}
?>
</html>
