<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_spaceSignup = "localhost";
$database_spaceSignup = "spacesignup";
$username_spaceSignup = "root";
$password_spaceSignup = "";
$spaceSignup = mysql_pconnect($hostname_spaceSignup, $username_spaceSignup, $password_spaceSignup) or trigger_error(mysql_error(),E_USER_ERROR); 
?>