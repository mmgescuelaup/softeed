<?php

/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 28/11/2017
 * Time: 09:48 AM
 */
class myProfile
{
    public $adapter;
    private $model;

    public function __construct()
    {
        parent::__construct();

        $this->model = new loginModel($this->adapter);
    }
    public function index(){
        /*if (!empty($this->dataUser)){
            $this->loadView('public/signin',array());
        }*/
        $this->loadView('private/my-profile',array(),$this->dataUser1);
    }
}