<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_studentRegister = "localhost";
$database_studentRegister = "studentregister";
$username_studentRegister = "root";
$password_studentRegister = "";
$studentRegister = mysql_pconnect($hostname_studentRegister, $username_studentRegister, $password_studentRegister) or trigger_error(mysql_error(),E_USER_ERROR); 
?>