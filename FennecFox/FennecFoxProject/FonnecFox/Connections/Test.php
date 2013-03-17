<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Test = "localhost";
$database_Test = "burboss1_FennecFox";
$username_Test = "burboss1";
$password_Test = "bur123boss";
$Test = mysql_pconnect($hostname_Test, $username_Test, $password_Test) or trigger_error(mysql_error(),E_USER_ERROR); 
?>