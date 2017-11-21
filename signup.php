<!DOCTYPE html>
<html lang="es">
<head>

   <!-- Meta -->

    <meta charset="UTF-8">
    <title>Softeed - Registro</title>
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
        #choose{
            background-color: #F0F4F8;
            background: #252525 url(aplication/images/nodeatles.png) no-repeat fixed center;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            bottom: 0px;
            top: 70px;
            position: absolute;
        }
        #cuadro{
            padding: 30px;
            width: 500px;
            height: 500px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            z-index: 10;
        }
        #gradiente{
            position: absolute;
            background-color: #F0F4F8;
            padding: 30px;
            width: 500px;
            height: 500px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0.9;
            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#af8fe2+15,6a6ce0+40,6a6ce0+40,6a6ce0+58,61c0e2+90,61c0e2+100 */
            background: #af8fe2; /* Old browsers */
            background: -moz-linear-gradient(45deg, #af8fe2 15%, #6a6ce0 40%, #6a6ce0 40%, #6a6ce0 58%, #61c0e2 90%, #61c0e2 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(45deg, #af8fe2 15%,#6a6ce0 40%,#6a6ce0 40%,#6a6ce0 58%,#61c0e2 90%,#61c0e2 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(45deg, #af8fe2 15%,#6a6ce0 40%,#6a6ce0 40%,#6a6ce0 58%,#61c0e2 90%,#61c0e2 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#af8fe2', endColorstr='#61c0e2',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

        }
        #choose h1, #choose h2, #choose h3{
            display: flex;
            color: #fff;
        }
        #choose h1{
            font-weight: 400;
            margin-bottom: 30px;
        }
        #choose h2{
            font-weight: 300;
            margin-bottom: 30px;
            text-align: center;
        }
        #choose h3{
            font-weight: 200;
            margin-bottom: 30px;
        }
        .button{
            display: flex;
            color: #F0F4F8;
            background-color: #252525;
            border: none;
            transition: color, background-color 0.5s;
            font-weight: 300;
            font-size: 1em;
            border-radius: 50px;
            height: 3em;
            padding: 0px 50px;
        }
        .button:focus,
        .button:hover{
            background-color: #fff;
            color:#000;
            outline: none;
            box-shadow: 5px 5px 20px 1px #2d2d2d;
            border-color: #5246F2;
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
            color: #252525;
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
    </style>

</head>
<body>
    <div class="container" id="choose">
    <div id="gradiente"></div>
    <div id="cuadro">
    <h1>Registrate gratis!</h1>
    <h2>Unete a la comunidad de portafolios para estudiantes mas grande de México</h2>
    <h3>Me quiero registrar como:</h3>
    <div>
        <a href="/#"><button class="button">Reclutador</button></a>
        <br>
        <a href="/#"><button class="button">Estudiante</button></a>
    </div>
    </div>
    </div>

    <script src="aplication/js/jquery-3.2.1.min.js"></script>
    <script src="aplication/js/main.js"></script>
</body>
</html>
