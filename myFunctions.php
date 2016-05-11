<?php

function cleanInput($conn, $value)
{
	$value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
	$value =  mysqli_real_escape_string($conn, $value);
	return $value;
}

?>