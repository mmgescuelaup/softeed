<?php

/**
 * Created by PhpStorm.
 * User: MtMG
 * Date: 30/11/2017
 * Time: 12:00 AM
 */
class idanimal extends coreController
{
    public $adapter;
    private $model;

    public function __construct()
    {
        parent::__construct();

        $this->model = new idanimalModel($this->adapter);
    }
    public function index(){
        $this->loadView('public/idanimal',array(),$this->dataUser1);
    }
}
