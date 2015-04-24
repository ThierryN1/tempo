<?php

if($_GET["id"]=="1")
	$arr = array('firstName' => 'John', 'lastName' => 'Smith');
else 
	$arr = array('firstName' => 'Betty', 'lastName' => 'Johnson');
echo json_encode($arr);

?>