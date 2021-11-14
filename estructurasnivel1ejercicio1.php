<?php

function esPar($n){
    if (($n%2) == 0){
        return true;
    }
    else {
        return false;
    }


}
$i=6;
if (esPar($i)==true){
    echo $i." es par\n";
}
else {  
    echo $i. " es impar";
}


?>