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
            //echo "id".$result[2];
            if ($result[0]=='R'){
                $this->dataUser1=$this->model->GetuserDataReclutador($result[2]);
                $this->loadView("public/students",array('userData' =>$this->dataUser1),$this->dataUser1);
            }
            else if($result[0]=='E'){
                $this->dataUser1=$this->model->GetuserDataEstudiante($result[1]);
                $skills=$this->model->getSkills($result[1]);
                $this->loadView("private/my-profile",array('skils' =>$skills),$this->dataUser1);
            }
            else{
                $this->loadView("public/signin",array('userData' =>$this->dataUser1),$this->dataUser1);
            }
        }
    }
}