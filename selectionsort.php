<?php
header('Content-Type: application/json');

$numbers_str = $_GET['numbers'];
$numbers = explode(",", $numbers_str);
  
$n = count($numbers);

for($i=0; $i<$n-1; $i++){
	$min = $i;
	for($j=$i+1; $j<$n; $j++){
		if($numbers[$j] < $numbers[$min]){
			$min = $j;
		}
	}
	
	$temp = $numbers[$i];
	$numbers[$i] = $numbers[$min];
	$numbers[$min] = $temp;
}
echo json_encode($numbers);
?>
