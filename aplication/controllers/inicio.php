<?php

/**
 * Created by PhpStorm.
 * User: LuisAnc
 * Date: 27/11/2017
 * Time: 08:48 PM
 */
class inicio extends coreController
{
    public $adapter;
    private $model;
    private $data;

    public function __construct()
    {
        parent::__construct();

        $this->model=new inicioModel($this->adapter);
        $this->data=$this->dataUser1;
    }

    public function index(){
        $this->loadView('public/start',array(),$this->data);
    }
}