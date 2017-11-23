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

    public function __construct($gtable, $adapter) {
        $this->table=$gtable;
        $this->fluent=$adapter;
        parent::__construct($gtable, $this->fluent);
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
            if($query->rowCount()>1){
                $resultSet = $query->fetchAll();
                /*while($row = $query->fetch()) {
                    $resultSet[]=$row;
                }*/
            }
            elseif($query->rowCount()==1){

                $resultSet = $query->fetch();
                /*
                if($row = $query->fetch()) {
                    $resultSet=$row;
                }*/
            }
            else{
                $resultSet=true;
            }
        }
        else{
            $resultSet=false;
        }

        return $resultSet;
    }
}