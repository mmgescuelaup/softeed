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
        $this->loadView('public/signin',array(),$this->dataUser1);
    }

    public function entrar(){
        $user=$_POST['mail'];
        $pass=$_POST['pass'];
        $result=$this->model->checkLogin($user,$pass);
        //var_dump($result);
        if (!empty($result)) {
            if ($result[0]='R'){
                $this->loadView("public/showcase",array('userData' =>$result, ),$this->dataUser1);
            }
            else if($result[0]='E'){
                $this->loadView("public/profile",array('userData' =>$result, ),$this->dataUser1);
            }
            else{
                $this->loadView("public/signin",array('userData' =>$result, ),$this->dataUser1);
            }
        }
    }
}