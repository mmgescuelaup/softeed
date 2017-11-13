<?php

/**
 * Created by SocialNodes.
 * User: LuisAnc
 * Date: 02/11/2017
 * Base para crear modelos
 * Vc: 1.0.0
 */
class coreModel extends coreInits
{
    private $table;
    private $fluent;

    public function __construct($table, $adapter) {
        $this->table=(string) $table;
        $this->fluent=$adapter;
        parent::__construct($table, $this->fluent);
    }

    public function fluent(){
        return $this->fluent;
    }

    public function getTable(){
        return $this->table;
    }

    /*Ejecuta Querys string*/
    public function ejecutarSql($query){
        $query=$this->db()->query($query);
        if($query==true){
            if($query->num_rows>1){
                while($row = $query->fetch_object()) {
                    $resultSet[]=$row;
                }
            }elseif($query->num_rows==1){
                if($row = $query->fetch_object()) {
                    $resultSet=$row;
                }
            }else{
                $resultSet=true;
            }
        }else{
            $resultSet=false;
        }

        return $resultSet;
    }
}