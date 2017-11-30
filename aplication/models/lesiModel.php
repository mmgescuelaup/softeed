<?php

/**
 * Created by Atom.
 * User: MtMG
 * Date: 30/11/2017
 * Time: 12:00 AM
 */
class lesiModel extends coreModel
{
    private $table;

    public function __construct($adapter){
        $this->table="lesi";
        parent::__construct($this->table, $adapter);
    }

}
