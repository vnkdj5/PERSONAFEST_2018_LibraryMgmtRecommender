<?php
include('ez_sql/shared/ez_sql_core.php');
include('ez_sql/mysqli/ez_sql_mysqli.php');

date_default_timezone_set('Asia/Manila'); //timezone

$db = new ezSQL_mysqli('root', '', 'l_project', 'localhost'); //user, password, database name, host
//define("site_root","http://localhost/mit-pro/",TRUE);
//$db = new ezSQL_mysqli('root', 'root', 'l_project', 'localhost'); //user, password, database name, host
?>
<?php
/*
$conn=mysql_connect('localhost','root','');
$db=mysql_select_db('signup',$conn);
if($db==TRUE)
{
	echo 'CONNECTED';
}
else
{
	echo 'NOT CONNECTED';
}
*/
?>
