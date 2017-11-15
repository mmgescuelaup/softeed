<?php

/**
 * Created by PhpStorm.
 * User: LuisAnc
 * Date: 14/11/2017
 * Time: 08:53 PM
 */
class profileModel extends coreModel
{
    private $table;

    public function __construct($adapter){
        $this->table="usuarios";
        parent::__construct($this->table, $adapter);
    }

}