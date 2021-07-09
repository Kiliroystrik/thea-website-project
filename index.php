<?php
//GENERATE CONST WHICH CONTAIN THE WAY TO INDEX.PHP
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

//SPLIT PARAMS

$params = explode('/', $_GET['p']);

//CHECK PARAM
if ($params[0] != "") {
    //TRANSFORM FIRST LETTER UPPERCASE TO MATCH CONTROLLER CAMELCASE
    $controller = ucfirst($params[0]);

    //EXIST $PARAMS 1 RECOVER $PARAMS 1 IF NOT GO TO INDEX (condition ternaire)
    $action = isset($params[1]) ? $params[1] : 'index';

    //RECOVER FILE IN CONTROLLER BUT GLOBALY THANKS TO CONST ROOT (CHECK LINE 2 FOR MORE INFOS)
    require_once(ROOT . 'controller/' . $controller . '.php');

    //NEW INSTANCE OF CLASS WHICH WAS SENT BY PARAMS THANKS TO VARIABLE
    $controller = new $controller();

    //CHECK IF I HAVE A METHOD TO CALL
    if (method_exists($controller, $action)) {
        //$action (line 15) IS ABLE TO RECOVER MY METHOD IN MY CLASS
        $controller->$action();
    } else {
        http_response_code(404);
        echo "ERREUR 404 : La page demandée n'existe pas";
    }
} else {
}
