<?php

/**
 * Created by Atom.
 * User: MtMG
 * Date: 30/11/2017
 * Time: 12:16 AM
 */
class laivModel extends coreModel
{
    private $table;

    public function __construct($adapter){
        $this->table="laiv";
        parent::__construct($this->table, $adapter);
    }

}
