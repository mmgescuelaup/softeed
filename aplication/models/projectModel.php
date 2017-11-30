<?php

/**
 * Created by PhpStorm.
 * User: LuisAnc
 * Date: 29/11/2017
 * Time: 07:59 PM
 */
class projectModel extends coreModel
{
    private $table;

    public function __construct($adapter){
        $this->table="proyectos";
        parent::__construct($this->table, $adapter);
    }

}