<?php
$host     = "localhost";
$username = "root";
$password = "";
$db_name  = "UKK_JualBuku";

mysql_connect("$host" , "root" , "") or die ("Database tidak ada" . mysql_error());
mysql_select_db("$db_name") or die (mysql_error());

 ?>
