<?
	$username="root";
	$password="0000";
	$database="mysql";
	mysql_connect(localhost,$username,$password);
	@mysql_select_db($database) or die("May the force be with u, but not this time!!!");

	$query="SELECT * FROM datosPrueba";
	$result = mysql_query($query);
?>