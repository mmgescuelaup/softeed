<?php

/**
 * Created by Atom.
 * User: MtMG
 * Date: 30/11/2017
 * Time: 12:43 AM
 */
class lesi extends coreController
{
    public $adapter;
    private $model;

    public function __construct()
    {
        parent::__construct();

        $this->model = new lesiModel($this->adapter);
    }
    public function index(){
        $this->loadView('public/lesi',array(),$this->dataUser1);
    }
}
