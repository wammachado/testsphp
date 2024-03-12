<?php
// php invertstring.php 
function invertString($string) {
    
   $palavras = explode(" ", $string);
   
   
   $stringReverse = array_reverse($palavras);
   
   
   $stringReverse = implode(" ", $stringReverse);
   
   return $stringReverse;
}

$strin = "Wender Afonso Martins Machado";
$strout = invertString ($strin);
echo $strout.PHP_EOL;

