<?php

/**
 * Created by Atom.
 * User: MtMG
 * Date: 30/11/2017
 * Time: 1:51 AM
 */
class mezcal extends coreController
{
    public $adapter;
    private $model;

    public function __construct()
    {
        parent::__construct();

        $this->model = new mezcalModel($this->adapter);
    }
    public function index(){
        $this->loadView('public/mezcal',array(),$this->dataUser1);
    }
}
