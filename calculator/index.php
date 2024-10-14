<?php 
	require_once("inc/submitCalculate.php");
?>



<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="container_1">
	<div id="container_2">
		<p id="par"><?php if(isset($result)){echo $result;} ?></p>
	</div>
<form action="" name="calculator" method="POST">

	<label class="controls" for="first_number">Operand 1</label>
	<input class="controls" name="first_number" type="text" value="<?php if(isset($operand1)){echo $operand1;}?>" >
	<label class="controls" for="second_number" >Operand 2</label>
	<input class="controls" name="second_number" type="text" value="<?php if(isset($operand2)){echo $operand2;}?>" >

	<select class="controls" name="operator">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>
	<input class="controls" type="submit" id="sub" name="calculate" value="Calculate">

</form>
</div>
<div id="container_3">
<?php
	require_once("inc/errorMessage.php");
?>
</div>
</body>
</html>