<?php
    #taille d'un tableau
    function taille_tableau($tableau){
        $i=0;
        foreach ($tableau as $key => $value) {
            foreach ($key as $value) {
                $i++;
            }
        }
        return $i;
    }
?>