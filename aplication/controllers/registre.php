<?php

/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 21/11/2017
 * Time: 10:02 AM
 */
class registre extends coreController
{
    public $adapter;
    private $model;

    public function __construct()
    {
        parent::__construct();

        $this->model=new regitreModel($this->adapter);
    }

    public function index(){
        /*if (!empty($this->dataUser)){
            $this->loadView('public/signin',array());
        }*/
        $this->loadView('public/signup',array(),$this->dataUser1);
    }

    public function reclutador(){
        $this->loadView('public/signup_r',array(),$this->dataUser1);
    }

    public function createReclutador(){

    }

    public function createEstudiante(){
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $correo=$_POST['correo'];
        $edad=$_POST['edad'];
        $escolaridad=$_POST['escolaridad'];
        $estudio=$_POST['centro-estudios'];
        $comprobante='null';
        $pass=$_POST['pass1'];
        $sex=$_POST['sexo'];
        $this->model->addEstudiante($nombre,$apellido,$sex,$edad,$escolaridad,$estudio,$comprobante,$correo,$pass);
    }

    public function estudiante(){
        $this->loadView('public/signup_e',array(),$this->dataUser1);
    }
}