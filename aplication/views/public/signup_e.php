<!DOCTYPE html>
<html lang="es">
<head>

   <!-- Meta -->

    <meta charset="UTF-8">
    <title>Softeed - Registro Estudiante</title>
    <meta name="author" content="Social Nodes">
    <meta name="description" content="Softeed es la solución ideal para estudiantes y reclutadores permite al estudiante crear portafolios en el cual puede exponer sus proyectos, crear un perfil y darse a conocer, en cuanto al reclutador permite descubrir proyectos, portafolios, contactar y seleccionar futuros candidatos.">
    <meta name="keywords" content="Estudiantes, Proyectos, Freelance, Trabajos, Universidades">

    <!-- Styles -->

    <link rel="stylesheet" href="aplication/css/style.css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="aplication/css/font-awesome.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
        .c2{
            display: flex;
            flex-direction: row;
        }
        #lateral-pic{
            padding: 50px 50px 50px 50px;
            background-color: #F0F4F8;
            width: 60%;
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: center;
        }
        #img{
            background-color: #e0e4e8;
            margin-top: 10%;
            height: 90%;
            width: 100%;
        }
        #registro-form{
            padding: 50px 50px 50px 50px;
            background-color: #F0F4F8;
            width: 40%;
            display: flex;
            flex-direction: column;

        }
        #registro-form h1{
            display: flex;
            font-weight: 300;
            margin-bottom: 30px;
        }
        #registro-form form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-right: 22px;
            width: 85%;
        }
        .input-form{
            display: flex;
            margin:  5px 0px 5px 0px;
            padding: 13px 0px 13px 22px;
            border: 1px solid lightgray;
            border-radius: 50px;
            transition: color, background-color 0.5s;
            font-weight: 300;
            font-size: 1em;
            color: #5246F2;
            background-color: #F0F4F8;
            width: 100%;
        }
        .input-form:focus,
        .input-form:hover{
            background-color: #fff;
            outline: none;
            box-shadow: 5px 5px 20px 1px lightgray;
            border-color: #5246F2;
        }
        #file{
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }
        #file + label {
            font-size: 1em;
        }

        #file:focus + label,
        #file + label:hover {
            background-color: #5246F2;
            color: #ffffff;
            cursor: pointer;
        }
        #btn-form {
            transition: color, background-color 0.5s;
            background-color: #5246F2;
            color: #ffffff;
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 13px 0px;
            margin-left: 11px;
        }
        #btn-form:hover,
        #btn-form:focus{
            color:#000;
            background-color: #fff;
        }

        .iaccept{
            margin-top: 10px;
            text-align: center;
        }
        #select{
            overflow: hidden;
            padding: 0px;
            padding-right: 22px;
        }
        #select select{
            outline: none;
            background: transparent;
            border: none;
            font-size: 1em;
            height: 3em;
            width: 100%;
            margin-left: 11px;
        }
    </style>

</head>
<body>
    <div class="c2">
    <div class="container" id="lateral-pic">
        <img id="img" src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg">
        <p class="iaccept">Ya estas registrado? <a href="#">Inicia Sesión</a></p>
    </div>
    <div class="container" id="registro-form">
    <h1>Registrate gratis</h1>
    <form action="<?php echo $helper->url('registre','createEstudiante')?>" method="post" enctype ="multipart/form-data">
        <input type="text" name="nombre" id="" placeholder="Ingresa tu Nombre" class="input-form">
        <input type="text" name="apellido" id="" placeholder="Ingresa tu Apellido" class="input-form">
        <input type="email" name="correo" id="" placeholder="Ingresa tu Correo Electronico" class="input-form">
        <input type="text" name="sexo" id="" placeholder="Ingresa tu Sexo" class="input-form">
        <input type="number" name="edad" id="" placeholder="Ingresa tu Edad" class="input-form">
<!--        <input type="text" name="escolaridad" id="" placeholder="Ingresa tu Escolaridad" class="input-form">-->
        <div id="select" class="input-form">
        <select name="escolaridad" class="">
            <option value="medio">Medio-Superior</option>
            <option value="super">Superior</option>
            <option value="maest">Maestria</option>
        </select>
        </div>
        <input type="text" name="centro-estudios" id="" placeholder="Ingresa tu Centro de Estudios" class="input-form">
        <input type="file" name="file" id="file">
        <label for="file" class="input-form">    Ingresa tu Constancia de estudios</label>
        <input type="submit" name="boton" id="btn-form" value="Registrarse" class="input-form darkpurple">
        <input type="password" name="pass1" id="" placeholder="Escribe tu contraseña" class="input-form">
        <input type="password" name="pass2" id="" placeholder="Repite tu contraseña" class="input-form">
        <p class="iaccept">Al registrarte estás aceptando nuestros <a href="#">Términos y Condiciones</a></p>
    </form>
    </div>
    </div>
    <script src="aplication/js/jquery-3.2.1.min.js"></script>
    <script src="aplication/js/main.js"></script>
</body>
</html>
