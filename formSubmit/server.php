<?php
/* One use location the other one refresh header */
if($_GET["id"]=="1")
	header("Location: end.html?id=".$_GET['id']."&app=".$_GET['app']."&name=John&points=111");
else 
	header("Refresh: 0; url=end.html?id=".$_GET['id']."&app=".$_GET['app']."&name=Betty&points=XXX");
?>