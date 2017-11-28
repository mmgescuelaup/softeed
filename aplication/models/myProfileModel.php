<?php

/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 28/11/2017
 * Time: 09:49 AM
 */
class myProfileModel extends coreModel
{
    private $table;

    public function __construct($adapter){
        $this->table="usuarios_entrar";
        parent::__construct($this->table, $adapter);
    }


}