<?php

/**
 * Created by PhpStorm.
 * User: MtMG
 * Date: 30/11/2017
 * Time: 12:16 AM
 */
class laiv extends coreController
{
    public $adapter;
    private $model;

    public function __construct()
    {
        parent::__construct();

        $this->model = new laivModel($this->adapter);
    }
    public function index(){
        $this->loadView('public/laiv',array(),$this->dataUser1);
    }
}
