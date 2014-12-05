<?php
/**
 * Created by PhpStorm.
 * User: Migue
 * Date: 13/10/14
 * Time: 07:00 PM
 */
$titulo="Bienvenidos al Home";
$contenido="texto para el home";

$variables=array('titulo'=>$titulo,'contenido'=>$contenido);//serializar los datos

view('home',$variables);//('en donde estoy',$variables a mandar)