<?php 

//sunucu bilgileri gir
$username="root";
$password="395000onur";
$sunucu="localhost";
$database="tamirci";


$baglan=mysql_connect($sunucu,$username,$password);
mysql_query("SET NAMES UTF8");


if(!$baglan)
{
	echo "Baglantı hatası:".mysql_errno(); 
	exit();
}
$db=mysql_select_db($database);
if(!$db) { echo "Veritabanı hatası:".mysql_error(); echo "<br>";

exit(); }


?>