<?php
/**
 * Created by PhpStorm.
 * User: Migue
 * Date: 16/10/14
 * Time: 08:06 PM
 */
$usuario2 = new Usuario();
?>
<html>
    <head></head>
        <body>
        <h1><?=$titulo ?></h1>
        <p><?=$contenido ?></p>
        <p><?=$nombre ?></p>
        <p><?php
            $usuario2->setUsuario();
            $usuario2->getUsuario();
            ?></p>
        <?=$usuario2->consultaGeneral();?>
        </body>
</html>