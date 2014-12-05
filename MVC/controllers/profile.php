<?php
/**
 * Created by PhpStorm.
 * User: Migue
 * Date: 13/10/14
 * Time: 08:25 PM
 */
$titulo="Bienvenidos al Profile";
$contenido="texto para el profile";

$variables=array('titulo'=>$titulo,'contenido'=>$contenido);//serializar los datos

view('home',$variables);//('en donde estoy-nombre del archivo actual',$variables a mandar)