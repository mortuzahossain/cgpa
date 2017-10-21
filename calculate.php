<?php
    session_start();
?>
 


<?php

	if (!isset($_POST['calculate'])) {
		header('Location: index.php?message=unableaccess_universal');
		exit();
	}

	$subject_credit 		= "scredit";
	$subject_gain 			= "sgain";
	$get_total_subject		= $_SESSION['subject_generate'];

	$totalGain 				= 0;
	$total_credit 			= 0;

	$s_gain 				= array();
	$s_credit 				= array();


	for ($k=1; $k < $get_total_subject + 1 ; $k++) { 
		$s_gain[] 			=  $subject_gain.$k;
		$s_credit[] 		=  $subject_credit.$k;
	}

	// For calculating the total credit

	for ($i=0; $i < $get_total_subject; $i++) { 
		$total_credit = $total_credit + $_POST[$s_credit[$i]];
	}

	echo 'Total Credit: ' . $total_credit;

	// For calculating total gain

	for ($i=0; $i < $get_total_subject; $i++) { 
		$totalGain = $totalGain + ( $_POST[$s_credit[$i]] * $_POST[$s_gain[$i]] );
	}

	echo '<br>Total Gain: ' . $totalGain;

	// Storing the value of result

	$result = $totalGain/$total_credit;

	echo '<br>Result: ' . $result;

?>