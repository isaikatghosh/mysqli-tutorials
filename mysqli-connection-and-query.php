<?php

	$link = mysqli_connect('localhost','root','','database') or die(mysql_error());
	mysqli_query($link,"SELECT * FROM 'tablename'");
?>