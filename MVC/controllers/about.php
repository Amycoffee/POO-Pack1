<?php
/**
 * Created by PhpStorm.
 * User: Migue
 * Date: 13/10/14
 * Time: 07:48 PM
 */
$titulo="Bienvenidos al about";
$contenido="texto para el about";

$variables=array('titulo'=>$titulo,'contenido'=>$contenido);//serializar los datos

view('about',$variables);//('en donde estoy',$variables a mandar)