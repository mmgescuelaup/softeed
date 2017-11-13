<?php

/**
 * Created by SocialNodes.
 * User: LuisAnc
 * Date: 02/11/2017
 * Crea conexion con base de datos usando PDO
 * Vc: 1.0.0
 */
class coreConection
{
    private $host, $user, $pass, $database, $charset;

    public function __construct() {
        $db_cfg = require_once 'aplication/config/dbConfig.php';
        $this->driver='mysql';
        $this->host=$db_cfg["host"];
        $this->user=$db_cfg["user"];
        $this->pass=$db_cfg["pass"];
        $this->database=$db_cfg["database"];
        $this->charset='utf8';
    }

    public function startConexion(){

        $con=new \PDO('mysql:host='.$this->host.'; dbname='.$this->database, $this->user, $this->pass);
        $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $con->exec("SET CHARACTER SET utf8");

        return $con;
    }
}