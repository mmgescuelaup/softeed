<?php

class loginModel extends coreModel
{
	private $table;

    public function __construct($adapter){
        $this->table="usuarios_entrar";
        parent::__construct($this->table, $adapter);
    }

    public function checkLogin($user,$pass){
    	$query="SELECT TIPO_USUARIO,ID_ESTUDIANTE,ID_RECLUTADOR FROM ".$this->table." WHERE ".
    	"correo = '".$user."' AND contraseña = '".$pass."'";
        $usuario=$this->ejecutarSql($query);
        return $usuario;
    }

    public function GetuserDataReclutador($id){
    	$query="SELECT * FROM RECLUTADOR WHERE ID = $id";
        $usuario=$this->ejecutarSql($query);
        return $usuario;
    }

    public function GetuserDataEstudiante($id){
        $query="SELECT * FROM estudiante WHERE ID = $id";
        $usuario=$this->ejecutarSql($query);
        return $usuario;
    }

    public function getSkills($id){
        $query="SELECT T.NOMBRE FROM estudiante_proyecto EP
	INNER JOIN proyectos P ON EP.id_Proyecto = P.id
	INNER JOIN proyecto_tag PT ON PT.ID_PROYECTO = P.id
	INNER JOIN tags T ON PT.ID_TAG = T.ID
	WHERE EP.id_Estudiante = $id";
        $usuario=$this->ejecutarSql($query);
        return $usuario;
    }
}
