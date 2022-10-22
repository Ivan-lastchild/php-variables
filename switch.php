<?php

$age = 25;

 switch ($age) {
     case $age <= 20:
         echo 'до 20 або дорівнює 20';
         break;
     case $age <= 40:
         echo 'більше 20 але менше або дорівнює 40';
         break;
     case $age <= 60:
         echo 'більше 40 але менше або дорівнює 60';
         break;
     case $age <= 80:
         echo 'більше 60 але менше або дорівнює 80';
         break;
     default:
         echo 'більше 80 ';
 }