<!DOCTYPE html>
<html lang="es">

<head>

    <!-- Meta -->

    <meta charset="UTF-8">
    <title>Softeed - Editar Perfil</title>
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
        body {
            background-color: brown;
        }

        #edita-perfil {
            display: flex;
            justify-content: center;

        }

        #registro-form {
            padding: 50px 50px 50px 50px;
            background-color: #F0F4F8;
            width: 40%;
            display: flex;
            flex-direction: column;
        }

        #registro-form h1 {
            display: flex;
            font-weight: 300;
            margin-bottom: 30px;
        }

        #form-registro {
            display: flex;
            flex-direction: row;
            justify-content: center;
            padding-right: 22px;
            width: 85%;
        }

        .input-form {
            display: flex;
            margin: 5px 0px 5px 0px;
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
        .input-form:hover {
            background-color: #fff;
            outline: none;
            box-shadow: 5px 5px 20px 1px lightgray;
            border-color: #5246F2;
        }

        #file {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        #file+label {
            font-size: 1em;
        }

        #file:focus+label,
        #file+label:hover {
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
        #btn-form:focus {
            color: #000;
            background-color: #fff;
        }

        #select {
            overflow: hidden;
            padding: 0px;
            padding-right: 22px;
        }

        #select select {
            outline: none;
            background: transparent;
            border: none;
            font-size: 1em;
            height: 3em;
            width: 100%;
            margin-left: 11px;
        }

        .labelsito {
            color: #7e7e7e;
            padding: 10px 0px 10px 11px;
        }

    </style>

</head>

<body>
    <div class="container" id="edita-perfil">
        <form action="" method="post" enctype="multipart/form-data" id="form-registro">
            <div class="" id="registro-form">
                <label for="nombre" class="labelsito">Nombre</label>
                <input type="text" name="nombre" id="" placeholder="Actualiza tu Nombre" class="input-form">
                <label for="apellido" class="labelsito">Apellido</label>
                <input type="text" name="apellido" id="" placeholder="Actualiza tu Apellido" class="input-form">
                <label for="correo" class="labelsito">Correo</label>
                <input type="email" name="correo" id="" placeholder="Actualiza tu Correo Electronico" class="input-form">
                <label for="sexo" class="labelsito">Sexo</label>
                <input type="text" name="sexo" id="" placeholder="Actualiza tu Sexo" class="input-form">
                <label for="edad" class="labelsito">Edad</label>
                <input type="number" name="edad" id="" placeholder="Actualiza tu Edad" class="input-form">
                <label for="escolaridad" class="labelsito">Escolaridad</label>
                <div id="select" class="input-form">
                <select name="escolaridad" class="">
                    <option value="medio">Medio-Superior</option>
                    <option value="super">Superior</option>
                    <option value="maest">Maestria</option>
                </select>
                </div>
                <label for="centro-estudios" class="labelsito">Centro de Estudios</label>
                <input type="text" name="centro-estudios" id="" placeholder="Actualiza tu Centro de Estudios" class="input-form">
                <input type="file" name="file" id="file">
                <label for="file" class="input-form">    Actualizar Constancia de estudios</label>
            </div>
            <div class="" id="registro-form">
                <label for="facebook" class="labelsito">Facebook</label>
                <input type="text" name="facebook" id="" placeholder="Facebook" class="input-form">
                <label for="instagram" class="labelsito">Instagram</label>
                <input type="text" name="instagram" id="" placeholder="Instagram" class="input-form">
                <label for="linedin" class="labelsito">Linkedin</label>
                <input type="text" name="linkedin" id="" placeholder="Likendin" class="input-form">
                <label for="twitter" class="labelsito">Twitter</label>
                <input type="text" name="twitter" id="" placeholder="Twitter" class="input-form">
                <label for="web" class="labelsito">Página web</label>
                <input type="text" name="web" id="" placeholder="Pagina web" class="input-form">
                <label for="otro" class="labelsito">Otro</label>
                <input type="text" name="otro" id="" placeholder="Otro" class="input-form">
                <label for="tel" class="labelsito">Teléfono</label>
                <input type="text" name="tel" id="" placeholder="Telefono" class="input-form">
                <label for="file" class="input-form">    Actualiza tu Avatar</label>
                <input type="file" name="file" id="file">
                <input type="submit" name="boton" id="btn-form" value="Registrarse" class="input-form darkpurple">
            </div>
        </form>
    </div>
    <script src="aplication/js/jquery-3.2.1.min.js"></script>
    <script src="aplication/js/main.js"></script>
</body>

</html>
