<?php

/**
 * Created by PhpStorm.
 * User: LuisAnc
 * Date: 29/11/2017
 * Time: 07:58 PM
 */
class project extends coreController
{
    public $adapter;
    private $model;

    public function __construct()
    {
        parent::__construct();

        $this->model = new projectModel($this->adapter);
    }
    public function index(){
        /*if (!empty($this->dataUser)){
            $this->loadView('public/signin',array());
        }*/
        $this->loadView('public/project',array(),$this->dataUser1);
    }
}