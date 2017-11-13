<?php
/**
 * Created by PhpStorm.
 * User: LuisAnc
 * Date: 04/11/2017
 * Time: 02:53 PM
 */

//Configuración global
require_once 'aplication/config/mainConfig.php';

//Base para los controladores
require_once 'aplication/core/coreController.php';

//Funciones para el controlador frontal
require_once 'aplication/core/coreMain.php';

//Cargamos controladores y acciones
if(isset($_GET["controller"])){
    $controllerObj=loadController($_GET["controller"]);
    launch($controllerObj);
}else{
    $controllerObj=loadController(DEFAULT_CONTROLLER);
    launch($controllerObj);
}

?>