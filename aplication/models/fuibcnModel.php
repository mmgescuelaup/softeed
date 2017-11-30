<?php

/**
 * Created by Atom.
 * User: MtMG
 * Date: 30/11/2017
 * Time: 1:07 AM
 */
class fuibcnModel extends coreModel
{
    private $table;

    public function __construct($adapter){
        $this->table="fuibcn";
        parent::__construct($this->table, $adapter);
    }

}
