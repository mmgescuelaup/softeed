<?php

/**
 * Created by PhpStorm.
 * User: LuisAnc
 * Date: 27/11/2017
 * Time: 08:50 PM
 */
class inicioModel extends coreModel
{
    private $table;

    public function __construct($adapter){
        $this->table="usuarios_entrar";
        parent::__construct($this->table, $adapter);
    }


}