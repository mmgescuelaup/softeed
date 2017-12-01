<?php

/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 21/11/2017
 * Time: 09:30 AM
 */
class estudiantesModel extends coreModel
{
    private $table;

    public function __construct($adapter){
        $this->table="estudiante";
        parent::__construct($this->table, $adapter);
    }
}