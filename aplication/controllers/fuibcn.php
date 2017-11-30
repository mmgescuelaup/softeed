<?php

/**
 * Created by Atom.
 * User: MtMG
 * Date: 30/11/2017
 * Time: 1:03 AM
 */
class fuibcn extends coreController
{
    public $adapter;
    private $model;

    public function __construct()
    {
        parent::__construct();

        $this->model = new fuibcnModel($this->adapter);
    }
    public function index(){
        $this->loadView('public/fuibcn',array(),$this->dataUser1);
    }
}
