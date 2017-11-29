<?php

/**
 * Created by PhpStorm.
 * User: LuisAnc
 * Date: 14/11/2017
 * Time: 08:08 PM
 */
class profile extends coreController
{
    public $adapter;
    private $model;

    public function __construct()
    {
        parent::__construct();

        $this->model=new profileModel($this->adapter);
    }

    public function index(){
        $this->loadView('public/profile',array('lang'=>DEFAULT_LANG),$this->dataUser1);
    }
}