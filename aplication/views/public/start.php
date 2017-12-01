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
    <div class="index full">
        <div class="banner full" id="block" data-vide-bg="aplication/videos/Banner" data-vide-options="position 0% 50%">
            <div class="container">
                <div class="title">
                    <h2>DEMUESTRA AL MUNDO LO QUE SABES</h2>
                </div>
                <div class="subtitle">
                    <h3>Tus esfuerzos merecen ser exhibidos y recordados, desde tus pasiones hasta tus creaciones en el trabajo o en el aula.</h3>
                </div>
            </div>
        </div>
        
        <div class="about-us full">
            <div class="container">
                <div class="title">
                    <h3 class="darkpurple">El currículum no cuenta la historia completa</h3>
                    <h4>Únete a Softeed y consigue nuevas oportunidades</h4>
                </div>
                <div class="images full">
                    <img src="aplication/images/Uber.png" alt="">
                    <img src="aplication/images/Twitter.png" alt="">
                    <img src="aplication/images/Aereolab.png" alt="">
                    <img src="aplication/images/Computrabajo.png" alt="">
                    <img src="aplication/images/MercadoLibre.png" alt="">
                </div>
            </div>
        </div>
        <div class="how-works">
            <img src="aplication/images/HOw.PNG" alt="">
        </div>
        <div class="categories">
            <div class="showcase-categories">
            <div class="categories">
                <div class="category">
                    <img src="aplication/images/icons/software.png" alt="">
                    <a href="<?php echo $helper->url('software','index'); ?>">Software</a>
                </div>
                <div class="category">
                    <img src="aplication/images/icons/diseno.png" alt="">
                    <a href="<?php echo $helper->url('diseno','index'); ?>">Diseño</a>
                </div>
                <div class="category">
                    <img src="aplication/images/icons/ecologia.png" alt="">
                    <a href="<?php echo $helper->url('ecologia','index'); ?>">Ecología</a>
                </div>
            </div>
            <div class="categories">
                <div class="category">
                    <img src="aplication/images/icons/turismo.png" alt="">
                    <a href="<?php echo $helper->url('turismo','index'); ?>">Turismo</a>
                </div>            
                <div class="category">
                    <img src="aplication/images/icons/fotografia.png" alt="">
                    <a href="<?php echo $helper->url('fotografia','index'); ?>">Fotografía</a>
                </div>
                <div class="category">
                    <img src="aplication/images/icons/administracion.png" alt="">
                    <a href="<?php echo $helper->url('administracion','index'); ?>">Administración</a>
                </div>
            </div>
        </div>
        </div>
        
        <div class="showcase-projects full">
            <div class="container">
                <div class="row full">
                    <div class="card">
                        <div class="image">
                            <img src="aplication/images/card1.jpg" alt="">
                        </div>
                        <div class="title">
                            <h4>PretMex - Aliado Financiero</h4>
                            <p>@PechPech</p>
                        </div>
                        <div class="description">
                            <p>PretMex es tu mejor aliado financiero, te ayudará a realizar un prestamo que vaya de acuerdo a tus necesidades...</p>
                        </div>
                        <div class="view">
                            <a href="#">Próximamente</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="image">
                            <img src="aplication/images/card2.jpg" alt="">
                        </div>
                        <div class="title">
                            <h4>Teclean - Accelerator</h4>
                            <p>@TrejoCode</p>
                        </div>
                        <div class="description">
                            <p>Aceleradora que impulsa proyectos de alto impacto con un programa abierto a toda la comunidad...</p>
                        </div>
                        <div class="view">
                            <a href="#">Próximamente</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="image">
                            <img src="aplication/images/card3.jpg" alt="">
                        </div>
                        <div class="title">
                            <h4>Go Parken</h4>
                            <p>@MMGXTURR</p>
                        </div>
                        <div class="description">
                            <p>Marketplace de servicios automotrices. conectamos dueños de autos que requieren servicios con los mejores...</p>
                        </div>
                        <div class="view">
                            <a href="<?php echo $helper->url('goparken','index'); ?>">Ver más</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="image">
                            <img src="aplication/images/card4.png" alt="">
                        </div>
                        <div class="title">
                            <h4>Posible</h4>
                            <p>@PedroRM</p>
                        </div>
                        <div class="description">
                            <p>Es un programa que te ofrece formación, herramientas, conocimientos y contactos necesarios para...</p>
                        </div>
                        <div class="view">
                            <a href="#">Próximamente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    <script src="aplication/js/jquery-3.2.1.min.js"></script>
    <script src="aplication/js/main.js"></script> 
    <script src="aplication/js/jquery.vide.min.js"></script> 
</body>
</html>