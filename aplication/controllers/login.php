<?php

/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 21/11/2017
 * Time: 10:01 AM
 */
class login extends coreController
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
        $this->loadView('public/signin',array());
    }

    public function entrar(){
        $user=$_POST['mail'];
        $pass=$_POST['pass'];
        $result=$this->model->checkLogin($user,$pass);
        //var_dump($result);
        if (!empty($result)) {
            $this->loadView("public/estudiante",array('userData' =>$result, ));
            /*$id=$result[1];
            $userData=$this->model->GetuserDataEstudiante($id);
            var_dump($userData);*/
        }
    }
}