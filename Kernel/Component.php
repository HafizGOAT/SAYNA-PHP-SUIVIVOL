<?php

namespace Kernel;

class Component{
    public static function display($type, $params){
        // Vérifier le type de bouton demandé
        switch($type){
            case 'button':
                // Afficher un bouton avec les paramètres donnés
                echo '<a href="' . $params['url'] . '" class="btn btn-' . $params['type'] . '  btn-xs"><i class="' . $params['icon'] . '"></i> </a>';
                break;
            // Ajouter d'autres types de boutons si nécessaire
            default:
                echo 'Type de bouton non reconnu';
        }
}
}