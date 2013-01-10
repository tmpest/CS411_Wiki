<?php
//Remove
	$usr = "carrol17_Admin";
	$password = "joshsmells";
	$host = "localhost";
	$course = $_GET[course_name];
	$query = "DELETE FROM Course_List WHERE '" . $course . "' = course_name";
	$dbconn = mysql_connect($host, $usr, $password) or die ('Could not
				connect to database: ' .mysql_error());
	mysql_select_db("carrol17_CS_Wiki", $dbconn);
	$result = mysql_query($query, $dbconn);
	if($result)
		header("Location:courses.php");
	else
		echo "Delete failed " . mysql_error();
?>