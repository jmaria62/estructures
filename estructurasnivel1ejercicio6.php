<?php

function isBitten(){
    $x = rand();
    if ($x % 2 == 0){
        return true;
    } else {
        return false;
    }


}
function imprime($v){
    if ($v==true){
        echo "true\n";
    }
    else{
        echo "false\n";
    }
}

for($i=0;$i<10;$i++){
    imprime(isBitten());
}


?>