<?php
$conn_error = "couldn't connect";
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = 'alarm';
$mysql_db = "products";
if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db)){

    die($conn_error);

}
?>