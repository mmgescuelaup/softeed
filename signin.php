<!DOCTYPE html>
<html lang="es">
<head>

   <!-- Meta -->

    <meta charset="UTF-8">
    <title>Softeed - Iniciar Sesión</title>
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
        #sigin-form{
            padding: 50px 50px 50px 50px;
            background-color: #F0F4F8;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        #sigin-form h1{
            display: flex;
            font-weight: 300;
            margin-bottom: 30px;
        }
        #sigin-form form{
            justify-content: space-around;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-right: 22px;
            width: 30%;
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
    <div class="container" id="sigin-form">
    <h1>Iniciar Sesión</h1>
    <form action="" method="post" enctype ="multipart/form-data">
        <input type="email" name="mail" id="" placeholder="Correo Electronico" class="input-form">
        <input type="password" name="pass" id="" placeholder="Contraseña" class="input-form">

        <a href="#" class="iaccept">Olvidaste tu contraseña?</a>

        <input type="submit" name="boton" id="btn-form" value="Iniciar Sesión" class="input-form darkpurple">
        <p class="iaccept">No tienes una cuenta? <a href="#">Registrate!</a></p>
    </form>
    </div>

    <script src="aplication/js/jquery-3.2.1.min.js"></script>
    <script src="aplication/js/main.js"></script>
</body>
</html>
