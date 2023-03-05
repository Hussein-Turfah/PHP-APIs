<?php
$email = $_POST['email'];
$password = $_POST['password'];

$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number = preg_match('@[0-9]@', $password);
$special_character = preg_match('@[^\w]@', $password);

if (!preg_match('/^[^@\s]+@[^@\s]+\.[^@\s]+$/', $email)) {
    echo json_encode(['result' => false]);
}
else if (strlen($password)<8 || !$uppercase || !$lowercase || !$number || !$special_character ){
  echo json_encode(['result' => false]);
}
else{
  echo json_encode(['result' => true]);
}

?>
