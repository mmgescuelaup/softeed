<?php

/**
 * Created by SocialNodes.
 * User: LuisAnc
 * Date: 03/11/2017
 */
class coreUrl
{

    /*Url Builder*/
    public function url($controlador=DEFAULT_CONTROLLER,$accion=DEFAULT_ACTION){
        $urlString='';
        if ($accion=='index'){
            $urlString=$controlador.'/';
        }
        else{
            $urlString=$controlador.'/'.$accion;
        }
        //$urlString="index.php?controller=".$controlador."&action=".$accion;
        return $urlString;
    }
}