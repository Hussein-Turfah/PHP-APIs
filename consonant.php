<?php 

//A POST API that accepts a string. First, move the first set of consonants 
//(one or more) to the end of the word. Second, add “ay” to the end of the word. 
//For example, the word “banana” would become “ananabay.”

$word= $_POST['word'];
$vowels = '@[aeoiu]@';

for($i = 0; $i < strlen($word);$i++){
  if(!preg_match($vowels,$word[$i])){
    $new_word = str_replace($word[$i],"",$word);
    echo $new_word.$word[$i].'ay';
    break;
  }
}

?>