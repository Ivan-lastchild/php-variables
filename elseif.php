<?php
 $last_name = "Ivanov";

 const SMALL_SURNAME = 5;
 const MEDIUM_SURNAME = 10;
 const LARGE_SURNAME = 15;

 $lengthOfArr = strlen($last_name);

 if ($lengthOfArr < SMALL_SURNAME){
     echo "Довжина вашого прізвища дорівнює {$lengthOfArr} і вона менше ніж " . SMALL_SURNAME ;
 } elseif ($lengthOfArr > SMALL_SURNAME && $lengthOfArr < MEDIUM_SURNAME ){
     echo "Довжина вашого прізвища дорівнює {$lengthOfArr} і вона більша за " . SMALL_SURNAME .
      " і менше ніж " . MEDIUM_SURNAME ;
 } elseif ($lengthOfArr > MEDIUM_SURNAME && $lengthOfArr < LARGE_SURNAME) {
     echo "Довжина вашого прізвища дорівнює {$lengthOfArr} і вона більша за " . MEDIUM_SURNAME .
         " і менше ніж " . LARGE_SURNAME ;
 } else {
     echo "Довжина вашого прізвища дорівнює {$lengthOfArr} і вона більша за " . LARGE_SURNAME;
 }