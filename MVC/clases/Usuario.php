<?php
/**
 * Created by PhpStorm.
 * User: Migue
 * Date: 16/10/14
 * Time: 07:58 PM
 */
class Usuario
{
    private $name;
    private $Id;
    private $Nombre;
    private $ApellidoPaterno;
    private $ApellidoMaterno;
    private $Nivel;
    public function getUsuario()
    {
        echo"<br>Mostrar usuario:$this->name";
    }

    public function setUsuario()
    {
        $this->name = "Miguel";
        return $this->name;
    }
    public function consultaGeneral(){
        $sql01 = "SELECT * FROM usuario WHERE Estatus=1 ORDER BY ApellidoPaterno ASC";
        $result01 = mysql_query($sql01) or die ("Error $sql01") ;

        echo"<div class=table-responsive>";
        echo"<table class=\"table table-striped\">";
        echo"<tr><td colspan='5' align='center'><strong>Lista de usuario</strong></td></tr>";
        echo"<tr><td>ID</td><td>NOMBRE</td><td>A PATERNO</td><td>A MATERNO</td><td>ESTATUS</td></tr>";
        while($field = mysql_fetch_array($result01)){
            $this->Id = $field['Id'];
            $this->Nombre = $field['Nombre'];
            $this->ApellidoPaterno = $field['ApellidoPaterno'];
            $this->ApellidoMaterno = $field['ApellidoPaterno'];
            $this->Nivel = $field['Nivel'];
            switch($this->Nivel){
                case 1:
                    $type ="Administrador";
                    break;
                case 2:
                    $type ="Maestro";
                    break;
                case 3;
                    $type ="Alumno";
                    break;
            }
            echo"<tr><td>$this->Id</td><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$this->Nivel</td></tr>";
        }
        echo"</table>";
        echo"</div>";
    }
}
