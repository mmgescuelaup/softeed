<?php

/**
 * Created by Atom.
 * User: MtMG
 * Date: 30/11/2017
 * Time: 12:00 AM
 */
class idanimalModel extends coreModel
{
    private $table;

    public function __construct($adapter){
        $this->table="idanimal";
        parent::__construct($this->table, $adapter);
    }

}
