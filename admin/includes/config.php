<?php
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= 'ndururi';
$db_database	= 'tum_asso';

/* End config */



$link = mysql_pconnect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");

?>