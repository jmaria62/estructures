<?php

function grado($porcentaje){
    if($porcentaje >= 60){
        echo $porcentaje. " es Primera División\n";

    } else if($porcentaje>=45){
        echo $porcentaje." es Segunda División\n";
    } else if($porcentaje >= 33){
        echo $porcentaje."es Tercera División\n";

    }else{
        echo$porcentaje." Otra vez será\n";

    }
}


grado(77);
grado(46);
grado(20);

?>