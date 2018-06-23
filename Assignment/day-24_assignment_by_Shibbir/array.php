<?php
include_once 'header.php';
?>


<h3 class="headline">1. array_combine()</h3>
<?php
	$a = array("Name", "College", "Department");
	$b = array("Shibbir Ahmed", "Ananda Mohan College", "Mathematics");
	$comb = array_combine($a, $b);
	echo "<pre>";
	print_r($comb);
	echo "</pre>";
?>

<h3 class="headline">2. array_merge()</h3>
<?php
	$a = array("f_name" => "Shibbir", "l_name" => "Ahmed");
	$b = array("n_name" => "Rizwan", "n2_name" => "Raihan");
	$merge = array_merge($a, $b);
	echo "<pre>";
	print_r($merge);
	echo "</pre>";
?>

<h3 class="headline">3. array_merge_recursive()</h3>
<?php
	$a = array("f_name" => "Shibbir", "l_name" => "Ahmed");
	$b = array("f_name" => "Rizwan", "l_name" => "Raihan");
	$merge_recu = array_merge_recursive($a, $b);
	echo "<pre>";
	print_r($merge_recu);
	echo "</pre>";
?>

<h3 class="headline">4. array_unshift()</h3>
<?php
	$a = array("Ahmed", "Rizwan");
	array_unshift($a, "Shibbir");
	echo "<pre>";
	print_r($a);
	echo "</pre>";
?>

<h3 class="headline">5. array_pop()</h3>
<?php
	$a = array("Shibbir", "Ahmed", "Rizwan" , "Raihan");
	array_pop($a);
	echo "<pre>";
	print_r($a);
	echo "</pre>";
?>

<h3 class="headline">6. array_push()</h3>
<?php
	$a = array("Shibbir", "Ahmed");
	array_push($a, 'Rizwan', 'Raihan');
	echo "<pre>";
	print_r($a);
	echo "</pre>";
?>

<h3 class="headline">7. array_pad()</h3>
<?php
	$a = array("Shibbir", "Ahmed");
	$pad = array_pad($a, 7, 'Rizwan');
	echo "<pre>";
	print_r($pad);
	echo "</pre>";
?>

<h3 class="headline">8. array_change_key_case()</h3>
<?php
	$a = array("Name" => "Shibbir", "Department" => "Mathematics");
	echo "<pre>";
	print_r(array_change_key_case($a,CASE_UPPER));
	echo "</pre>";
?>

<h3 class="headline">9. sort()</h3>
<?php
	$a = array("Shibbir", "Ahmed", "Rizwan");
	sort($a);
	echo "<pre>";
	print_r($a);
	echo "</pre>";
?>

<h3 class="headline">10. rsort</h3>
<?php
	$a = array("Shibbir", "Ahmed", "Rizwan");
	rsort($a);
	echo "<pre>";
	print_r($a);
	echo "</pre>";
?>

<h3 class="headline">11. ksort</h3>
<?php
	$a = array("First Name" => "Shibbir", "Middle Name" => "Ahmed", "Last Name" => "Rizwan");
	ksort($a);
	echo "<pre>";
	print_r($a);
	echo "</pre>";
?>

<h3 class="headline">12. asort</h3>
<?php
	$a = array("Shibbir", "Ahmed", "Rizwan");
	asort($a);
	echo "<pre>";
	print_r($a);
	echo "</pre>";
?>

<h3 class="headline">13. count</h3>
<?php
	$a = array("Shibbir", "Ahmed", "Rizwan");
	$length = count($a);
	echo $length;
?>

<h3 class="headline">14. array_diff()</h3>
<?php
	$a = array("First Name" => "Shibbir", "Middle Name" => "Ahmed", "Last Name" => "Rizwan");
	$b = array("First Name" => "Shibbir", "Middle Name" => "Ahmed", "Last Name" => "Raihan");
	$arr_dif = array_diff($a, $b);
	echo "<pre>";
	print_r($arr_dif);
	echo "</pre>";
?>

<h3 class="headline">15. array_diff_assoc()</h3>
<?php
	$a = array("First Name" => "Shibbir", "Middle Name" => "Ahmed", "Last Name" => "Rizwan");
	$b = array("First Name" => "Shibbir", "Middle Name" => "Ahmed", "Last Name" => "Raihan");
	
	echo "<pre>";
	print_r(array_diff_assoc($a, $b));
	echo "</pre>";
?> 



<?php 
include_once 'footer.php';
?>