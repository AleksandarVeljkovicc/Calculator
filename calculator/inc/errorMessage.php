<?php

if(isset($errors)){
	foreach($errors as $error) {
		echo "<p class='message'> Error: " . $error . "</p>";
	}
}
?>