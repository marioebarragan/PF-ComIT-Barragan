<?php
	$myServer = "localhost";
    $myUser = "root";
    $myPass = "";
    $myDB = "runbahia";
    $DBH = @mysql_connect($myServer, $myUser, $myPass);
	if (!$DBH){
		die('<strong>No pudo conectarse:</strong> '. mysql_error());
	}else{
		//echo 'Conectado satisfactoriamente al servidor <br />';
	}
	mysql_select_db($myDB, $DBH) or die(mysql_error($DBH));
?>