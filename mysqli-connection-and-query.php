<?php

	$link = mysqli_connect('host','username','password','database_name') or die(mysql_error());
	mysqli_query($link,"SELECT * FROM 'tablename'");
?>
