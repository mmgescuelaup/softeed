<?php

/**
 * Created by PhpStorm.
 * User: LuisAnc
 * Date: 29/11/2017
 * Time: 11:26 AM
 */
class regitreModel extends coreModel
{
    private $table;

    public function __construct($adapter){
        $this->table="estudiantes";
        parent::__construct($this->table, $adapter);
    }

    public function addEstudiante($nombre,$apellidos,$sexo,$edad,$escolaridad,$estudios,$comprobante,$correo,$pass){
        $query="CALL REGISTRARESTUDIANTE($nombre, $apellidos, $sexo, $edad, $escolaridad, $estudios, 
	$comprobante, $correo, $pass);";
        $usuario=$this->ejecutarSql($query);
        return $usuario;
    }

    public function addReclutador($nombre,$apellido,$rfc,$edad,$empresa,$dir,$tel,$correo,$pass){

        $query="CALL REGISTRARESTUDIANTE($nombre, $apellido, $rfc, $edad,
            $empresa, $dir, $tel, $correo, $pass);";
        $usuario=$this->ejecutarSql($query);
        return $usuario;
    }
}