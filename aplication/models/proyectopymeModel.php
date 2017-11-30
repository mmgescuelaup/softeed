<?php

/**
 * Created by Atom.
 * User: MtMG
 * Date: 30/11/2017
 * Time: 12:00 AM
 */
class proyectopymeModel extends coreModel
{
    private $table;

    public function __construct($adapter){
        $this->table="proyectopyme";
        parent::__construct($this->table, $adapter);
    }

}
