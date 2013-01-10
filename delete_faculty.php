<?php
//Remove
	$usr = "carrol17_Admin";
	$password = "joshsmells";
	$host = "localhost";
	$faculty_name = $_GET[faculty_name];
	$query = "DELETE FROM Faculty_List WHERE '" . $faculty_name . "' = faculty_name";
	$dbconn = mysql_connect($host, $usr, $password) or die ('Could not
				connect to database: ' .mysql_error());
	mysql_select_db("carrol17_CS_Wiki", $dbconn);
	$result = mysql_query($query, $dbconn);
	if($result)
		header("Location:faculty.php");
	else
		echo "Delete failed " . mysql_error();
?>