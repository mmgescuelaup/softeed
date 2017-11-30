<?php

/**
 * Created by PhpStorm.
 * User: MtMG
 * Date: 30/11/2017
 * Time: 12:00 AM
 */
class proyectopyme extends coreController
{
    public $adapter;
    private $model;

    public function __construct()
    {
        parent::__construct();

        $this->model = new proyectopymeModel($this->adapter);
    }
    public function index(){
        $this->loadView('public/proyectopyme',array(),$this->dataUser1);
    }
}
