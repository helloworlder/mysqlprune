<?php
mysql_connect("localhost", "DBUSER", "DBPASSWORD") or die(mysql_error());
mysql_select_db("DBNAME") or die(mysql_error());

for($i=0; $i<20; $i++) {
	$datetime = date('Y-m-d H:i:s');
	mysql_query("INSERT INTO LoginTime 
			(user_id, datetime) VALUES(1, '$datetime' ) ") 
			or die(mysql_error());  
	}
?>