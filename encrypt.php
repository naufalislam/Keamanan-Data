<?php
function buatkode($b) {
$awalnya =
array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q",
"r","s","t","u","v","w","x","y","z");
$gantinya = array("~","!","@","#","$","%","^","&","*","(",")","_","-","+",
"=","|","}","{","[","]",";",":","?",">",".","<");
$hasilnya = str_replace($awalnya, $gantinya, $b);
echo $hasilnya;
}
function terjemahkan($t) {
$kodenya = array("~","!","@","#","$","%","^","&","*","(",")","_","-","+",
"=","|","}","{","[","]",";",":","?",">",".","<");
$terjemahanya =
array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q",
"r","s","t","u","v","w","x","y","z");
$hasilterjemahan = str_replace($kodenya, $terjemahanya, $t);
echo $hasilterjemahan;
}
?>
