<?php
//Insert:
$usr = "carrol17_Admin";
$password = "joshsmells";
$host = "localhost";
$sql = "INSERT INTO Course_List (course_name, content) VALUES ('" . $_POST[course_name] . "', '" . $_POST[content] . "')";
echo $sql;
$dbconn = mysql_connect($host, $usr, $password) or die ('Could not
			connect to database: ' .mysql_error());
mysql_select_db("carrol17_CS_Wiki", $dbconn);
$result = mysql_query($sql, $dbconn);

if(result)
	echo "1 record added </br>";
else
	echo mysql_error() . "</br>";
?>
<html>
<a href="default.html"> HOME</a>
</html>	
