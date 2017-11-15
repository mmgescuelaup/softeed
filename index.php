<?php
//Configuración global
require_once 'aplication/config/mainConfig.php';

//Base para los controladores
require_once 'aplication/core/coreController.php';

//Funciones para el controlador frontal
require_once 'aplication/core/coreMain.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  
   <!-- Meta -->
   
    <meta charset="UTF-8">
    <title>Softeed</title>
    <meta name="author" content="Social Nodes">
    <meta name="description" content="Softeed es la solución ideal para estudiantes y reclutadores permite al estudiante crear portafolios en el cual puede exponer sus proyectos, crear un perfil y darse a conocer, en cuanto al reclutador permite descubrir proyectos, portafolios, contactar y seleccionar futuros candidatos.">
    <meta name="keywords" content="Estudiantes, Proyectos, Freelance, Trabajos, Universidades">
    
    <!-- Styles -->
    
    <link rel="stylesheet" href="aplication/css/style.css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    
    
</head>
<body>
    
    <?PHP
        if(isset($_GET["aplication/controller"])){
            $controllerObj=loadController($_GET["aplication/controller"]);
            launch($controllerObj);
        }else{
            $controllerObj=loadController(DEFAULT_CONTROLLER);
            launch($controllerObj);
        }
    ?>    
    
    <script src="aplication/js/jquery-3.2.1.min.js"></script>
    <script src="aplication/js/main.js"></script>    
</body>
</html>