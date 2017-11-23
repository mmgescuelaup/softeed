<?php

/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 21/11/2017
 * Time: 10:01 AM
 */
class login extends coreController
{
    public function __construct()
    {
        parent::__construct();

        $this->model=new estudiantesModel($this->adapter);
    }
    public function index(){
        /*if (!empty($this->dataUser)){
            $this->loadView('public/signin',array());
        }*/
        $this->loadView('public/signin',array());
    }
}