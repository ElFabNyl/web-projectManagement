<?php

use Illuminate\Support\Facades\Route;

// ce helper va servir à ajouter la class 'active sur les élément de la nav ... en fonction de la page
if (! function_exists( 'activeLI')) {

    function activeLI($availableURL, $usename=false) {
//        ce script gere le dashboard
        if($usename){
            $name = Route::currentRouteName(); //j'utilise le nom de la route
            if(in_array($name, $availableURL)) {
//                return " text-white style='background: #9c27B0 !important;' ";
                return "text-white bg-primary";
            }
            return "";
        }

    }
}
