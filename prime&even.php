<?php
// prime and even age checker

$bd = $_POST['year'];
$bd = (int) $bd;
$date = (int) date("Y");
$age = $date - $bd;

if($age <= 1){
  echo $age + 'is prime';  
} else {
  for ($i = 2; $i <= sqrt($age);){
    if($age % $i === 0){
      echo $age . ' is not prime ';
      if($age % 2 != 0 ){
        echo $age . ' is not even ';
      }else{
        echo ' but even';
      }
      break;     
    }else{
      echo  $age . ' is prime';
      if($age % 2 == 0 ){
        echo   ' and even';
      }else{
        echo ' but not even';
      }
      break;
    }
  }
}

?>