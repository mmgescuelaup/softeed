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

    <link rel="stylesheet" href="../../css/style.css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.css">
    <link rel="shortcut icon" href="../../../favicon.ico" type="image/x-icon">
    <style>
        .edita-perfil {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .registro-form {
            padding: 50px 50px 50px 50px;
            background-color: #F0F4F8;
            width: 40%;
            display: flex;
            flex-direction: column;
        }

        #form-datos {
            display: flex;
            flex-direction: row;
            justify-content: center;
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

        .input-file {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .input-file+label {
            font-size: 1em;
        }
        .input-file:focus+label,
        .input-file+label:hover{
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
        #avatar-section{
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            height: 262px;
            background-color: #88a6c6;
            margin-bottom: 125px;

        }
        #avatar-section img{
            height: 250px;
            width: 250px;
            border-radius: 50%;
            border: 11px solid #F0F4F8;
            position: relative;
            bottom: -125px;
        }
        #avatar-section label svg{
            position: relative;
            background-color: #6684F2;
            border-radius: 50%;
            padding: 6px;
            bottom: 125px;
            left: 100px;
            margin-bottom: -40px;
        }
        #avatar-section label svg:hover,
        #avatar-section label svg:focus {
            background-color: #5246F2;
        }

    </style>

</head>

<body>
    <header class="full">
        <div class="container">
            <div class="left">
                <div class="logo">
                    <a href="#"><img src="https://cdn.glitch.com/35bff8be-8321-4cb9-8003-b418d7907a90%2FSofteed.jpg?1511162572851" alt="Softeed Logo" title="Softeed Logo"></a>
                </div>
                <nav>
                    <div class="navigation full">
                        <div class="nav">
                            <a href="#" class="black">ESTUDIANTES</a>
                        </div>
                        <div class="nav">
                            <a href="#" class="black">PROYECTOS</a>
                        </div>
                        <div class="nav">
                            <a href="#" class="black">RECLUTAR</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="right">
                <div class="signin ">
                    <a href="/signin.html" class="black">Iniciar Sesión</a>
                </div>
                <div class="signup ">
                    <a href="/signup.html" class="black">Registarse</a>
                </div>
            </div>
        </div>
    </header>


    <div class="edita-perfil">
       <div id="avatar-section">
           <img src="../../images/sample-profile.jpg" id="avatar" alt="imagen de perfil">
           <form id="avatar-form" action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file-a" id="file-a" class="input-file">
            <label for="file-a" class="input-form">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 -5 100 120" style="enable-background:new 0 0 100 100;" xml:space="preserve" width="40px" height="40px">
            <g>
                <g>
                    <path d="M50,40c-8.285,0-15,6.718-15,15c0,8.285,6.715,15,15,15c8.283,0,15-6.715,15-15    C65,46.718,58.283,40,50,40z M90,25H78c-1.65,0-3.428-1.28-3.949-2.846l-3.102-9.309C70.426,11.28,68.65,10,67,10H33    c-1.65,0-3.428,1.28-3.949,2.846l-3.102,9.309C25.426,23.72,23.65,25,22,25H10C4.5,25,0,29.5,0,35v45c0,5.5,4.5,10,10,10h80    c5.5,0,10-4.5,10-10V35C100,29.5,95.5,25,90,25z M50,80c-13.807,0-25-11.193-25-25c0-13.806,11.193-25,25-25    c13.805,0,25,11.194,25,25C75,68.807,63.805,80,50,80z M86.5,41.993c-1.932,0-3.5-1.566-3.5-3.5c0-1.932,1.568-3.5,3.5-3.5    c1.934,0,3.5,1.568,3.5,3.5C90,40.427,88.433,41.993,86.5,41.993z" fill="#FFFFFF"/>
                </g>
            </g>
            </svg>
            </label>
           </form>
       </div>
        <form action="" method="post" enctype="multipart/form-data" id="form-datos">
            <div class="registro-form">
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
                <input type="file" name="file" id="file" class="input-file">
                <label for="file" class="input-form">    Actualizar Constancia de estudios</label>
            </div>

            <div class="registro-form">
                <label for="alias" class="labelsito">Alias</label>
                <input type="text" name="alias" id="" placeholder="Alias" class="input-form">
                <label for="facebook" class="labelsito">Facebook</label>
                <input type="text" name="facebook" id="" placeholder="Facebook" class="input-form">
                <label for="instagram" class="labelsito">Instagram</label>
                <input type="text" name="instagram" id="" placeholder="Instagram" class="input-form">
                <label for="linkedin" class="labelsito">Linkedin</label>
                <input type="text" name="linkedin" id="" placeholder="Likendin" class="input-form">
                <label for="twitter" class="labelsito">Twitter</label>
                <input type="text" name="twitter" id="" placeholder="Twitter" class="input-form">
                <label for="web" class="labelsito">Página web</label>
                <input type="text" name="web" id="" placeholder="Pagina web" class="input-form">
                <label for="otro" class="labelsito">Otro</label>
                <input type="text" name="otro" id="" placeholder="Otro" class="input-form">
                <input type="submit" name="boton" id="btn-form" value="Guardar Cambios" class="input-form darkpurple">
            </div>

            <div class="registro-form">
                <label for="horario" class="labelsito">Horario de Disponibilidad</label>
                <input type="text" name="horario" id="" placeholder="Horario de Disponibilidad" class="input-form">

                <label for="telefono" class="labelsito">Teléfono</label>
                <input type="text" name="telefono" id="" placeholder="Teléfono" class="input-form">

                <label for="disponible" class="labelsito">Disponibilidad de contratación</label>
                <input type="text" name="disponible" id="" placeholder="Disponible" class="input-form">

                <label for="carrera" class="labelsito">Carrera</label>
                <input type="text" name="carrera" id="" placeholder="Carrera" class="input-form">

                <label for="pais" class="labelsito">Pais</label>
                <input type="text" name="pais" id="" placeholder="Pais" class="input-form">

                <label for="ciudad" class="labelsito">Ciudad</label>
                <input type="text" name="ciudad" id="" placeholder="Ciudad" class="input-form">

                <label for="skills" class="labelsito">Skills</label>
                <input type="text" name="skills" id="" placeholder="Skills" class="input-form">

            </div>
        </form>

        <form action="" method="post" enctype="multipart/form-data" id="form-datos">
            <div class="registro-form">
                <label for="pass1" class="labelsito">Contraseña</label>
                <input type="password" name="pass1" id="" placeholder="Contraseña" class="input-form">
                <label for="pass2" class="labelsito">Repite tu contraseña</label>
                <input type="password" name="pass2" id="" placeholder="Repite tu contraseña" class="input-form">
                <input type="submit" name="boton" id="btn-form" value="Cambiar Contraseña" class="input-form darkpurple">
            </div>
        </form>

    </div>
    <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="../../js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            //Al seleccionar un archivo para subir
            $("#file-a").on('change', function(){
                var image = $('#file-a').val();
                var img_ex = /(.jpg|.jpeg|.png|.gif)$/i;

                //validar tipo de archivo
                if(!img_ex.exec(image)){
                    alert('Please upload only .jpg/.jpeg/.png/.gif file.');
                    $('#file-a').val('');
                    return false;
                }else{
                    $( "#avatar-form" ).submit();
                }
            });
        });

        //After completion of image upload process
        function completeUpload(success, fileName) {
            if(success == 1){
                $('#avatar').attr("src", "");
                $('#avatar').attr("src", fileName);
                $('#avatar-form').attr("value", fileName);
            }else{
                alert('Hubo un error al subir la imagen');
            }
            return true;
        }
        </script>
</body>

</html>
