<?
$server="localhost";
$username="root";
$password="12345";
$database="test";

$conn=mysql_connect($server,$username,$password);
mysql_select_db($database,$conn);
?>