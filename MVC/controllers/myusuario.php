<?php
/**
 * Created by PhpStorm.
 * User: Migue
 * Date: 16/10/14
 * Time: 08:06 PM
 */
$usuario = new Usuario();

$titulo = "Bienvenidos a Myusuario";
$contenido = "Contenido de la variable";

$variables=array('titulo'=>$titulo,'contenido'=>$contenido, 'nombre'=>$usuario->setUsuario());
view ('myusuario',$variables);