<?php
function sum ($a, $b){
    return $a + $b;
}
function difference($a, $b){
    return $a - $b;
}
function mult($a, $b){
    return $a * $b;
}
function seg($a, $b){
    return ($a === 0) ? "На ноль делить нельзя!!!" : $a / $b;
}

function mathOperation($arg1, $arg2, $operation){
    switch ($operation) {
            case 'sum':
                   echo sum($arg1, $arg2);
                break;
            case 'difference':
                echo difference($arg1, $arg2);
               break;
            case 'mult':
                echo mult($arg1, $arg2);
               break;
            case 'seg':
                echo  seg($arg1, $arg2);
               break;
        
        default:
           echo "Нет такой функции";
            break;
    }
}

mathOperation(0, 6, 'seg');