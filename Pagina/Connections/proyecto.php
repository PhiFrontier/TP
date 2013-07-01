<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_proyecto = "127.0.0.1";
$database_proyecto = "proyecto";
$username_proyecto = "root";
$password_proyecto = "";
$proyecto = mysql_pconnect($hostname_proyecto, $username_proyecto, $password_proyecto) or trigger_error(mysql_error(),E_USER_ERROR); 
?>