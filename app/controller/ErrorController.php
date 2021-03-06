<?php

namespace App\Controller;

use App\Core\AbstactController;

class ErrorController extends AbstactController
{
    /**
     * Handle PDO exceptions
     *
     * @param Exception $e The PDO Exception
     */
    public function pdo(\PDOException  $e) : void
    {
        $this->render("pdo", ["code" => $e->getCode(), "msg" => $e->getMessage()]);
    }

    /**
     * Handle all other exceptions
     *
     * @param Exception $e The Exception
     */
    public function index(Exception $e)
    {
        // TODO
        echo "hello error";
    }
}