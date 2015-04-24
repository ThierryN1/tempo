<?php
header("Refresh: 0; url=end.html"); //NOT url=/end.html
if($_GET["id"]=="1")
	$arr = array('firstName' => 'John', 'lastName' => 'Smith');
else 
	$arr = array('firstName' => 'Betty', 'lastName' => 'Johnson');
echo json_encode($arr);
?>