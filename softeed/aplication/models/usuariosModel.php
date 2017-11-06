<?php
/**
 * Created by SocialNodes.
 * User: LuisAnc
 * Date: 04/11/2017
 * Modelo ejemplo basico
 */
class usuariosModel extends coreModel
{
    private $table;

    public function __construct($adapter){
        $this->table="usuarios";
        parent::__construct($this->table, $adapter);
    }

    //Metodos de consulta
    public function getUnUsuario($colunm,$valor){
        $query="SELECT * FROM usuarios WHERE ".$colunm."=".$valor;
        $usuario=$this->ejecutarSql($query);
        return $usuario;
    }
}