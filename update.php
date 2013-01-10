<?php
//Update:
$usr = "carrol17_Admin";
$password = "joshsmells";
$host = "localhost";
$course = $_GET[course_name];
$query = "UPDATE Course_List SET content = '" . $_POST[content] . "' WHERE course_name = '$course'";
$dbconn = mysql_connect($host, $usr, $password) or die ('Could not
			connect to database: ' .mysql_error());
mysql_select_db("carrol17_CS_Wiki", $dbconn);
$result = mysql_query($query, $dbconn);
if($result)
	header("Location:courses.php");
else{
	echo $query . "</br>";
	echo mysql_error() . "</br>";
	echo "Something has gone wrong, please go home and tyr again. If the problem is not resolved please contact us with a full description of the problem so we can try to fix the issue. </br>";
}
?>
<html>
<a href="default.html">HOME</a>
</html>
