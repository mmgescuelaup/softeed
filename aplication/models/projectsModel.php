<?php

/**
 * Created by PhpStorm.
 * User: LuisAnc
 * Date: 14/11/2017
 * Time: 09:09 PM
 */
class projectsModel extends coreModel
{
    private $table;

    public function __construct($adapter){
        $this->table="usuarios";
        parent::__construct($this->table, $adapter);
    }
}