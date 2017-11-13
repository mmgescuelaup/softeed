<!DOCTYPE HTML>
<html lang="<?php echo $dataLog['languaje']; ?>">
<head>
    <meta charset="utf-8"/>
    <title>Vista de ejemplo</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="col-lg-7">
    <h3><?php echo $dataLog['view']; ?></h3>
    <?php foreach($allusers as $user) { ?>
        <hr>
        <?php echo $user->idUsuario; ?> -
        <?php echo $user->nombre; ?> -
        <?php echo $user->correo; ?> -
        <?php echo $user->telefono; ?>
            <div class="col-lg-offset-7">
                <a href="<?php echo $helper->url("usuarios","borrar"); ?><?php echo '/'.$user->idUsuario; ?>" class="btn btn-danger">Borrar</a>
            </div>
        </hr>
    <?php } ?>
</div>

<footer class="col-lg-12">
    <hr/>
    <a href="https://www.facebook.com/SocialNodes/"> Social Nodes S.A de C.V - <?php echo  date("Y"); ?>
</footer>
</body>
</html>
