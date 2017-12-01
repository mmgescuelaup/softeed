<?php

/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 21/11/2017
 * Time: 09:28 AM
 */
class estudiantes extends coreController
{
    public $adapter;
    private $model;

    public function __construct()
    {
        parent::__construct();

        $this->model=new estudiantesModel($this->adapter);
    }
    public function index(){

        $data=$this->model->getAll();

        $this->loadView('public/students',array('data'=>$data),$this->dataUser1);
    }

    public function search(){

    }

}