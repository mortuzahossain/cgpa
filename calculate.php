<?php

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		for ($k=1; $k < $i+1 ; $k++) { 
			$name[] =  $res.$k;
		}
		$totalGain = 0;
		for($n = 0; $n < $i ; $n++){
			$totalGain = $totalGain + ($all_sub_credit[$n] * $_POST[$name[$n]]);
		}
		$result = $totalGain/$total_credit;

	}

?>
