<?php

/**
 * Created by Atom.
 * User: MtMG
 * Date: 30/11/2017
 * Time: 1:54 AM
 */
class mezcalModel extends coreModel
{
    private $table;

    public function __construct($adapter){
        $this->table="mezcal";
        parent::__construct($this->table, $adapter);
    }

}
