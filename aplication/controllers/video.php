<?php

/**
 * Created by PhpStorm.
 * User: LuisAnc
 * Date: 29/11/2017
 * Time: 07:58 PM
 */
class video extends coreController
{
    public $adapter;
    private $model;

    public function __construct()
    {
        parent::__construct();

        $this->model = new pretmexModel($this->adapter);
    }
    public function index(){
        $this->loadView('public/video',array(),$this->dataUser1);
    }
}