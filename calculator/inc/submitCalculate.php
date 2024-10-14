<?php

function my_autoload_function($c)
{
	require_once(__DIR__ . "/../classes/{$c}.php");
}
spl_autoload_register("my_autoload_function");


if(isset($_POST['calculate'])){

	$firstNumber=trim($_POST["first_number"]);
	$secondNumber=trim($_POST["second_number"]);

	$number = new Calculator($firstNumber, $secondNumber);

	$operand1 = $number->getOperand1();
	$operand2 = $number->getOperand2();


	$errors=array();

	if($operand1==""){
		$errors['first_number']="First field can't be empty.";				
		}
	else if(!is_numeric($operand1)){
		$errors['first_number']="You can only enter numbers in first field.";
		}

	if($operand2==""){
		$errors['second_number']="Second field can't be empty.";				
		}
	else if(!is_numeric($operand2)){
		$errors['second_number']="You can only enter numbers in second field.";
		}

	
	

	
	if(empty($errors)){

		$operator=$_POST['operator'];
		if($operator=="+"){
			$number->addition();
			$result = $number->getResult();
		}
		else if($operator=="-"){
			$number->subtraction();
			$result = $number->getResult();
		}
		else if($operator=="*"){
			$number->multiplication();
			$result = $number->getResult();
		}
		else if($operator=="/"){
			$number->division();
			$result = $number->getResult();
		}
	}
}

?>