<header class="full">
    <div class="container">
        <div class="left">
            <div class="logo">
                <a href="<?php echo $helper->url('inicio','index'); ?>"><img src="aplication/images/Softeed.jpg" alt="Softeed Logo" title="Softeed Logo"></a>
            </div>
            <nav>
                <div class="navigation full">
                    <div class="nav">
                        <a href="<?php echo $helper->url("estudiantes","index"); ?>" class="black">ESTUDIANTES</a>
                    </div>
                    <div class="nav">
                        <a href="<?php echo $helper->url("projects","index"); ?>" class="black">PROYECTOS</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="right">
              <div class="signin ">
                  <a href="<?php echo $helper->url("login","index")?>" class="black">Iniciar Sesión</a>
              </div>
              <div class="signup ">
                  <a href="<?php echo $helper->url("registre","index")?>" class="black">Registarse</a>
              </div>
        </div>
    </div>
</header>