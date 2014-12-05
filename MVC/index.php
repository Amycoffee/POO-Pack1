<?php
/**
 * 1)Llamar librerias auxiliares
 * 2) Obtener y validar URL
 * 3)Mandar llamar al controlador por medio de funciones
 */
require 'templates/header.php';
require 'helpers.php';
require 'clases/Usuario.php';
require 'bd/bd.php';
if(empty($_GET['url']))
    $_GET['url']='home';

controller($_GET['url']);