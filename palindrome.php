<?php
// Palindrome API GET checker
$string = $_GET['string'];

if($string == strrev($string)){
  echo 'palindrome';
}else{
  echo 'not palindrome';
}
?>