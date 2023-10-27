<?php
function divide($a,$b){
    if($b==0){
        throw new exception("divide by zero",1);

       
    }
    else{
        echo "result="($a,$b);
       
    }
}
try{
    divide(2,0);
}
catch(exception $obj){
    $c=$obj ->getcode();
    $m=$obj->getMessage();
    $f=$obj->getFile();
    $l=$obj->getline();
    echo"the error is occur in the file"  ;
}



?>