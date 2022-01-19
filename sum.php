<?php
function cal($a){
    return $a*2;
}
echo cal(1)."\n";

function add($a,$b){
    return $a+$b;
};
echo add(1,2)."\n";

function calk($arr){
    $result=1;
    foreach($arr as $a){
        $result*=$a;
    }
    return $result;
}
echo calk([1,3,5,7,9])."\n";

 
 function max_array($arr){
     $max_number = $arr[0];
     foreach($arr as $a){
     if($max_number<$a){
         $max_number=$a;
     } 
     }
     return $max_number;
 }
echo max_array([5, 2, 3, 9, 7]);
