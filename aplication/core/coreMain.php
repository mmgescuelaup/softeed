<?php

/**
 * Created by SocialNodes.
 * User: LuisAnc
 * Date: 02/11/2017
 * Administra el manejo y llamado de los controladores
 * Vc: 1.0.0
 */

/* Carga el controlador
* Controller: Nombre del controlador
*/
function loadController($controller)
{
    $controlador = ucwords($controller) . 'Controller';
    $strFileController = 'aplication/controllers/' . $controlador . '.php';

    if (!is_file($strFileController)) {
        $strFileController = 'aplication/controllers/' . ucwords(DEFAULT_CONTROLLER) . 'Controller.php';
    }

    require_once $strFileController;
    $controllerObj = new $controlador();
    return $controllerObj;
}

/*Carga la accion del controlador seleccionado
* ControllerObj: Funcion del controlador
* Action: Nombre de la accion o funcion
*/
function loadAction($controllerObj, $action)
{
    $accion = $action;
    $controllerObj->$accion();
}

/*Realiza el llamdo al controlador seleccionado*/
function launch($controllerObj)
{
    if (isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])) {
        loadAction($controllerObj, $_GET["action"]);
    } else {
        loadAction($controllerObj, DEFAULT_ACTION);
    }
}
?>