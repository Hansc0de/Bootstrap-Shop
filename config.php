<?php
set_time_limit(0);
$host = 'localhost';
$dbas = 'shop_db';
$dbus = 'data_shop';
$dbpw = 'kyr0x123';
$tble = 'shop';

mysql_connect($host, $dbus, $dbpw) or die('<tr><td colspan="7" class="text-center bg-danger">Error : '.mysql_error().'</td></tr>');
mysql_select_db($dbas) or die('<tr><td colspan="7" class="text-center bg-danger">Error : '.mysql_error().'</td></tr>');
?>